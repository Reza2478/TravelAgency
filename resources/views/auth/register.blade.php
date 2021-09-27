<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="/assets/css/register&login.css">
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
                                @error('username')
                                <span id="msg" class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="input-div">
                            <div class="i">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="div">
                                <h5>شماره همراه</h5>
                                <input type="text" class="input" name="phonenumber" id="phonenumber" required>
                                @error('phonenumber')
                                <span id="msg" class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
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
                                @error('password')
                                <span id="msg" class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
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
                <input type="submit" class="btn" value="ثبت نام">
            </form>
        </div>
        <div class="img">
            <img src="assets/images/login&register/bg.svg">
        </div>

    </div>



    <!-- <div class="cover">
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
                    <span id="msg" class="invalid-feedback" role="alert">
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
                    <input class="Uname" name="password_confirmation" id="password-confirm" type="password" placeholder="تکرار رمز عبور">
                    <span><a href="/login">قبلا ثبت نام کرده اید؟ ورود</a></span>
                    <br><br>
                    <input class="log" type="submit" value="ثبت نام">
                </form>
            </div>
        </div>
    </div> -->
    <script type="text/javascript" src="assets/js/login&register.js"></script>

</body>

</html>