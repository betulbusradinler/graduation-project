@extends('yonetim.layouts.master')
@section('title','Hakkımda Yönetim')
@section('content')
    <h1 class="page-header">Hakkımda Yönetim</h1>
    <h1 class="sub-header">
        <div class="btn-group pull-right">
            <a href="{{route('yonetim.hakkimda.yeni')}}" class="btn btn-primary">Yeni</a>
        </div>
        Hakkımda Listesi
    </h1>
    <!-- search & aside toggle -->
    <div class="container">
        <form action="{{route('yonetim.hakkimda')}}" method="post">
            @csrf
            <div class="search-form">
                <input class="search-input" type="text" id="aranan" name="aranan" placeholder="Enter Your Search ..."
                       value="{{old('aranan')}}">
                <button type="submit" class="btn btn-primary">Ara</button>
                <a href="{{route('yonetim.hakkimda')}}" class="btn btn-primary">Temizle</a>
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
                <th>İçerik</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as  $entry)
                <tr>
                    <td>{{$entry->id}}</td>
                    <td>{!!  $entry->icerik !!}</td>
                    <td style="width: 100px">
                        <a href="{{route('yonetim.hakkimda.duzenle',$entry->id)}}" class="btn btn-xs btn-success"
                           data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="{{route('yonetim.hakkimda.sil',$entry->id)}}" class="btn btn-xs btn-danger"
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
