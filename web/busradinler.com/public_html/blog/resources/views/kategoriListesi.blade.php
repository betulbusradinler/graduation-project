@extends('layouts.master')
@section('title','Kategori')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- catagories -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <a href="{{route('kategori')}}" class="cat-1"><h2>Kategoriler</h2></a>
                        </div>
                        <div class="category-widget">
                            @foreach($kategoriler as $kategori)
                                <ul>
                                    <li>
                                        <a href="{{route('kategoriP',$kategori->slug)}}"
                                           class="cat-1"> {{$kategori->ad}}
                                            <span>340</span>
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <!-- /catagories -->
                </div>
            </div>

            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Recent Posts</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <!-- post -->
                        <!--Bu RECENT POST kısmına son_yazilar sütunu gelcek blog detay tablosundan-->
                        @foreach($son_yazilar as $son_yazi)
                            <div class="col-md-4">
                                <div class="post">
                                    <a class="post-img" href="{{route('blogspot',$son_yazi->blog->slug)}}"><img src ="/img/post-3.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-1"
                                               href="{{route('kategoriP',$son_yazi->blog->kategori->slug)}}">{{$son_yazi->blog->kategori->ad}}</a>
                                            <span class="post-date">{{$son_yazi->blog->olusturulma_tarihi}}</span>
                                        </div>
                                        <b class="post-title"><a href="{{route('blogspot',$son_yazi->blog->slug)}}">{{$son_yazi->blog->blog_baslik}}</a></b>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- /post -->
                    </div>
                </div>
            </div>
        </div>
@endsection

