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
        <div class="user-panel">
            <div class="content_panel">

                <div class="panel">
                    <div class="panel_buy">
                        <span id="out">
                            <a style="cursor: pointer;" href="/logout" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">خروج</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </span>
                        <div class="titr">
                            <h1>خریدهای شما</h1>
                            <hr />
                        </div>
                        @foreach ($details->purchases as $item)
                            @if ($item->cancel == 0)
                                <div class="grid">
                                    <div class="figure_parent">
                                        <figure>
                                            <div class="image_content">
                                                <img src="/uploads/{{ $item->tour->image }}" alt="#">
                                            </div>
                                            <figcaption>
                                                <h1>تور {{ $item->tour->to }}</h1>
                                                <h2>مبدا :{{ $item->tour->from }}</h2>
                                                <h2>مقصد :{{ $item->tour->to }}</h2>
                                                <h2>پیگیری: {{$item->track}}</h2>
                                                <div class="twice">
                                                    <ul>
                                                        <li><a href="/user/{{ $item->id }}/cancel">لغو بلیط</a></li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <div class="parent_panel">
                        <div class="panel_information">
                            <div class="text_panel">
                                <h1>اطلاعات پنل کاربری</h1>
                            </div>
                            <div class="information">
                                <ul>
                                    <li>نام : {{ $user->firstname }}</li>
                                    <li>نام خانوادگی :{{ $user->lastname }}</li>
                                    <li>ایمیل : {{ $user->email }}</li>
                                    <li>شماره موبایل : {{ $user->phonenumber }}</li>
                                    <li>نام کاربری : {{ $user->username }}</li>
                                    <li> اعتبار : {{ $user->credit }} ریال</li>
                                </ul>
                            </div>
                            <div class="user-interest">
                                <h2>علاقه مندی</h2>
                                <ul>
                                    @if ($count == 0)
                                        <p>آیتمی وجود ندارد :)</p>
                                    @else
                                        @foreach ($all_interests as $item)
                                            @if (in_array($item->id, $user_interests))
                                                <li>{{ $item->cityname }}</li>
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                                <form action="/user/edit" method="post">
                                    @csrf
                                    @php
                                        $counter = 0;
                                    @endphp
                                    <h2>افزودن علاقه مندی</h2>
                                    @foreach ($all_interests as $item)

                                        @if (!in_array($item->id, $user_interests))
                                            <p style="display:none;">{{ $counter++ }}</p>
                                            <input type="checkbox" name="interest_id[]"
                                                value="{{ $item->id }}" />{{ $item->cityname }}
                                            <br>
                                        @endif
                                    @endforeach
                                    @if ($counter == 0)
                                        <p>تمام آیتم‌ها انتخاب شده است!</p>
                                    @else
                                        <br>
                                        <button type="submit">افزودن</button>
                                    @endif


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>

</body>

</html>
