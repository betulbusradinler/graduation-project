<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\kategori;  // kategoriye ait bilgilerin  tutulduğu model dosyası
use App\Model\BlogDetay; // BlogDetay'a ait bilgilerin  tutulduğu model dosyası

class AnasayfaController extends Controller
{
    public function index(){

        // kategoriler değişkeni ile birlikte vt dan tüm kayıtları aldık ve compact ile bunu view e gönderdik
        $kategoriler = kategori::all();

        // Blogdetay da tutulan en son yüklenen içeriğe ulaştık ve bu içerikleri tersten sıralayarak getirdik
        // böylece en yeni tarihten en eski tarihe göre anasayfa viewinde görüntüleme imkanı bulduk.
        $son_yazilar = BlogDetay::on()
            ->join('blog','blog.id','blog_detay.blog_id')
            ->where('blog_detay.son_yazilar',1)
            ->orderBy('guncelleme_tarihi','desc')
            ->take(6)
            ->get();

        //Buradaki with komutunu kullanmamızın sebebi blogdetay sayfasındaki popular_yaziları çektikten sonra
        // popular blog yazılarına ait almak istediğimiz bilgiler olacaktır bu da blog sayfasına bulunmaktadır işte burada
        //veri t.da önce blog_detaydan gidip popular yazıları alacak(kaç tane getirmek istiyorsa)
        // daha sonra bu gelen yazıların istediği sütunları alabilmek için blog tablosuna gidicek
        //Dolayısıyla 5 tane ppopular yazı çektiyse 5 kere sorgu çalışıcak,
        // ve bu 5i için de 5 kere blogdaki bilgilere gidicek ANCAK with ile sadece 2 kere sorgu çalıştırıyoruz.
        $popular_yazilar = BlogDetay::on()
            ->with('blog')
            ->where('popular_yazilar',1)
            ->take(6)
            ->get();
        return view('anasayfa',compact('kategoriler','son_yazilar','popular_yazilar'));
    }
}
