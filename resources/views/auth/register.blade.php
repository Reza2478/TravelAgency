<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="/assets/css/register&login.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>

<body>
    <img class="wave" src="assets/images/login&register/wave.png">
    <div class="container">
        <div class="login-content">
            <form action="/register" method="post" style="width:500px">
                @csrf
                <img src="assets/images/login&register/avatar.svg">
                <h2 class="title">ثبت نام</h2>

                <div class="contain">
                    <div class="item">
                        <div class="input-div">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h5>نام</h5>
                                <input type="text" class="input" name="firstname" id="firstname" required>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="input-div">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h5>نام خانوادگی</h5>
                                <input type="text" class="input" name="lastname" id="lastname" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contain">
                    <div class="item">
                        <div class="input-div">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h5>نام کاربری</h5>
                                <input type="text" class="input" name="username" id="username" required>
                            </div>
                        </div>
                        @error('username')
                        <span id="msg" class="invalid-feedbackss" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="item">
                        <div class="input-div">
                            <div class="i">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="div">
                                <h5>شماره همراه</h5>
                                <input type="text" class="input" name="phonenumber" id="phonenumber" required>
                            </div>
                        </div>
                        @error('phonenumber')
                        <span id="msg" class="invalid-feedbackss" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="input-div">
                    <div class="i">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class=" div">
                        <h5>پست الکترونیک</h5>
                        <input type="email" class="input" name="email" id="email">
                    </div>
                </div>
                <div class="contain">
                    <div class="item">
                        <div class="input-div">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h5>کلمه عبور</h5>
                                <input type="password" class="input" name="password" id="password" autocomplete="new-password">
                            </div>
                        </div>
                        @error('password')
                        <span id="msg" class="invalid-feedbackss" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="item">
                        <div class="input-div">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h5>تکرار کلمه عبور</h5>
                                <input type="password" class="input" name="password_confirmation" id="password-confirm">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/login">قبلا ثبت نام کرده اید؟ ورود</a>
                <input type="submit" class="btns" value="ثبت نام">
            </form>
        </div>
        <div class="img">
            <img src="assets/images/login&register/bg.svg">
        </div>

    </div>
    <script type="text/javascript" src="assets/js/login&register.js"></script>

</body>

</html>