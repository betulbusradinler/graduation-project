<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\blog;
use App\Model\BlogDetay;
class BlogspotController extends Controller
{
    public function index($blog_slug=""){
        //aranılan slug değeri boşsa anasayfaya yönlendirme yapılır.


        if ($blog_slug == "") return redirect()->route('anasayfa');


// slug değerine ait kaydı çeker ve bunu $blog_slug değişkenine atar.
// Bir hata oluşması sonucunda firstorfail fonksiyonu çalışır.Bu kayıt bulma ve sonuç olarak tüm satırları döndürür
// ancak bulunamadı durumda bir istisna atma için çalışır.

        $blog_slug=blog::on()->where('slug',$blog_slug)->firstorfail();

        //blog sayfasında en çok okunan yazıları görüntülemek için blog detay modelinden 4 tane kayıt getirdik
        $en_cok_okunanlar = BlogDetay::on()
            ->with('blog')
            ->where('en_cok_okunan',1)
            ->take(4)
            ->get();
        return view('blogspot',compact('blog_slug','en_cok_okunanlar'));
    }


// Buradaki ara fonksiyonu arama çubuğuna girilen değerler eğer blog tablosunda varsa alır ve arama viewini görüntüler
// paginate fonksiyonu ise sayfalama yapar
    public function ara(){
        $aranan=request()->input('aranan');
        $bloglar = blog::on()
            ->with('kategori')
            ->where('blog_baslik','like',"%$aranan%")
            ->orWhere('icerik','like',"%$aranan%")
            ->paginate(8);
       request()->flash();
        return view('arama',compact('aranan','bloglar'));

    }
}
