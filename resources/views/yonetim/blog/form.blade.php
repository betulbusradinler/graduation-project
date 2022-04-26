@extends('yonetim.layouts.master')
@section('title','Kategori Yönetim')
@section('content')

    <form method="post" action="{{route('yonetim.blog.kaydet',@$entry->id)}}">
        @csrf
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-primary">{{@$entry->id > 0 ? 'Güncelle':'Kaydet'}}</button>
        </div>
        <h2 class="sub-header">{{@$entry->id > 0 ? "Blog Düzenle":"Blog Kaydet"}}</h2>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kategori_id">Kategori </label>
                <select name="kategori_id" id="kategori_id">
                    @foreach(\App\Model\Kategori::all() as $k_id)
                        <option value="{{$k_id->id}}">{{$k_id->ad}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="blog_baslik">Başlık </label>
                    <input type="text" class="form-control" name="blog_baslik" id="blog_baslik"
                           placeholder="Başlığı giriniz"
                           value="{{old('blog_baslik',$entry->blog_baslik)}}">
                </div>
                <div class="form-group">
                    <label for="slug">Slug </label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug giriniz"
                           value="{{old('slug',$entry->slug)}}">
                </div>
                <div class="form-group">
                    <label for="icerik">İçerik</label>
                    <textarea class="form-control" name="icerik" id="icerik" rows="9"
                              placeholder="İçerik giriniz">{!! old('icerik',$entry->icerik) !!}</textarea>
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
            CKEDITOR.replace('icerik');
        });
    </script>
@endsection
