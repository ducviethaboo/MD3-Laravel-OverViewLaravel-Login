<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h2>Đăng nhập</h2>
<form action="/login" method="post">
    @csrf
    <p><input type="text" name="username" placeholder="tên đăng nhập"></p>
    <p><input type="text" name="password" placeholder="mật khẩu"></p>
    <p><input type="submit" value="đăng nhập"></p>
</form>
</body>
</html>
