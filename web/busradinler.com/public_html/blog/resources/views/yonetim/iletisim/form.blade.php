@extends('yonetim.layouts.master')
@section('title','İletişim Form')
@section('content')
    <h1 class="sub-header">İletişim Form</h1>
    <form method="post" action="{{route('yonetim.iletisim.kaydet',@$entry->id)}}">
        @csrf
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-primary">{{@$entry->id > 0 ? 'Güncelle':'Kaydet'}}</button>
        </div>
        <h2 class="sub-header">{{@$entry->id > 0 ? 'İletisim Düzenle':'İletisim Kaydet'}}</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{old('ad',$entry->email)}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="adsoyad">Ad Soyad</label>
                    <input type="text" name="adsoyad" class="form-control"  id="adsoyad" placeholder="Ad Soyad" value="{{$entry->adsoyad}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="mesaj">İçerik</label>
                    <textarea  class="form-control" name="mesaj" id="mesaj" rows="9" placeholder="Mesajı giriniz">{!!old('mesaj',$entry->mesaj)!!}</textarea>
                </div>
            </div>
        </div>
        @include('layouts.partials.errors')
        @include('yonetim.layouts.partials.alert')
    </form>
@endsection
@section('jskodlari')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        $(function () {
            CKEDITOR.replace('mesaj');
        });
    </script>
@endsection
