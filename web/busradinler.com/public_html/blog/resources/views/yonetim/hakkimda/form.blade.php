@extends('yonetim.layouts.master')
@section('title','Hakkimda Form')
@section('content')
    <h1 class="sub-header">Hakkımda Form</h1>
    <form method="post" action="{{route('yonetim.hakkimda.kaydet',@$entry->id)}}">
        @csrf
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-primary">{{@$entry->id > 0 ? 'Güncelle':'Kaydet'}}</button>
        </div>
        <h2 class="sub-header">{{@$entry->id > 0 ? 'Hakkımda Düzenle':'Hakkımda Kaydet'}}</h2>
        <div class="row">
            <div class="form-group">
                <label for="icerik">İcerik</label>
                <textarea class="form-control" name="icerik" id="icerik" rows="9"
                          placeholder="İcerik giriniz">{!! old('icerik',$entry->icerik) !!}</textarea>
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
