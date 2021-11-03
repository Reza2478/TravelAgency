<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>user_panel</title>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="/assets/css/userpanel.css">
    <script src="https://kit.fontawesome.com/8e5597edbc.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="modal-bg">
        <div class="modal">
            <div class="head">
                <h1>ویرایش اطلاعات</h1>
                <hr />
            </div>
            <form action="/user/editinformation" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" id="id" style="display:none;">
                <div class="item">
                    <label>نام:</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div class="item">
                    <label>نام خانوادگی: </label>
                    <input type="text" name="lastname" id="lastname">
                </div>
                <div class="item">
                    <label>ایمیل: </label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="item">
                    <label>شماره موبایل: </label>
                    <input type="text" name="phonenumber" id="phonenumber">
                </div>
                <div class="item">
                    <label>نام کاربری: </label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="item">
                    <label> پسورد: </label>
                    <input type="text" name="password" id="password" placeholder="برای تعویض پسورد فیلد را پر کنید">
                </div>
                <div class="btn">
                    <input type="submit" value="ثبت">
                </div>
                <span class="modal-close"><i class="fa fa-times"></i></span>
            </form>
        </div>
    </div>
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
                            <div class="img-cnt">
                                <img src="/uploads/{{ $item->tour->image }}" alt="#">
                            </div>
                            <figcaption>
                                <h1>تور {{ $item->tour->to }}</h1>
                                <h2>مبدا :{{ $item->tour->from }}</h2>
                                <h2>مقصد :{{ $item->tour->to }}</h2>
                                <h2>تعداد :{{ $item->number }}</h2>
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
                    <li><a class="modal-btn" onclick="edit({{$user}})">ویرایش</a></li>
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
                                    <input type="checkbox" name="interest_id[]" value="{{ $interest->id }}" checked> {{ $interest->cityname }}
                                </span>
                                @else
                                <span>
                                    <input type="checkbox" name="interest_id[]" value="{{ $interest->id }}"> {{ $interest->cityname }}
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
    <script src="assets/js/userpanel.js"></script>
</body>

</html>