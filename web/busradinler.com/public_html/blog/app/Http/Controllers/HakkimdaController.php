<?php

namespace App\Http\Controllers;

use App\Model\Hakkimda;
use Illuminate\Http\Request;

class HakkimdaController extends Controller
{
    public function index(){

        $icerik = hakkimda::on()->first();
        return view('hakkimda',compact('icerik'));
    }


}
