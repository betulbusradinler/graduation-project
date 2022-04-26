<?php

namespace App\Http\Controllers;

use App\Model\BlogDetay;
use Illuminate\Http\Request;
use App\Model\Kategori;
class KategoriController extends Controller
{
    //Kategori controllerından yönlendirilen 2 view vardır. KategoriListesi var olan kategorileri gösterir.
    //kategoriler ise (view dosyalarından bahsediyorum) O kategoriye ait blogları görüntüler.
    // kategoride 2 fonksiyon bulunmasının sebebi index() fonsiyonunun kategori adlarının listelendiği sayfayı açması
    //kategori() fonsiyonunun ise o kategoriye ait yazıların listelendiği sayfayı açması.
    // Yani 2 farklı template yapısı olduğu için bu yönteme başvurulumuştur

    public function index(){
        $kategoriler = Kategori::all();
        $son_yazilar = BlogDetay::on()
            ->join('blog','blog.id','blog_detay.blog_id')
            ->where('blog_detay.son_yazilar',1)
            ->orderBy('olusturulma_tarihi','desc')
            ->take(6)
            ->get();
        return view('kategoriListesi',compact('kategoriler','son_yazilar'));
    }

    public function kategori($slug_kategoriad){
        $kategoriler = Kategori::all();
        $slug_kategoriad = Kategori::on()->where('slug',$slug_kategoriad)->firstorfail();
        $bloglar = $slug_kategoriad->blog()->paginate(6);
        $en_cok_okunanlar = BlogDetay::on()
            ->with('blog')
            ->where('en_cok_okunan',1)
            ->take(4)
            ->get();

        return view('kategoriler',compact('slug_kategoriad','bloglar','kategoriler','en_cok_okunanlar'));
    }
}

