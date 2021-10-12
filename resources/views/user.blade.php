<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>user_panel</title>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="/assets/css/userpanel.css">
</head>

<body>
    <div class="cover">
        <div class="masthead">
            <div class="landing-nav">
                <ul>
                    <li><a href="/">صفحه اصلی</a> </li>
                    <li><a href="/tour">فروشگاه</a></li>
                </ul>
            </div>
            <div class="logo">
                <img alt="" src="assets/images/logo2.png">
            </div>
        </div>
        <div class="content_panel">
            <div class="product">
                <div class="head">
                    <span>
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
                </div>

                <div class="purchases">
                    @foreach ($details->purchases as $item)
                    @if ($item->cancel == 0)
                    <div class="figure_parent">
                        <figure>
                            <div class="image_content">
                                <img src="{{ $item->tour->image }}" alt="#">
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

                    @endif
                    @endforeach
                </div>
            </div>

            <div class="information">
                <div class="text_panel">
                    <h1>اطلاعات پنل کاربری</h1>
                    <hr>
                </div>
                <ul>
                    <li>نام : {{ $user->firstname }}</li>
                    <li>نام خانوادگی :{{ $user->lastname }}</li>
                    <li>ایمیل : {{ $user->email }}</li>
                    <li>شماره موبایل : {{ $user->phonenumber }}</li>
                    <li>نام کاربری : {{ $user->username }}</li>
                    <li> اعتبار : {{ $user->credit }} ریال</li>
                </ul>

                <div class="user-interest">
                    <h2>علاقه مندی های شما</h2>
                    <hr>
                    <form action="/user/edit" method="POST">
                        <div class="items">
                            <div>
                                @csrf
                                @foreach($all_interests as $interest)
                                @if(in_array($interest->id,$user_interests))
                                <span>
                                    <input type="checkbox" name="interest_id[]" value="{{ $interest->id }}" checked>{{ $interest->cityname }}
                                </span>
                                @else
                                <span>
                                    <input type="checkbox" name="interest_id[]" value="{{ $interest->id }}">{{ $interest->cityname }}
                                </span>
                                @endif
                                <br>
                                @endforeach
                            </div>

                        </div>
                        <div class="parent_btn">
                            <button type="submit">افزودن</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

</body>

</html>