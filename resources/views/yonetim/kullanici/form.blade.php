@extends('yonetim.layouts.master')
@section('title','Kullanici Form')
@section('content')
    <h1 class="sub-header">Form</h1>
    <form method="post" action="{{route('yonetim.kullanici.kaydet',@$entry->id)}}">
        @csrf
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-primary">{{@$entry->id > 0 ? 'Güncelle':'Kaydet'}}</button>
        </div>
        <h2 class="sub-header">{{@$entry->id > 0 ? 'Kullanıcı Düzenle':'Kullanıcı Kaydet'}}</h2>
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
                    <label for="sifre">Şifre</label>
                    <input type="password" name="sifre" class="form-control" id="sifre" placeholder="Şifre">
                </div>
            </div>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="aktif_mi">Aktif Mi
                        <input type="checkbox" name="aktif_mi" class="form-control"  id="remember_token"
                               value="1" {{$entry->aktif_mi ? 'checked':''}}>
                    </label>
                </div>
            </div>
        </div>
        @include('layouts.partials.errors')
        @include('yonetim.layouts.partials.alert')
    </form>
@endsection
