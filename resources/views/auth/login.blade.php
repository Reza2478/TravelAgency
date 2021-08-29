<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Login</title>
</head>

<body>



    <!-- new code -->
    <img class="wave" src="assets/images/login&register/wave.png">
    <div class="container">
        <div class="login-content">
            <form action="/login" method="post">
                @csrf
                <img src="assets/images/login&register/avatar.svg">
                <h2 class="title">ورود</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>نام کاربری</h5>
                        <input type="text" class="input" name="username" id="username">
                        @error('username')
                        <span id="msg" class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>کلمه عبور</h5>
                        <input type="password" class="input" name="password" id="password" autocomplete="new-password">
                        @error('password')
                        <span id="msg" class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <a href="/register">حساب کاربری ندارید؟ ایجاد حساب</a>
                <input type="submit" class="btn" value="ورود">
            </form>
        </div>
        <div class="img">
            <img src="assets/images/login&register/bg.svg">
        </div>

    </div>

    <!---------------------------------------------------------------->


    <!-- <div class="parent-form">
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
        </div> -->
    <script type="text/javascript" src="assets/js/login&register.js"></script>
</body>

</html>