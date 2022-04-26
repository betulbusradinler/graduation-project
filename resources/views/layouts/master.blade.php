<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', config('app.name')."|Blog Sitesi")</title>
    @include('layouts.partials.head')
</head>
<body>
@include('layouts.partials.navbar')
@yield('content')
@include('layouts.partials.footer')
<!-- jQuery Plugins -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>
@yield('footer')
</body>
</html>

















