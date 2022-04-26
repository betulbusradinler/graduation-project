<!-- Footer -->
<footer id="footer">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-5">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="{{route('anasayfa')}}" class="logo"><img src="/img/logo.png" alt=""></a>
                    </div>

                    <div class="footer-copyright">
								<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-widget">
                            <h3 class="footer-title">Hakkımda</h3>
                            <ul class="footer-links">
                                <li><a href="{{route('hakkimda')}}">Hakkımda</a></li>
                                <li><a href="{{route('iletisim')}}">İletişim</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-widget">
                            <h3 class="footer-title">Kategoriler</h3>
                            <ul class="footer-links">
                                @foreach(\App\Model\Kategori::all() as $kategori)
                                    <li>
                                        <a href="{{route('kategoriP',$kategori->slug)}}"
                                           class="cat-1"> {{$kategori->ad}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /Footer -->
