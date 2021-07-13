<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Register</title>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
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
            <h3><i class="fa fa-user"></i> ثبت نام</h3>
            <div class="login">
                <form action="/register" method="post">
                    @csrf
                    <label for="firstname">
                        <b>نام</b>
                    </label>
                    <input class="Uname" name="firstname" id="firstname" type="text" placeholder="نام " required>
                    <label for="lastname">
                        <b>نام خانوادگی</b>
                    </label>
                    <input class="Uname" name="lastname" id="lastname" type="text" placeholder="نام خانوادگی " required>
                    <label for="username">
                        <b>نام کاربری</b>
                    </label>
                    <input class="Uname" name="username" id="username" type="text" type="text" placeholder="نام کاربری">
                    @error('username')
                        <span id="msg" class="invalid-feedback" role="alert">
                           {{ $message }}
                        </span>
                    @enderror
                    <label for="phonenumber">
                        <b>شماره همراه</b>
                    </label>
                    <input class="Uname" name="phonenumber" id="phonenumber" type="text" type="text" placeholder="شماره همراه">
                    @error('phonenumber')
                        <span  id="msg" class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    <label for="email">
                        <b>پست الکترونیک</b>
                    </label>
                    <input class="Uname" name="email" id="email" type="text" type="text" placeholder="پست الکترونیک">
                    <label for="password">
                        <b>رمز عبور</b>
                    </label>
                    <input class="Uname" name="password" id="password" type="password" placeholder="رمز عبور">
                    @error('password')
                        <span id="msg" class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    <label for="password-confirm">
                        <b>تکرار رمز عبور</b>
                    </label>
                    <input class="Uname" name="password_confirmation" id="password-confirm" type="password"
                        placeholder="تکرار رمز عبور">
                        <span><a href="/login">قبلا ثبت نام کرده اید؟ ورود</a></span>
                        <br><br>
                    <input class="log" type="submit" value="ثبت نام">
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>





















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>

        {{-- <h3><i class="fa fa-heart"></i> علاقه مندی </h3>
            <div class="interest">
                <input type="checkbox" value="مشهد" id="tour1">
                <label for="tour1">مشهد</label>
                <input type="checkbox" value="اصفهان" id="tour2">
                <label for="tour2">اصفهان</label>
                <input type="checkbox" value="تبریز" id="tour3">
                <label for="tour3">تبریز</label>
                <input type="checkbox" value="قشم" id="tour4">
                <label for="tour4">قشم</label>
                <input type="checkbox" value="شیراز" id="tour5">
                <label for="tour5">شیراز</label>
                <input type="checkbox" value="یزد" id="tour6">
                <label for="tour6">یزد</label>
            </div> --}}

    </div>
</body>

</html>
