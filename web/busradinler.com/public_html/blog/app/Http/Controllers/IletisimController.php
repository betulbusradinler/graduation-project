<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IletisimController extends Controller
{
    public function index(){
        return view('iletisim');
    }

    public function indexpost()
    {
        $this->validate(\request(),[
            'ns' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $ekle = \DB::table('iletisim')->insert([
            'adsoyad' => \request()->ns,
            'email' => \request()->email,
            'mesaj' => \request()->message
        ]);

        return back()->with([
            'mesaj_tur' => 'success',
            'mesaj' => 'Mesaj Başarıyla Gönderildi'
        ]);
    }
}
