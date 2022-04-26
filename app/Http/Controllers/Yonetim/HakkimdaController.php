<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Model\Hakkimda;
use Illuminate\Http\Request;

class HakkimdaController extends Controller
{
    public function index()
    {
        if(request()->filled('aranan')){
        request()->flash();
        $aranan = request('aranan');
        $list=Hakkimda::on()->where('icerik','like',"%$aranan%")
            ->orderByDesc('id')
            ->paginate(2);
    }
    else{

        $list = Hakkimda::on()->orderByDesc('id')->paginate(4);
    }
        return view('yonetim.hakkimda.index', compact('list'));
    }

    //Eğer bir id değeri gönderirse id değerini alacak, gönderilemzse defaultu 0 dır
    //id değeri 0 ise yeni bir kayıt oluşturacak, değilse mevcut kaydı düzenleyecektir
    public function form($id = 0)
    {
        $entry = new Hakkimda(); //id değeri gelmediğini tanımsız bir kullanıcı gelmesin diye boş bir kullanıcı oluşturduk
        if ($id > 0) {
            $entry = Hakkimda::on()->find($id);
        }
        return view('yonetim.hakkimda.form', compact('entry'));
    }

    /** @noinspection PhpUnused */
    public function kaydet($id = 0)
    {
        $this->validate(request(), [
            'icerik'=>'required'
        ]);


        $data = request()->only('icerik');

        if ($id > 0) {
            $entry = Hakkimda::on()->where('id', $id)->firstOrFail(); //veritabanında gelen kaydı buluyoruz
            $entry->update($data);
        } else {
            $entry = Hakkimda::create($data);
        }

        return redirect()->route('yonetim.hakkimda',$entry->id)
            ->with('mesaj',($id > 0 ? 'Guncellendi': 'Kaydedildi'))
            ->with('mesaj_tur','success');

    }

    public function sil($id)
    {
        Hakkimda::destroy($id);
        return redirect() ->route('yonetim.kullanici')
            ->with('mesaj',('Kayit Silindi'))
            ->with('mesaj_tur','success');
    }
}
