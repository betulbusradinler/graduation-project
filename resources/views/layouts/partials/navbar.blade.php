<!-- Header -->
<header id="header">
    <!-- Nav -->
    <div id="nav">
        <!-- Main Nav -->
        <div id="nav-fixed">
            <div class="container">
                <!-- logo -->
                <div class="nav-logo">
                    <a href="{{route('anasayfa')}}" class="logo"><img src="/img/logo.png" alt=""></a>
                </div>
                <!-- /logo -->

                <!-- nav -->
                <ul class="nav-menu nav navbar-nav">
                    <li><a href="{{route('kategoriP')}}">News</a></li>
                    <li><a href="{{route('kategoriP')}}">Popular</a></li>
                    <li class="cat-1"><a href="{{route('kategoriP')}}">PHP</a></li>
                    <li class="cat-2"><a href="{{route('kategoriP')}}">JAVA</a></li>
                    <li class="cat-3"><a href="{{route('kategoriP')}}">C#</a></li>
                    <li class="cat-4"><a href="{{route('kategoriP')}}">GÖRÜNTÜ İŞLEME</a></li>
                </ul>
                <!-- /nav -->

                <!-- search & aside toggle -->
                <div class="nav-btns">
                    <!--<button class="aside-btn"><i class="fa fa-bars"></i></button> -->
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <form action="{{route('blog_ara')}}" method="post">
                        @csrf
                        <div class="search-form">
                            <input class="search-input" type="text" name="aranan" placeholder="Enter Your Search ..." value="{{old('aranan')}}">
                            <button type="button" class="search-close"><i class="fa fa-times"></i></button>
                        </div>
                    </form>
                </div>
                <!-- /search & aside toggle -->
            </div>
        </div>
        <!-- /Main Nav -->
            <button class="nav-aside-close"><i class="fa fa-times"></i></button>
            <!-- /aside nav close -->
        </div>
        <!-- Aside Nav -->
    </div>
    <!-- /Nav -->
</header>
<!-- /Header -->
