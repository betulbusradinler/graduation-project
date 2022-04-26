<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Model\İletisim;
use Illuminate\Http\Request;

class IletisimController extends Controller
{
    public function index()
    {
        if(request()->filled('aranan')){
            request()->flash();
            $aranan = request('aranan');
            $list=İletisim::on()->where('adsoyad','like',"%$aranan%")
                ->orWhere('email','like',"%$aranan%")
                ->orderByDesc('created_at')
                ->paginate(4);
        }
        else{

            $list = İletisim::on()->orderByDesc('created_at')->paginate(8);
        }
        return view('yonetim.iletisim.index', compact('list'));
    }

    //Eğer bir id değeri gönderirse id değerini alacak, gönderilemzse defaultu 0 dır
    //id değeri 0 ise yeni bir kayıt oluşturacak, değilse mevcut kaydı düzenleyecektir
    public function form($id = 0)
    {
        $entry = new İletisim(); //id değeri gelmediğini tanımsız bir kullanıcı gelmesin diye boş bir kullanıcı oluşturduk
        if ($id > 0) {
            $entry = İletisim::on()->find($id);
        }
        return view('yonetim.iletisim.form', compact('entry'));
    }

    /** @noinspection PhpUnused */
    public function kaydet($id = 0)
    {
        $this->validate(request(), [
            'adsoyad'=>'required',
            'email' => 'required|email',
            'mesaj' => 'required'
        ]);

        $data = request()->only('adsoyad','email','mesaj');
        if ($id > 0) {
            $entry = İletisim::on()->where('id', $id)->firstOrFail(); //veritabanında gelen kaydı buluyoruz
            $entry->update($data);
        } else {
            $entry = İletisim::create($data);
        }

        return redirect()->route('yonetim.iletisim',$entry->id)
            ->with('mesaj',($id > 0 ? 'Guncellendi': 'Kaydedildi'))
            ->with('mesaj_tur','success');

    }

    public function sil($id)
    {
        İletisim::destroy($id);
        return redirect() ->route('yonetim.kullanici')
            ->with('mesaj',('Kayit Silindi'))
            ->with('mesaj_tur','success');
    }
}
