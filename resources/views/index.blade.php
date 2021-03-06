<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>travel-agency Page</title>
    <script src="https://kit.fontawesome.com/8e5597edbc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/colorbox.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]
   -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/jquery.colorbox-min.js"></script>
    <script src="assets/js/animatescroll.min.js"></script>
    <script src="assets/js/responsiveslides.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script>
        new WOW().init();

    </script>
</head>

<body>

    <header>
        <div class="cover">
            <div class="landing-cover wow animated zoomIn">
                <div class="text-slider">
                    <ul>
                        <li>آژانس مسافرتی گردشگری</li>
                    </ul>
                </div>
                @guest
                    <div class="twice">
                        <ul>
                            <li>
                                <a class="project" href="/register">ثبت نام</a>
                            </li>
                            <li>
                                <a class="project" href="/login">ورود</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="welcome">
                        <h2>
                            {{ $user->firstname }} خوش آمدی
                        </h2>
                        <a href="/user">پنل کاربری</a>
                    </div>

                @endguest
            </div>
            <ul class="rslides">
                <li><img alt="" src="assets/images/cover/cover1.jpg"></li>
                <li><img alt="" src="assets/images/cover/cover2.jpg"></li>
                <li><img alt="" src="assets/images/cover/cover3.jpg"></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="masthead">
            <div class="wrapper">
                <div class="landing-nav">
                    <ul>
                        <li>
                            <a  onclick="$('#section-1').animatescroll();">فعالیت ها</a>
                        </li>
                        <li>
                            <a  onclick="$('#section-2').animatescroll();">درباره ما</a>
                        </li>
                        <li>
                            <a onclick="$('#section-3').animatescroll();">چشم انداز</a>
                        </li>
                        <li>
                            <a  onclick="$('#section-4').animatescroll();">تورها</a>
                        </li>
                        <li>
                            <a  onclick="$('#section-5').animatescroll();">سوالات متداول</a>
                        </li>
                        <li>
                            <a  onclick="$('#section-6').animatescroll();">تورهای تخفیفی</a>
                        </li>
                        <li>
                            <a href="#" onclick="$('#section-7').animatescroll();">تماس با ما</a>
                        </li>
                    </ul>
                </div>
                <div class="logo">
                    <a href="#"><img alt="" src="assets/images/logo2.png" style="width: 180px;"></a>
                </div>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>
    <section>
        <div class="featured-landing" id="section-1">
            <div class="wrapper">
                <div class="clearfix"></div>
                <div class="featured wow animated fadeIn">
                    <ul>
                        <li>
                            <h3><i class="fa fa-globe"></i>+500 تور به سراسر جهان</h3>
                            <p>
                                سفر به شگفت انگیزترین مکان‌ها بدون خرید تور امکان پذیر نیست!
                            </p>
                        </li>
                        <li>
                            <h3><i class="fa fa-money"></i>بهترین گارانتی قیمت تور</h3>
                            <p>
                                کیفیت را فدای قیمت نکرده‌ایم فقط با کمترین نرخ ممکن می‌فروشیم!
                            </p>
                        </li>
                        <li>
                            <h3><i class="far fa-smile"></i>بیش از 90% رضایت از تورها</h3>
                            <p>
                                توانسته‌ایم رضایت 90% از باشگاه مشتریان 45,000 نفری را جلب کنیم!
                            </p>
                        </li>
                        <li>
                            <h3><i class="fas fa-phone"></i>پشتیبانی 24 ساعته</h3>
                            <p>
                                فقط کافیست در هر ساعت از شبانه روز با شماره 33143 – 026 تماس بگیرید!
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section>
        <div class="about-landing" id="section-2">
            <div class="container">
                <div class="about-text">
                    <h3>درباره ما</h3>
                    <p class="wow animated fadeIn">
                        نهال‌گشت ایرانیان یک شرکت هلدینگ در صنعت گردشگری است و با شرکت‌های زیر مجموعه و ساب برندهای
                        مختلف در
                        اکثر بخش‌های گردشگری فعالیت می‌کند. هرکدام از این بخش‌ها برای رفاه حال باشگاه مشتریان 45,000
                        نفری
                        نهال‌گشت بوجود آمده‌اند؛ آژانس هواپیمایی و مسافرتی نهال گشت یکی از این بخش‌هاست که تورهای ارزان،
                        لوکس،
                        هوایی، زمینی را به سراسر جهان برگزار می‌کند.
                    </p>
                </div>
                <div class="thumb wow animated zoomIn"><img src="assets/images/Statue.jpg" alt=""></div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section>
        <div class="views wow animated fadeIn" id="section-3">
            <div class="container">
                <h3>تخفیف ویژه تورهای مسافرتی از 10 تا 30% درصد</h3>
                <p>
                    برای درخواست تورهای ارزان قیمت، رزرو هتل، بلیط هواپیما – اتوبوس – قطار، تورهای لحظه آخری، تورهای
                    خارجی و
                    داخلی و تورهای لوکس فقط کافیست به بخش تورهای لحظه آخری سر بزنید!
                </p>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section>
        <div class="project-landing" id="section-4">
            <div class="wrapper">
                <div class="featured-title">
                    <h3>تورهای آسان گشت</h3>
                </div>
                <hr>
                <div class="grid wow animated fadeIn">
                    @php
                        $counter = 0;
                    @endphp
                    @foreach ($tour as $item)
                        @if ($item->sale == 0)
                            <p style="display:none;">{{ $counter++ }}</p>
                            <figure>
                                <img src="/uploads/{{ $item->image }}" alt="#">
                                <figcaption>
                                    @if ($item->type === 'airplane')
                                        <h2>تور هوایی {{ $item->to }}</h2>
                                    @elseif ($item->type === 'train')
                                        <h2>تور قطار {{ $item->to }}</h2>
                                    @elseif ($item->type === 'bus')
                                        <h2>تور اتوبوس {{ $item->to }}</h2>
                                    @endif
                                    <h4><i class="fa fa-map-marker"></i>مبدا : {{ $item->from }}</h4>
                                    <h4><i class="fa fa-map-marker"></i>مقصد : {{ $item->to }}</h4>
                                    <a href="tourdetail/{{ $item->id }}" class="more" id="myBtn">نمایش کامل</a>
                                </figcaption>
                            </figure>
                        @endif
                    @break($counter == 4)
                    @endforeach
                    @if ($counter == 0)
                        <div class="msg-tour">
                            <p>آیتمی وجود ندارد</p>
                        </div>
                    @endif
                </div>
                @if ($counter != 0)
                    <a href="tour" class="show-more">نمایش همه</a>
                @endif

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section>
        <div class="blog-landing" id="section-5">
            <div class="blog-wrapper">
                <div class="featured-title">
                    <h3>سوالات متداول</h3>
                </div>
                <hr>
                <div class="content wow animated fadeIn">
                    <article>
                        <div class="post">
                            <ul class="question">
                                <li id="q1">
                                    <i class="fa fa-question-circle"></i>
                                    از چند روز قبل بلیط تهیه کنیم؟
                                    <ul id="answer1">
                                        <li>امکان رزرو بلیط هواپیما از ماه‌ها قبل وجود دارد. اما گاهی اوقات قیمت بلیط
                                            هواپیما در
                                            روزهای
                                            نزدیک به پرواز ارزان‌تر می‌شود. بنابراین در صورتی که شرایطتان اجازه می‌دهد،
                                            رزرو آنلاین
                                            بلیط
                                            هواپیما را به روزهای نزدیک پرواز موکول کنید. البته اگر قصد سفر در ایام پرسفر
                                            نظیر
                                            تعطیلات را
                                            دارید، باید هر چه زودتر رزرو بلیط هواپیما را انجام دهید.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article>
                        <div class="post">
                            <ul class="question">
                                <li id="q2">
                                    <i class="fa fa-question-circle"></i>
                                    آیا پس از خرید بلیط امکان استرداد آن وجود دارد؟
                                    <ul id="answer2">
                                        <li>هنگام تهیه بلیط از سایت ما خیالتان آسوده است که امکان بازگشت وجه شما وجود
                                            دارد میزان
                                            جریمه
                                            آن نیز 10% قیمت بلیط از آن کسر می‌شود.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article>
                        <div class="post">
                            <ul class="question">
                                <li id="q3">
                                    <i class="fa fa-question-circle"></i>
                                    هنگامی که از سایت بلیط هواپیما رزرو می‌کنیم، امکان انتخاب صندلی نیز وجود دارد؟
                                    <ul id="answer3">
                                        <li>خیر؛ هنگام رزرو بلیط هواپیماامکان انتخاب صندلی وجود ندارد. البته در زمان
                                            چک‌این انتخاب محدوده صندلی امکان‌پذیر است.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article>
                        <div class="post">
                            <ul class="question">
                                <li id="q4">
                                    <i class="fa fa-question-circle"></i>
                                    آیا پس از خرید بلیط هواپیما، امکان تغییر نام یا نام خانوادگی وجود دارد؟
                                    <ul id="answer4">
                                        <li>
                                            در پرواز ها، امکان تغییر نام و نام خانوادگی در بلیط سیستمی وجود ندارد.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section>
        <div class="customer-landing" id="section-6">
            <div class="wrapper">
                <div class="featured-title">
                    <h3>تورهای تخفیفی</h3>
                </div>
                <hr>
                <div id="owl-demo" class="wow animated fadeIn">
                    @foreach ($sale as $item)
                        <div class="item">
                            <a href="tourdetail/{{ $item->id }}">
                                <figure class="figurefx pushup">
                                    <img src="/uploads/{{ $item->image }}" alt="">
                                    <figcaption>
                                        <h2>تور {{ $item->to }}</h2>
                                        <h4>مبدا : {{ $item->from }}<i class="fa fa-map-marker"></i></h4>
                                        <h4>مقصد : {{ $item->to }}<i class="fa fa-map-marker"></i></h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section>
        <div class="contact-landing" id="section-7">

            <footer>
                <div class="art">
                    <div class="content">
                        <section>
                            <header>آسان گشت</header>
                            <a href="#">صفحه اصلی</a>
                            <a href="#">درباره ما</a>
                            <a href=#>سوالات متداول</a>
                        </section>
                        <section>
                            <header>اطلاعات تکمیلی</header>
                            <a href="#">تور لحظه آخری</a>
                            <a href="#">تور مشهد</a>
                            <a href="#">تور قشم</a>
                            <a href="#">تور یزد</a>
                            <a href="#">تور تبریز</a>
                            <a href="#">تور اصفهان</a>
                            <a href="#">تور شیراز</a>
                        </section>
                        <section>
                            <header>تماس با ما</header>
                            <form action="">
                                <input type="email" placeholder="لطفا ایمیل خود را وارد کنید" id=""></input>
                                <textarea placeholder="لطفا متن پیام خود را وارد کنید"></textarea>
                                <input type="submit" value="ارسال">
                            </form>
                            <div class="social">
                                <i class="fab fa-youtube"></i>
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-telegram-plane"></i>
                            </div>
                        </section>
                    </div>
                    <div class="notice">
                        © تمام حقوق برای asangasht.ir محفوظ است
                        <strong>طراحی توسط رضا امینی زاده</strong>
                    </div>
                </div>
            </footer>

        </div>


    </section>
    <div class="clearfix"></div>

    <script src="assets/js/index.js"></script>

</body>

</html>
