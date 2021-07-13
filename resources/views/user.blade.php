<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>user_panel</title>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    @php
        $user = Auth::user();
    @endphp
    <header>
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
            <div class="content_panel">
                <span id="out">
                    <a style="cursor: pointer;" href="/logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">خروج</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </span>
                <div class="panel">
                    <div class="panel_buy">
                        <div class="titr">
                            <h1>خریدهای شما</h1>
                            <hr />
                        </div>
                        <!-- <img src="images/login1.jpg" alt="" > -->
                        <div class="grid">

                            <div class="figure_parent">
                                <figure>
                                    <div class="image_content">
                                        <img src="" alt="">
                                    </div>
                                    <figcaption>
                                        <h1></h1>
                                        <h2></h2>
                                        <div class="twice">
                                            <ul>
                                                <li><a href="">دانلود کتاب</a></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                        </div>
                    </div>
                    <div class="parent_panel">
                        <div class="panel_information">
                            <div class="text_panel">
                                <h5>اطلاعات پنل کاربری</h5>
                            </div>
                            <div class="information">
                                <ul>
                                    <li>نام : {{ $user->firstname }}</li>
                                    <li>نام خانوادگی :{{ $user->lastname }}</li>
                                    <li>ایمیل : {{ $user->email }}</li>
                                    <li>شماره موبایل : {{ $user->phonenumber }}</li>
                                    <li>نام کاربری : {{ $user->username }}</li>
                                    <li> اعتبار : {{$user->credit}} ریال</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </header>
</body>

</html>
