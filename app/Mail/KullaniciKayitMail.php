<?php

namespace App\Mail;

use App\Model\Kullanici; // Kullanıcı bilgilerini alabilmek için  Kullanıcı model dosyasını kullandık
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

// Bir mail gönderim işlemi yaparken mail gönderim işlerimizi kontrol etmesi için bir sınıf oluşturulur.
//Biz bu yüzden KullaniciKayitMail sınıfını oluşturduk
// Laravel mail gönderim işlemi için swiftmailer kütüphanesini kullanır.
// Maille ilgili ayarlamaları burada yapıcaz. Mail sınıfı -> php artisan make:mail  --Sınıfın adı-- şekl.de oluşturulur.

class KullaniciKayitMail extends Mailable
{
    public $kullanici;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param Kullanici $kullanici
     */
    public function __construct(Kullanici $kullanici)
    {
        $this->kullanici=$kullanici;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // Göndereceğimiz mail mesajını ayarlarızı buil() de
    public function build()
    {
        return $this
            ->subject(config('app.name').'-Kullanıcı Kaydı')

           // Larvel dosyalarında bir mail göndeirm işlemi için view() dosyalarını yani templateden yardım alarak mailin içeriğini ayarlıyoruz
            ->view('emails.kullanici_kayit');
    }
}

    // Mail view'i içerisinde ( emails.kullanici_kayit) kayıt olan kullanıcı bilgilerine ulaşmak için $kullanici adında bir global değişken oluşturduk.
    //Laravel içerisinde Mailable sınıfını kalıtım alana sınıflarda
    // _constructur metodu içerisinde bir değişken tanımladık bu değişkenden gelen verileri global olarak tanımladığımız değişkene atarak bu sınıf içerisinde kullandık
    // bu sayede view kısmında kaydolan kullanıcı bilgilerine  ulaşabilicez
