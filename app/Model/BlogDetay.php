<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlogDetay extends Model
{
    protected $table="blog_detay";
    public $timestamps=false;

    // Blog tablosundaki verilere ulaşabilmek için blog() fonksiyonu oluşturularak
    // BlogDetay ve Blog arasındaki one to one ilişki tanımlandı
    public function blog(){
        return $this->belongsTo('App\Model\blog','blog_id');
    }
}
