<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>雪狐网 - @yield('title','')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="/" class="navbar-brand">雪狐网</a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a href="/help" class="nav-link">帮助</a></li>
                <li class="nav-item"><a href="javascript:;" class="nav-link">登录</a></li>
                <li class="nav-item"><a href="javascript:;" class="nav-link">注册</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
