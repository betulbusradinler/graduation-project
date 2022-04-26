<h1>{{config('app.name')}}</h1>
<p>Merhaba {{$kullanici->AdSoyad}}, kaydınız başarılı bir şekilde tamamlanmıştır</p>
<p>Kaydınızı aktifleştirmek için
    <a href="{{config('app.url')}}/yonetim/aktiflestir/{{$kullanici->aktivasyon_anahtari}}">tıklayın</a>
 veya  aşağıdaki bağlantıyı tarayıcınızda açın</p>
<p>{{config('app.url')}}/yonetim/aktiflestir/{{$kullanici->aktivasyon_anahtari}}</p>


<!-- GÖNDERECEĞİMİZ MAİL İÇERİĞİNİ ARTIK BURADA AYARLAYABİLİRİZ-->
