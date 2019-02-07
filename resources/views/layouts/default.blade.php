<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>雪狐网 - @yield('title','')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    @include('layouts._header')

    <div class="container">
        @yield('content')
        @include('layouts._footer')
    </div>

</body>
</html>
