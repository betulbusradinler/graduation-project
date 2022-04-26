@extends('yonetim.layouts.master')
@section('title','Kategori Yönetim')
@section('content')
    <h1 class="page-header">Blog Yönetim</h1>
    <h1 class="sub-header">
        <div class="btn-group pull-right">
            <a href="{{route('yonetim.blog.yeni')}}" class="btn btn-primary">Yeni</a>
        </div>
        Blog Listesi
    </h1>
    <!-- search & aside toggle -->
    <div class="container">
        <form action="{{route('yonetim.blog')}}" method="post">
            @csrf
            <div class="search-form">
                <input class="search-input" type="text" id="aranan" name="aranan" placeholder="Enter Your Search ..."
                       value="{{old('aranan')}}">
                <button type="submit" class="btn btn-primary">Ara</button>
                <a href="{{route('yonetim.blog')}}" class="btn btn-primary">Temizle</a>
            </div>
        </form>
    </div>
    {{--
    <select name="kat" id="">
        @foreach(\App\Model\Kategori::all() as $kat)
            <option value="{{$kat->id}}">{{$kat->ad}}</option>
        @endforeach
    </select>--}}

    <!-- /search & aside toggle -->
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Kategori</th>
                <th>Blog Başlık</th>
                <th>İçerik</th>
                <th>Slug</th>
                <th>Güncelleme Tarihi</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as  $entry)
                <tr>
                    <td>{{$entry->kategori_id}}</td>
                    <td>{{$entry->blog_baslik}}</td>
                    <td>{!! $entry->icerik !!}</td>
                    <td>{{$entry->slug}}</td>
                    <td>{{$entry->olusturulma_tarihi}}</td>
                    <td>{{$entry->guncelleme_tarihi}}</td>
                    <td style="width: 100px">
                        <a href="{{route('yonetim.blog.duzenle',$entry->id)}}" class="btn btn-xs btn-success"
                           data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="{{route('yonetim.blog.sil',$entry->id)}}" class="btn btn-xs btn-danger"
                           data-toggle="tooltip" data-placement="top" title="Sil"
                           onclick="return confirm('Emin misiniz?')">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$list->appends('aranan',old('aranan'))->links()}}
    </div>
@endsection
