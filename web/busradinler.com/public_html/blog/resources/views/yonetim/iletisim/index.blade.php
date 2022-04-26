@extends('yonetim.layouts.master')
@section('title','İletişim Yönetim')
@section('content')
    <h1 class="page-header">İletişim Yönetim</h1>
    <h1 class="sub-header">
        <div class="btn-group pull-right">
            <a href="{{route('yonetim.iletisim.yeni')}}" class="btn btn-primary">Yeni</a>
        </div>
       İletişim Listesi
    </h1>
    <!-- search & aside toggle -->
    <div class="container">
        <form action="{{route('yonetim.iletisim')}}" method="post">
            @csrf
            <div class="search-form">
                <input class="search-input" type="text" id="aranan" name="aranan" placeholder="Enter Your Search ..."
                       value="{{old('aranan')}}">
                <button type="submit" class="btn btn-primary">Ara</button>
                <a href="{{route('yonetim.iletisim')}}" class="btn btn-primary">Temizle</a>
            </div>
        </form>
    </div>
    <!-- /search & aside toggle -->

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>id</th>
                <th>Ad Soyad</th>
                <th>Mail</th>
                <th>Mesaj</th>

            </tr>
            </thead>
            <tbody>
            @foreach($list as  $entry)
                <tr>
                    <td>{{$entry->id}}</td>
                    <td>{{$entry->adsoyad}}</td>
                    <td>{{$entry->email}}</td>
                    <td>{!!  $entry->mesaj !!}</td>
                    <td style="width: 100px">
                        <a href="{{route('yonetim.iletisim.duzenle',$entry->id)}}" class="btn btn-xs btn-success"
                           data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="{{route('yonetim.iletisim.sil',$entry->id)}}" class="btn btn-xs btn-danger"
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
