@extends('layouts.master')
@section('title','İletişim')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="{{route('anasayfa')}}">Anasayfa</a></li>
                        <li>İletişim</li>
                    </ul>
                    <h1>İletişim</h1>
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
            <div class="col-md-6">
                <div class="section-row">
                    <h3>İletişim Bilgileri</h3>
                    <ul class="list-style">
                        <li><p><strong>Email:</strong> <a href="#">Webmag@email.com</a></p></li>
                        <li><p><strong>Telefon:</strong> 213-520-7376</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                @include('layouts.partials.errors')
                @include('yonetim.layouts.partials.alert')
                <div class="section-row">
                    <h3>Mesaj Gönder</h3>
                    <form method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <span>Email</span>
                                    <input class="input" type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <span>Ad Soyad</span>
                                    <input class="input" type="text" name="ns" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="input" name="message" placeholder="Mesaj" required></textarea>
                                </div>
                                <button class="primary-button">Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection
