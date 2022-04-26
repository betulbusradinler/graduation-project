<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hakkimda extends Model
{
    protected $table="hakkimda";
    public $timestamps = false;
    protected $fillable = ['icerik'];
}
