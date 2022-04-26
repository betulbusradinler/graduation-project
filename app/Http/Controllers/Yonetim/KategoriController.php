<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Model\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        if(request()->filled('aranan')){
            request()->flash();
            $aranan = request('aranan');
            $list=Kategori::on()->where('adsoyad','like',"%$aranan%")
                ->orWhere('email','like',"%$aranan%")
                ->orderByDesc('olusturulma_tarihi')
                ->paginate(4);
        }
        else{

            $list = Kategori::on()->orderByDesc('olusturulma_tarihi')->paginate(4);
        }
        return view('yonetim.kategori.index', compact('list'));
    }

    //id>0 ise düzenleme yapılacak değilse yeni bir kategori oluşturacak
    public function form($id = 0)
    {
        $entry = new Kategori;
        if ($id > 0) {
            $entry = Kategori::on()->find($id);
        }
        return view('yonetim.kategori.form', compact('entry'));
    }

    /** @noinspection PhpUnused */
    public function kaydet($id = 0)
    {
        $this->validate(request(), [
        'ad'=>'required',
        'slug' => 'required'
    ]);

        $data = request()->only('ad','slug');

        if ($id > 0) {
            $entry = Kategori::on()->where('id', $id)->firstOrFail(); //veritabanında gelen kaydı buluyoruz
            $entry->update($data);
        } else {
            $entry = Kategori::create($data);
        }

        return redirect()->route('yonetim.kategori',$entry->id)
            ->with('mesaj',($id > 0 ? 'Guncellendi': 'Kaydedildi'))
            ->with('mesaj_tur','success');


    }

    public function sil($id)
    {
        Kategori::destroy($id);
        return redirect() ->route('yonetim.kategori')
            ->with('mesaj',('Kayit Silindi'))
            ->with('mesaj_tur','success');
    }

}
