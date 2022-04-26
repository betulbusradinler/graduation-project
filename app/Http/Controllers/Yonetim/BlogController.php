<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Model\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        if(request()->filled('aranan')){
            request()->flash();
            $aranan = request('aranan');
            $list=blog::on()
               ->where('blog_baslik','like',"%$aranan%")
                ->orWhere('icerik','like',"%$aranan%")
                ->orderByDesc('olusturulma_tarihi')
                ->paginate(4);
        }
        else{

            $list = blog::on()->orderByDesc('olusturulma_tarihi')->paginate(4);
        }
        return view('yonetim.blog.index', compact('list'));
    }

    //id>0 ise düzenleme yapılacak değilse yeni bir kategori oluşturacak
    public function form($id = 0)
    {
        $entry = new blog();
        if ($id > 0) {
            $entry = blog::on()->find($id);
        }
        return view('yonetim.blog.form', compact('entry'));
    }

    /** @noinspection PhpUnused */
    public function kaydet($id = 0)
    {
        $this->validate(request(), [
            'kategori_id'=>'required',
            'blog_baslik'=>'required',
            'icerik' => 'required',
            'slug' => 'required',
        ]);
        $data = request()->only('kategori_id','blog_baslik','icerik','slug');

        if ($id > 0) {
            $entry = blog::on()->where('id', $id)->firstOrFail(); //veritabanında gelen kaydı buluyoruz
            $entry->update($data);
        } else {
            $entry = blog::create($data);
        }

        return redirect()->route('yonetim.blog',$entry->id)
            ->with('mesaj',($id > 0 ? 'Guncellendi': 'Kaydedildi'))
            ->with('mesaj_tur','success');


    }

    public function sil($id)
    {
        blog::destroy($id);
        return redirect() ->route('yonetim.blog')
            ->with('mesaj',('Kayit Silindi'))
            ->with('mesaj_tur','success');
    }
}
