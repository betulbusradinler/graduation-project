@extends('yonetim.layouts.master')
@section('title','Kategori Yönetim')
@section('content')

    <form method="post" action="{{route('yonetim.kategori.kaydet',@$entry->id)}}">
        @csrf
        <h2 class="sub-header">{{@$entry->id > 0 ? "Kategori Düzenle":"Kategori Kaydet"}}</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ad">Kategori Ad</label>
                    <input type="text" class="form-control" name="ad" id="ad" placeholder="Kategori adını giriniz" value="{{old('ad',$entry->ad)}}">
                </div>
                <div class="form-group">
                    <label for="kategori">Slug Ad</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug adını giriniz" value="{{old('slug',$entry->slug)}}">
                </div>
                <div class="btn-group pull-right" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-primary">{{@$entry->id > 0 ? "Güncelle":"Kaydet"}}</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @include('layouts.partials.errors')
        @include('yonetim.layouts.partials.alert')
    </form>
@endsection
