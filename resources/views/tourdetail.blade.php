<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>tour</title>
    <link rel="stylesheet" href="/assets/css/tourdetail.css">
    <script src="https://kit.fontawesome.com/8e5597edbc.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>


<body>
    <div class="cover">
        <div class="masthead">
            <div class="landing-nav">
                <ul>
                    <li><a href="/">صفحه اصلی</a></li>
                    <li><a href="/tour">فروشگاه</a></li>
                </ul>
            </div>
            <div class="logo">
                <img alt="" src="/assets/images/logo2.png">
            </div>
        </div>
        <div class="pic">
            <img src="/uploads/{{ $info->image }}" alt="#" />
        </div>
        <div class="buy">
            <h1>!! لطفا هنگام خرید به ظرفیت تور توجه داشته باشید !!</h1>
            @if ($remain>=0 and $accept==1 and $cancel==0)
            <form action="/user/buy" method="post">
                @csrf
                <label for="number">تعداد: </label>
                <input type="text" value="{{$info->id}}" name="id" id="id" style="display:none" />
                <input type="text" value="1" name="number" id="number" />
                <button type="submit" class="price">خرید</button>
            </form>
            @elseif ($remain>=0 and $accept==0 and $cancel==1)
            <h1>شما قبلا از شرکت در این تور منصرف شده اید در صورت تمایل می‌توانید مجدد خرید کنید !</h1>
            <form action="/user/buy" method="post">
                @csrf
                <label for="number">تعداد: </label>
                <input type="text" value="{{$info->id}}" name="id" id="id" style="display:none" />
                <input type="text" value="1" name="number" id="number" />
                <button type="submit" class="price">خرید</button>
            </form>
            @elseif($accept==0 and $remain>=0)
            <h1>شما هم اکنون در این تور شرکت دارید !</h1>
            @else
            <h1>اعتبار شما برای شرکت در تور ناکافیست!</h1>
            @endif
        </div>
        <div class="parent">
            <div class="content">
                <div class="info">
                    <div class="titr">
                        <h2>تور {{$info->to}}</h2>
                        <hr>
                    </div>
                    <ul>
                        <li>مبدا : {{ $info->from }}</li>
                        <li>مقصد : {{ $info->to }}</li>
                        <li>تاریخ رفت : {{ $info->departuredate }}</li>
                        <li>ساعت حرکت : {{ $info->returndate }}</li>
                        <li>تاریخ برگشت : {{ $info->timewent }}</li>
                        <li>ساعت برگشت : {{ $info->timeback }}</li>
                        <li>ظرفیت تور : {{ $info->capacity }}</li>
                        <li>مدت اقامت : {{ $info->staytime }} روز</li>
                        <li>شرکت : {{ $info->travelcompany }} </li>
                        <li>هزینه تور : {{ $info->amount }} تومان</li>
                    </ul>
                </div>
            </div>

            <div class="timeline">
                <div class="titr">
                    <h1>برنامه سفر</h1>
                    <hr>
                </div>
                <br>
                <table>
                    <tr>
                        <th>توقف</th>
                        <th>مدت اقامت</th>
                        <th>هتل</th>
                        <th>خدمات</th>
                    </tr>
                    @foreach ($details as $item)
                    <tr>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->staytime }}</td>
                        <td>{{ $item->hotel }}</td>
                        <td>{{ $item->services }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
    </div>

    <div class="clearfix"></div>
    <div class="contact-landing" id="section-7">
        <footer>
            <div class="art">
                <div class="content">
                    <section>
                        <header>آسان گشت</header>
                        <a href="/">صفحه اصلی</a>
                        <a onclick="$('#section-2').animatescroll();">درباره ما</a>
                    </section>
                    <section>
                        <header>اطلاعات تکمیلی</header>
                        <a href="/tourchosen/مشهد">تور مشهد</a>
                        <a href="/tourchosen/قشم">تور قشم</a>
                        <a href="/tourchosen/یزد">تور یزد</a>
                        <a href="/tourchosen/تبریز">تور تبریز</a>
                        <a href="/tourchosen/اصفهان">تور اصفهان</a>
                        <a href="/tourchosen/تهران">تور تهران</a>
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
        </footer>
    </div>
</body>

</html>