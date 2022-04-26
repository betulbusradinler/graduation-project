@extends('layouts.master')
@section('title',$blog_slug->blog_baslik)
@section('content')
    <!-- Page Header -->
    <div id="post-header" class="page-header">
        <div class="background-img" style="background-image: url('/img/post-page.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-meta">
                        <a class="post-category cat-2" href="{{route('kategori')}}">{{$blog_slug->kategori->ad}}</a>
                        <span class="post-date">{{$blog_slug->olusturulma_tarihi}}</span>
                    </div>
                    <h1>{{$blog_slug->blog_baslik}}</h1>
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
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                    <div class="main-post">
                        <h3>{{$blog_slug->blog_baslik}}</h3>
                        <p>{{$blog_slug->icerik}}</p>
                        <p>{{$blog_slug->icerik}}</p>
                        <figure class="figure-img">
                            <img class="img-responsive" src="/img/post-4.jpg" alt="">
                            <figcaption>So Lorem Ipsum is bad (not necessarily)</figcaption>
                        </figure>
                        <p>{{$blog_slug->icerik}}</p>
                        <p>{{$blog_slug->icerik}}</p>
                        <p>{{$blog_slug->icerik}}</p>
                        <blockquote class="blockquote">
                            I’ve heard the argument that “lorem ipsum” is effective in wireframing or design because it helps people focus on the actual layout, or color scheme, or whatever. What kills me here is that we’re talking about creating a user experience that will (whether we like it or not) be DRIVEN by words. The entire structure of the page or app flow is FOR THE WORDS.
                        </blockquote>
                        <p>{{$blog_slug->icerik}}</p>
                        <h3>Summing up, if the copy is diverting attention from the design it’s because it’s not up to task.</h3>
                        <p>{{$blog_slug->icerik}}</p>
                    </div>
                    <div class="post-shares sticky-shares">
                        <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>

            </div>
            <!-- /Post content -->

            <!-- aside -->
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
                        <h2>Most Read</h2>
                    </div>
                    @foreach($en_cok_okunanlar as $en_cok_okunan)
                    <div class="post post-widget">
                        <a class="post-img" href="{{route('blogspot',$en_cok_okunan->blog->slug)}}"><img src="/img/widget-1.jpg" alt=""></a>
                        <div class="post-body"><div class="post-meta">
                                <a class="post-category cat-1" href="{{route('kategoriP',$en_cok_okunan->blog->kategori->slug)}}">{{$en_cok_okunan->blog->kategori->ad}}</a>
                                <span class="post-date">{{$en_cok_okunan->blog->olusturulma_tarihi}}</span>
                            </div>
                            <h3 class="post-title"><a href="blogspot.blade.php">{{$en_cok_okunan->blog->blog_baslik}}</a></h3>
                        </div>
                    </div>
                   @endforeach
                </div>
                <!-- /post widget -->

               <!-- post widget
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Featured Posts</h2>
                    </div>
                    <div class="post post-thumb">
                        <a class="post-img" href="blogspot.blade.php"><img src="/img/post-2.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-3" href="#">Jquery</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blogspot.blade.php">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                        </div>
                    </div>

                    <div class="post post-thumb">
                        <a class="post-img" href="blogspot.blade.php"><img src="/img/post-1.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="#">JavaScript</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blogspot.blade.php">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
                        </div>
                    </div>
                </div>
                /post widget -->

                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Catagories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                            <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                            <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                            <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
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

                <!-- archive -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Archive</h2>
                    </div>
                    <div class="archive-widget">
                        <ul>
                            <li><a href="#">January 2018</a></li>
                            <li><a href="#">Febuary 2018</a></li>
                            <li><a href="#">March 2018</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /archive -->
            </div>
            <!-- /aside -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection
