@extends('yonetim.layouts.master')
@section('title','Kullanıcı Yönetim')
@section('content')
    <h1 class="page-header">Kullanıcı Yönetim</h1>
    <h1 class="sub-header">
        <div class="btn-group pull-right">
            <a href="{{route('yonetim.kategori.yeni')}}" class="btn btn-primary">Yeni</a>
        </div>
        Kullanıcı Listesi
    </h1>
    <!-- search & aside toggle -->
    <div class="container">
        <form action="{{route('yonetim.kullanici')}}" method="post">
            @csrf
            <div class="search-form">
                <input class="search-input" type="text" id="aranan" name="aranan" placeholder="Enter Your Search ..."
                       value="{{old('aranan')}}">
                <button type="submit" class="btn btn-primary">Ara</button>
                <a href="{{route('yonetim.kullanici')}}" class="btn btn-primary">Temizle</a>
            </div>
        </form>
    </div>
    <!-- /search & aside toggle -->

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Ad Soyad</th>
                <th>Mail</th>
                <th>Şifre</th>
                <th>Aktif_mi</th>
                <th>Kayıt Tarihi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as  $entry)
                <tr>
                    <td>{{$entry->id}}</td>
                    <td>{{$entry->adsoyad}}</td>
                    <td>{{$entry->email}}</td>
                    <td>{{$entry->sifre}}</td>
                    <td>
                        @if($entry->aktif_mi)
                            <span class="label label-success">Aktif</span>
                        @else
                            <span class="label label-danger">Pasif</span>
                        @endif
                    </td>
                    <td>{{$entry->olusturulma_tarihi}}</td>
                    <td style="width: 100px">
                        <a href="{{route('yonetim.kullanici.duzenle',$entry->id)}}" class="btn btn-xs btn-success"
                           data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="{{route('yonetim.kullanici.sil',$entry->id)}}" class="btn btn-xs btn-danger"
                           data-toggle="tooltip" data-placement="top" title="Sil"
                           onclick="return confirm('Emin misiniz?')">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            @include('yonetim.layouts.partials.alert')
        </table>
        {{$list->appends('aranan',old('aranan'))->links()}}
    </div>
@endsection
