<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册确认链接</title>
</head>
<body>
    <h1>感谢您注册雪狐微博系统！</h1>

    <p>
        请点击或复制下方的链接完成注册：
        <a href="{{ route('confirm_email', $user->activation_token) }}">{{ route('confirm_email', $user->activation_token) }}</a>
        <!-- http://weibo.test/signup/confirm/fdaetrgfdsggd236g -->
    </p>
</body>
</html>
