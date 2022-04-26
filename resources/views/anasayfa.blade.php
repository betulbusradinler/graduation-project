@extends('layouts.master')
@section('title','Anasayfa')
@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- post -->
                <div class="col-md-8">
                    <div class="post post-thumb">
                        <a class="post-img" href="{{route('blogspot')}}"><img src="/img/post-1.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="{{route('kategoriP')}}">JavaScript</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title">
                                <a href="{{route('blogspot')}}"> Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- /post -->

                <div class="col-md-4">
                    <!-- catagories -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <a href="{{route('kategori')}}" class="cat-1"><h2>Kategoriler</h2></a>
                        </div>
                        @foreach($kategoriler as $kategori)
                        <div class="category-widget">
                                <ul><li><a href="{{route('kategoriP',$kategori->slug)}}"class="cat-1"> {{$kategori->ad}}<span>340</span></a></li></ul>
                        </div>
                        @endforeach
                    </div>
                    <!-- /catagories -->
                </div>
            </div>
        </div>
    </div>
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Recent Posts</h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        @foreach($son_yazilar as $son_yazi)
                        <div class="col-md-4">
                            <div class="post">
                                <a class="post-img" href="{{route('blogspot')}}"><img src="/img/post-3.jpg" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-1" href="{{route('kategori',$son_yazi->blog->slug)}}">{{$son_yazi->blog->kategori->ad}}</a>
                                        <span class="post-date">{{$son_yazi->blog->olusturulma_tarihi}}</span>
                                    </div>
                                    <b class="post-title"><a href="{{route('blogspot',$son_yazi->blog->slug)}}">{{$son_yazi->blog->blog_baslik}}</a></b>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- /row -->

        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
     <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Popular Posts</h2>
                    </div>
                </div>

                <!-- post -->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($popular_yazilar as $popular_yazi)
                            <div class="col-md-4">
                                <div class="post">
                                    <a class="post-img" href="{{route('blogspot',$popular_yazi->blog->slug)}}"><img src="/img/post-3.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-1" href="{{route('kategori',$popular_yazi->blog->slug)}}">{{$popular_yazi->blog->kategori->ad}}</a>
                                            <span class="post-date">{{$popular_yazi->blog->olusturulma_tarihi}}</span>
                                        </div>
                                        <b class="post-title"><a href="{{route('blogspot',$popular_yazi->blog->slug)}}">{{$popular_yazi->blog->blog_baslik}}</a></b>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /post -->
            </div>
            <!-- /row -->

        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
