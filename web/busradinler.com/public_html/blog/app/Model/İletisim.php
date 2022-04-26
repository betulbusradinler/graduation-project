<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class İletisim extends Model
{
    protected $table="iletisim";
    protected $fillable = ['adsoyad', 'email', 'mesaj'];
}
