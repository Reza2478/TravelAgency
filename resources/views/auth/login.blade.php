<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="cover">
        <div class="masthead">
            <div class="wrapper">
                <div class="landing-nav">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a> </li>
                        <li><a href="product.php">فروشگاه</a></li>
                    </ul>
                </div>
                <div class="logo">
                    <a href="#"><img alt="" src="assets/images/logo2.png" style="width: 180px"></a>
                </div>
            </div>
        </div>
        <div class="parent-form">
            <h3><i class="fa fa-user"></i>ورود</h3>
            <div class="login">
                <form action="/login" method="post">
                    @csrf
                    <label for="username">
                        <b>نام کاربری</b>
                    </label>
                    <input class="Uname" name="username" id="username" type="text" type="text" placeholder="نام کاربری">
                    @error('username')
                        <span id="msg" class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    <label for="password">
                        <b>رمز عبور</b>
                    </label>
                    <input class="Uname" name="password" id="password" type="password" placeholder="رمز عبور">
                    @error('password')
                        <span id="msg" class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    <span><a href="/register">حساب کاربری ندارید؟ ایجاد حساب</a></span>
                    <br><br>
                    <input class="log" type="submit" value="ورود">
                </form>
            </div>
        </div>
    </div>

</body>

</html>
