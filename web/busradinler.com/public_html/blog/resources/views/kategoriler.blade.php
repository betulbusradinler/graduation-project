@extends('layouts.master')
@section('title',$slug_kategoriad->ad)
@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="{{route('anasayfa')}}">Anasayfa</a></li>
                        <li>{{$slug_kategoriad->ad}}</li>
                    </ul>
                    <h1>{{$slug_kategoriad->ad}}</h1>
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
                    <div class="row">
                        <!-- post -->
                        <div class="col-md-9">
                            @foreach($bloglar as $blog)
                            <div class="post post-thumb">
                                <!--  blogspot sayfasına parametre gönderme işlemi $slug_kategoriad->slug -->
                                <a class="post-img" href="{{route('blogspot',$blog->slug)}}"><img src="/img/post-1.jpg" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#">{{$slug_kategoriad->ad}}</a>
                                        <span class="post-date">{{$blog->olusturulma_tarihi}}</span>
                                    </div>
                                    <h3 class="post-title"><a href="{{route('blogspot',$blog->slug)}}">{{$blog->blog_baslik}}</a></h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- /post -->

                        <div class="clearfix visible-md visible-lg"></div>
                        <!-- ad
                        <div class="col-md-12">
                            <div class="section-row">
                                <a href="#">
                                    <img class="img-responsive center-block" src="/img/ad-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                         ad -->
                       <!-- <div class="col-md-12">
                            <div class="section-row">
                                <button class="primary-button center-block">Load More</button>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- ad
                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="/img/ad-1.jpg" alt="">
                        </a>
                    </div>
                     /ad -->

                    <!-- post widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>En Çok Okunan</h2>
                        </div>
                        @foreach($en_cok_okunanlar as $en_cok_okunan)
                            <div class="post post-widget">
                                <a class="post-img" href="{{route('blogspot',$en_cok_okunan->blog->slug)}}"><img src="/img/widget-1.jpg" alt=""></a>
                                <div class="post-body"><div class="post-meta">
                                        <a class="post-category cat-1" href="{{route('kategoriP',$en_cok_okunan->blog->kategori->slug)}}">{{$en_cok_okunan->blog->kategori->ad}}</a>
                                        <span class="post-date">{{$en_cok_okunan->blog->olusturulma_tarihi}}</span>
                                    </div>
                                    <b class="post-title"><a href="blogspot.blade.php">{{$en_cok_okunan->blog->blog_baslik}}</a></b>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- /post widget -->

                    <!-- catagories -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Catagories</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                            @foreach($kategoriler as $kategori)
                                    <li>
                                        <a href="{{route('kategoriP',$kategori->slug)}}"
                                           class="cat-1"> {{$kategori->ad}}
                                            <span>340</span>
                                        </a>
                                    </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /catagories -->

                    <!-- tags -->
                    <div class="aside-widget">
                        <div class="tags-widget">
                            <ul>
                                <li><a href="#">Chrome</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Backend</a></li>
                                <li><a href="#">JQuery</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">JavaScript</a></li>
                                <li><a href="#">Website</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /tags -->

                    <!-- archive
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Archive</h2>
                        </div>
                        <div class="archive-widget">
                            <ul>
                                <li><a href="#">Jan 2018</a></li>
                                <li><a href="#">Feb 2018</a></li>
                                <li><a href="#">Mar 2018</a></li>
                            </ul>
                        </div>
                    </div>
                     /archive -->
                </div>
            </div>
            <!-- /row -->
            {{$bloglar->links()}}
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection



