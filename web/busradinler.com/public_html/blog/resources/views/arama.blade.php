@extends('layouts.master')
@section('content')
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Arama Sonucu</h2>
                        </div>
                    </div>

                    <!-- post -->
                    <div class="row">
                        <div class="col-md-12">
                            @if(count($bloglar)==0)
                                <div class="col-md-12 text-center">
                                    <h2>ARADIĞINIZ BLOG BULUNAMADI</h2>
                                </div>
                            @endif
                                @foreach($bloglar as $blog)
                                <div class="col-md-4">
                                    <div class="post">
                                        <a class="post-img" href="{{route('blogspot',$blog->slug)}}"><img src="/img/post-3.jpg" alt=""></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category cat-1" href="{{route('kategori',$blog->slug)}}">{{$blog->kategori->ad}}</a>
                                                <span class="post-date">{{$blog->olusturulma_tarihi}}</span>
                                            </div>
                                            <b class="post-title"><a href="{{route('blogspot',$blog->slug)}}">{{$blog->blog_baslik}}</a></b>
                                        </div>
                                    </div>
                                  </div>
                                @endforeach
                        </div>
                        {{$bloglar->appends(['aranan'=>old('aranan')])->links()}}
                    </div>
                <!-- /post -->
                </div>
                <!-- /row -->

            </div>
            <!-- /container -->



@endsection
