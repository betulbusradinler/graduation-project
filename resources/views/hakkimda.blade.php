@extends('layouts.master')
@section('title','Hakkımda')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="{{route('anasayfa')}}">Ana Sayfa</a></li>
                        <li>Hakkımda</li>
                    </ul>
                    <h1>Hakkımda</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="section-row">
                    <p>{!!$icerik->icerik!!}</p>
                 </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection
