<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;
    protected $table='kategori';
    //protected $guarded=['slug'];
    protected $fillable=['id','ad','slug','olusturulma_tarihi','guncelleme_tarihi','silinme_tarihi'];
    const CREATED_AT = 'olusturulma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';

    /* Kategori model dosyasından blog yazılarını doğrudan çekebilmek için bir alt fonksiyon oluşturduk.
    Parametre olarak da çekeceğimiz model dosyasının yolunu yazdık.
    Kategori ve blog yazısı arasında 1 e çok ilişki vardır.
    Bu ilişki yapısından dolayı blog() fonksiyonunu oluşturduk. Bunun sebebi ise blog ile ilgli bilgileri
    kategori alanında ihtiyacımız olduğunda kullanmak.
    */

    public function blog(){
        // blog model dosyasındaki kategori_id üzerinden 1 e çok ilişki yapısı kuruldu.
        return $this->hasMany('App\Model\blog','kategori_id');
    }

}
