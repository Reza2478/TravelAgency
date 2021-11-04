<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/register&login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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
                    </div>
                </div>
                @error('username')
                <span id="msg" class="invalid-feedbacks" role="alert">
                    {{ $message }}
                </span>
                @enderror
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>کلمه عبور</h5>
                        <input type="password" class="input" name="password" id="password" autocomplete="new-password">
                    </div>
                </div>
                @error('password')
                <span id="msg" class="invalid-feedbacks" role="alert">
                    {{ $message }}
                </span>
                @enderror
                <a href="/register">حساب کاربری ندارید؟ ایجاد حساب</a>
                <a href="/forget-password">Reset Password</a>
                <input type="submit" class="btns" value="ورود">
            </form>
        </div>
        <div class="img">
            <img src="assets/images/login&register/bg.svg">
        </div>

    </div>
    <script type="text/javascript" src="assets/js/login&register.js"></script>
</body>

</html>