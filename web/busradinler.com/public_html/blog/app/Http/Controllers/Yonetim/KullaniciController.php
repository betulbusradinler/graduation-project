<?php /** @noinspection PhpUnused */

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Mail\KullaniciKayitMail;
use App\Model\Kategori;
use App\Model\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class KullaniciController extends Controller
{
// Normalde bu kod sadece giriş yapan kullanıcılar için çalışıyordu ancak bende çalışmadı
    /* public function _constructur(){
        $this->middleware('guest')->except('cikisyap');
     }*/

    public function oturumac()
    {

        return view('yonetim.oturumac');
    }

    public function giris()
    {
        // formdan gelen bilgilerin doğrulama işlemi için  validate fonksiyonunu kullanıyoruz
        /** @noinspection PhpUnhandledExceptionInspection */
        $this->validate(request(), [
            'email' => 'required|email',
            'sifre' => 'required',
        ]);

        // attempt() ile birlikte giriş bilgilerini dizi olarak gönderebiliyoruz
        // eğer bu bilgiler doğru olarak geldiyse yani giriş yapıldıysa aşağıdakileri yap
        // requestin session bilgisini yenile

        if (auth()->attempt(['email' => request('email'), 'password' => request('sifre')])) {
            request()->session()->regenerate();
            return redirect()->intended('yonetim/anasayfa');
        } else {
            $errors = ['email / sifre ', 'Hatalı giriş'];
            return back()->withInput()->withErrors($errors);
        }
    }

    public function cikisyap()
    {
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('yonetim.oturumac');
    }

    public function kaydol_form()
    {
        return view('yonetim.kaydol');
    }


    public function kaydol()
    {

        $this->validate(request(), [
            'AdSoyad' => 'required|min:2|max:60',
            'email' => 'required|email|unique:kullanici',
            'sifre' => 'required|confirmed|min:|max:15'
        ]);


        // Kullanıcıdan gelen istekleri doğrulama işlemi için validation fonksiyonunu kullanarak yaptım
        // yani  ad soyad alan karakteri 2 harfden küçük olmamalı gibi gelen istek ile form şartlarının eşleşip eşleşmediğine bakılır.
        // Doğrulamadan sonra blade tempalte de  doğrulamadan kaynaklanan hataları gösterdim. VE Bu hataları türkçeleştirdim.
        // Bu türkçeleştirme işlemini lang\en\validation


        $kullanici = Kullanici::create([
            'AdSoyad' => request('AdSoyad'),
            'email' => request('email'),
            'sifre' => Hash::make(request('sifre')),
            'aktivasyon_anahtari' => Str::random(60),
            'aktif_mi' => 0
        ]);

        // formdan gelen verileri request ile alarak veritabanı kolonuna ekliyoruz
        // adsoyad, email, sifre  alanlarını $kullanici


        Mail::to(request('email'))->send(new KullaniciKayitMail($kullanici));
        auth()->login($kullanici);
        return redirect()->route('yonetim.anasayfa');

        //Kayıt olan kullanıcıya mail gönderim işlemini Kullanıcı controllerı içindeki  kaydol() içinde ayarlamamız gerkir.
        //to kime  göndereceğimizi from ise (kimden) göndereceğimiz adresi ifade eder.
        //Burada kullanıcıya kayıt işleminden sonra mail göndermeyle beraber  otomatik olarak giriş yapmasını sağladık
        // Kullanıcı kayıt olduğunda maile gönderdiğimiz bağlantıya tıkladığımız zaman hem mailini doğrulamış oluyoruz hemde kullanıcıyı aktifleştrimiş oluyoruz
        //if($kullanici->aktif_mi==0) ->giriş yapma
    }

    // route dan parametre olarak gelmektedir anahtar değişkeni
    public function aktiflestir($anahtar)
    {
        $kullanici = Kullanici::on()->where('aktivasyon_anahtari', $anahtar)->first();
        if (!is_null($kullanici)) {
            $kullanici->aktivasyon_anahtari = null;
            $kullanici->aktif_mi = 1;
            $kullanici->save();
            return redirect()->route('yonetim.anasayfa')
                ->with('mesaj', 'Kullanıcı kaydınız gerçekleştirilmiştir')
                ->with('mesaj_tur', 'success');
        } else {
            return redirect()->route('yonetim.anasayfa')
                ->with('mesaj', 'Kullanıcı kaydınız gerçekleştirilememiştir')
                ->with('mesaj_tur', 'warning');
        }
    }

    public function index()
    {
        if(request()->filled('aranan')){
            request()->flash();
            $aranan = request('aranan');
            $list=Kullanici::on()->where('adsoyad','like',"%$aranan%")
                ->orWhere('email','like',"%$aranan%")
                ->orderByDesc('olusturulma_tarihi')
                ->paginate(4);
        }
        else{

            $list = Kullanici::on()->orderByDesc('olusturulma_tarihi')->paginate(8);
        }
        return view('yonetim.kullanici.index', compact('list'));
    }

    //Eğer bir id değeri gönderirse id değerini alacak, gönderilemzse defaultu 0 dır
    //id değeri 0 ise yeni bir kayıt oluşturacak, değilse mevcut kaydı düzenleyecektir
    public function form($id = 0)
    {
        $entry = new Kullanici(); //id değeri gelmediğini tanımsız bir kullanıcı gelmesin diye boş bir kullanıcı oluşturduk
        if ($id > 0) {
            $entry = Kullanici::on()->find($id);
        }
        return view('yonetim.kullanici.form', compact('entry'));
    }

    /** @noinspection PhpUnused */
    public function kaydet($id = 0)
    {
        $this->validate(request(), [
            'adsoyad'=>'required',
            'email' => 'required|email'
        ]);


        $data = request()->only('adsoyad','email');

        if (request()->filled('sifre')) {
            $data['sifre'] = Hash::make(request('sifre'));
        }

        $data['aktif_mi'] = request()->has('aktif_mi') ? 1 : 0;
        if ($id > 0) {
            $entry = Kullanici::on()->where('id', $id)->firstOrFail(); //veritabanında gelen kaydı buluyoruz
            $entry->update($data);
        } else {
            $entry = Kullanici::create($data);
        }

        return redirect()->route('yonetim.kullanici',$entry->id)
            ->with('mesaj',($id > 0 ? 'Guncellendi': 'Kaydedildi'))
            ->with('mesaj_tur','success');

    }

    public function sil($id)
    {
        Kullanici::destroy($id);
        return redirect() ->route('yonetim.kullanici')
            ->with('mesaj',('Kayit Silindi'))
            ->with('mesaj_tur','success');
    }

}
