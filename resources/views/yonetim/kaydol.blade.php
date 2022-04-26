<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="/css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Header -->
<header id="header">
    <!-- Main Nav -->
    <div id="nav-fixed">
        <div class="container">
            <!-- logo -->
            <div class="nav-logo" >
                <a href="{{route('anasayfa')}}" class="logo"><img src="/img/logo.png" alt=""></a>
                <ul class="nav navbar-nav navbar-right"style=" padding-left: 25px; padding-top: 10px">
                    <li ><a href="{{route('yonetim.oturumac')}}">Oturum Aç</a></li>
                    <li><a href="{{route('yonetim.kaydol')}}">Kaydol</a></li>
                    <li><a href="{{route('anasayfa')}}">Blog Sayfasını Görüntüle</a></li>
                </ul>
            </div>
            <!-- /logo -->
        </div>
    </div>
</header>
<div class="container">
    <div class="row" style="margin-top: 100px">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kaydol</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                          action="{{route('yonetim.kaydol')}}">
                        @csrf
                        <div class="form-group has-error">
                            <label for="AdSoyad" class="col-md-4 control-label">Kullanıcı Adı</label>
                            <!-- Hata mesajları ile beraber form alanına girilen bu değerlerin formun post olmadan önceki değerlerinde kalmasını istediğimiz alanlara
                            old() fonksiyoununu value alanına ekledik -->
                            <div class="col-md-6">
                                <input id="AdSoyad" type="text" class="form-control" name="AdSoyad"
                                       value="{{old('AdSoyad')}}" required autofocus>
                                <!-- <span class="help-block">
                                     <strong>Kullanıcı adı boş bırakılamaz</strong>
                                 </span>-->
                            </div>
                        </div>
                        <!-- old() yanlış girilen şifre değeri sonucu ad ve mail alanının sabit kalmasını sağlar
                         yani formun post edilmeden önceki eski değerlerinin görülmesini sağlar  -->
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{old('email')}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sifre" class="col-md-4 control-label">Şifre</label>
                            <div class="col-md-6">
                                <input id="sifre" type="password" class="form-control" name="sifre" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sifre_tekrari" class="col-md-4 control-label">Şifre (Tekrar)</label>
                            <div class="col-md-6">
                                <input id="sifre_tekrari" type="password" class="form-control"
                                       name="sifre_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Kaydol
                                </button>
                            </div>
                        </div>
                        @include('layouts.partials.errors')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
