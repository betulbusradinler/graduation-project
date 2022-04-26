<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class blog extends Model
{
    use SoftDeletes;
    protected $table='blog';
    protected $fillable=['id','kategori_id','blog_baslik','icerik','slug','olusturulma_tarihi','guncelleme_tarihi','silinme_tarihi'];
    const CREATED_AT = 'olusturulma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';

    //kategori ve blog tablosu arasında one-to-many ilişkisi vardır. Bu ilişki sayesinde blog model sınıfındankategori model sınıfına erişebilir
    //BlogController üzerinde gerekli kategori veri tabanı sorgulamalarına ulaşabilirz.
    public function kategori(){
        return $this->belongsTo('App\Model\Kategori','kategori_id');
    }

    // blogdetay ile blog tablosu arasında one-to-one ilişkisi vardır.  hasOne fonksiyonu ile BlogDetay model dosyasına ulaşabiliriz
    //Gerekli veri tabanı sorgulamalarında blogdetaydaki verilere ulaşabilicez
    public function blogdetay(){

        return $this->hasOne('App\Model\BlogDetay','blog_id');
    }



}
