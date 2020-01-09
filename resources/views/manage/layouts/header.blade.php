@php
$isAuth = Auth::guard('manage')->check();
@endphp

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | cPanel</title>
    <link rel="stylesheet" href="{{asset('lib')}}/css/reset.css">
    <link rel="stylesheet" href="{{asset('lib')}}/css/fonts.css">
    <link rel="stylesheet" href="{{asset('lib')}}/fontawesome/css/all.min.css">
    @if($isAuth)
        <link rel="stylesheet" href="{{asset('manage')}}/css/styles.css">
    @endif
    @stack('stylesheets')
    <script src="{{asset('lib')}}/js/jquery-3.3.1.min.js"></script>
    @stack('scripts')
</head>
<body>
    @if($isAuth)
        <div class="header">
            <div class="header-left">

            </div>

            <div class="header-right">

            </div>
        </div>

        <div class="body">
            @include('manage.layouts.navigator')

            <div class="main">

            </div>
        </div>
    @else
        @yield('login')
    @endif
</body>
</html>