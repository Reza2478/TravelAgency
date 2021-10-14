<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" maximnum-scale=1,minimum-scale=1>
    <title>AdminPanel</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="panel.css">
    <script src="https://kit.fontawesome.com/8e5597edbc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/panel.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]
   -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

</head>

<body>
    <div class="cover">
        <div class="masthead">
            <div class="landing-nav">
                <ul>
                    <li><a href="/">صفحه اصلی</a> </li>
                    <li><a href="tour">فروشگاه</a></li>
                </ul>
            </div>
            <div class="logo">
                <img alt="#" src="/assets/images/logo2.png">
            </div>
        </div>

        <div class="modal-bg">
            <div class="modal">
                <div class="head">
                    <h1>جزئیات تور</h1>
                    <hr />
                </div>
                <form action="/admin/edit" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" id="id" style="display:none;">
                    <div class="item">
                        <label>مبدا:</label>
                        <input type="text" name="from" id="from">
                    </div>
                    <div class="item">
                        <label>مقصد: </label>
                        <input type="text" name="to" id="to">
                    </div>
                    <div class="item">
                        <label>مبلغ: </label>
                        <input type="text" name="amount" id="amount">
                    </div>
                    <div class="item">
                        <label>تاریخ رفت: </label>
                        <input type="text" name="departuredate" id="departuredate">
                    </div>
                    <div class="item">
                        <label>تاریخ برگشت: </label>
                        <input type="text" name="returndate" id="returndate">
                    </div>
                    <div class="item">
                        <label>ساعت رفت:</label>
                        <input type="text" name="timewent" id="timewent">
                    </div>
                    <div class="item">
                        <label>ساعت برگشت: </label>
                        <input type="text" name="timeback" id="timeback">
                    </div>
                    <div class="item">
                        <label>ظرفیت: </label>
                        <input type="text" name="capacity" id="capacity">
                    </div>
                    <div class="item">
                        <label for="">تخفیف:</label>
                        <input type="text" name="sale" id="sale">
                    </div>
                    <div class="item">
                        <label>مدت اقامت:</label>
                        <input type="text" name="staytime" id="staytime">
                    </div>
                    <div class="item">
                        <label>هتل: </label>
                        <input type="text" name="hotel" id="hotel">
                    </div>
                    <div class="item">
                        <label>دسته بندی: </label>
                        <input type="text" name="tag" id="tag">
                    </div>
                    <div class="item">
                        <label>نوع : </label>
                        <input type="text" name="type" id="type">
                    </div>
                    <div class="item">
                        <label>خدمات :</label>
                        <input type="text" name="services" id="services">
                    </div>
                    <div class="item">
                        <label>تصویر:</label>
                        <input type="text" name="image" id="image">
                    </div>
                    <div class="item">
                        <label>شرکت مسافرتی:</label>
                        <input type="text" name="travelcompany" id="travelcompany">
                    </div>
                    <div class="btn">
                        <input type="submit" value="ویرایش">
                    </div>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </form>
            </div>
        </div>

        <div class="side-bar">
            <div class="titr">
                <h1>پنل ادمین</h1>
                <hr>
            </div>
            <div class="add-btn">
                <a class="modal-button">افزودن تور</a>
            </div>
            <div class="modal-bg-add">
                <div class="modal">
                    <div class="head">
                        <h1>افزودن تور</h1>
                        <hr />
                    </div>

                    <form action="/addtour/insert" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" id="id" style="display:none;">
                        <div class="item">
                            <label>مبدا:</label>
                            <input type="text" name="from" id="from">
                        </div>
                        <div class="item">
                            <label>مقصد: </label>
                            <input type="text" name="to" id="to">
                        </div>
                        <div class="item">
                            <label>مبلغ: </label>
                            <input type="text" name="amount" id="amount">
                        </div>
                        <div class="item">
                            <label>تاریخ رفت: </label>
                            <input type="text" name="departuredate" id="departuredate">
                        </div>
                        <div class="item">
                            <label>تاریخ برگشت: </label>
                            <input type="text" name="returndate" id="returndate">
                        </div>
                        <div class="item">
                            <label>ساعت رفت:</label>
                            <input type="text" name="timewent" id="timewent">
                        </div>
                        <div class="item">
                            <label>ساعت برگشت: </label>
                            <input type="text" name="timeback" id="timeback">
                        </div>
                        <div class="item">
                            <label>ظرفیت: </label>
                            <input type="text" name="capacity" id="capacity">
                        </div>
                        <div class="item">
                            <label for="">تخفیف:</label>
                            <input type="text" name="sale" id="sale">
                        </div>
                        <div class="item">
                            <label>مدت اقامت:</label>
                            <input type="text" name="staytime" id="staytime">
                        </div>
                        <div class="item">
                            <label>هتل: </label>
                            <input type="text" name="hotel" id="hotel">
                        </div>
                        <div class="item">
                            <label>دسته بندی: </label>
                            <input type="text" name="tag" id="tag">
                        </div>
                        <div class="item">
                            <label>نوع : </label>
                            <input type="text" name="type" id="type">
                        </div>
                        <div class="item">
                            <label>خدمات :</label>
                            <input type="text" name="services" id="services">
                        </div>
                        <div class="item">
                            <label>تصویر:</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="item">
                            <label>شرکت مسافرتی:</label>
                            <input type="text" name="travelcompany" id="travelcompany">
                        </div>
                        <div class="btn">
                            <input type="submit" value="افزودن">
                        </div>
                        <span class="modal-close-add"><i class="fa fa-times"></i></span>
                    </form>
                </div>
            </div>
            <div class="pointer">
                <img style="width:20%" src="/assets/images/pointer.png" alt="#">
            </div>
            <div class="out">
                <a href="/logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">خروج</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

        </div>
        <div class="main-content">
            <div class="wrapper">
                <div class="cards">
                    <div class="card-single">
                        <div class="card-info">
                            <span>خرید ها</span>
                            <h2>{{$purchase->count()}}</h2>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                    </div>
                    <div class="card-single">
                        <div class="card-info">
                            <span>کاربران</span>
                            <h2>{{$user->count()-1}}</h2>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                    <div class="card-single">
                        <div class="card-info">
                            <span>تورها</span>
                            <h2>{{$tour->count()}}</h2>
                        </div>
                        <div class="icon">
                            <i class="fa fa-map"></i>
                        </div>
                    </div>
                </div>
                <div class="tours">
                    <h2>تور های آسان گشت</h2>
                    <hr>
                    <table id="items-table">
                        <tbody>
                            <tr>
                                <th>مبدا </th>
                                <th>مقصد</th>
                                <th>مبلغ</th>
                                <th>ظرفیت</th>
                                <th>حذف</th>
                                <th>جزییات بیشتر</th>
                            </tr>
                            @foreach ($tour as $item)
                            <tr>
                                <td>{{ $item->from }}</td>
                                <td>{{ $item->to }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->capacity }}</td>

                                <td>
                                    @php
                                    $counter = 0;
                                    @endphp
                                    @foreach ($purchase as $temp)
                                    @if ($temp->tour->id==$item->id&&$temp->cancel==0)
                                    <p style="display:none;">{{$counter++ }}</p>
                                    @endif
                                    @endforeach
                                    @if ($counter == 0)

                                    <a class="fa fa-times" href="admin/{{ $item->id }}/deletetour"></a>

                                    @else
                                    <a class="fa fa-times" style="cursor:pointer" onclick="alert('تعدادی در این تور شرکت دارند امکان حذف وجود ندارد!')"></a>
                                    @endif
                                </td>
                                <!-- <td>
                                    <a onclick="edit({{ $item }})"><img src="assets/images/edit.png" alt="" width="23" /></a>
                                </td> -->
                                <td>
                                    <a class="modal-btn" onclick="edit({{$item}})"><i class="fa fa-link"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="purchases">
                    <h2>خریدهای آسان گشت</h2>
                    <hr>
                    <table id="items-table">
                        <tbody>
                            <tr>
                                <th>دسته بندی</th>
                                <th>نوع</th>
                                <th>شماره پیگیری</th>
                                <th>لغو شده</th>
                            </tr>
                            @foreach ($purchase as $item)
                            <tr>
                                <td>{{ $item->tour->tag }}</td>
                                <td>{{ $item->tour->type }}</td>
                                <td>{{ $item->track }}</td>
                                <td>{{ $item->cancel }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="users">
                    <h2>کاربران</h2>
                    <hr>
                    <table id="items-table">
                        <tbody>
                            <tr>
                                <th>نام کاربری</th>
                                <th>نام</th>
                                <th>نام خانوادگی</th>
                                <th>اعتبار</th>
                                <th>شماره موبایل</th>
                                <th>ایمیل</th>
                                <th>نقش</th>
                                <th>حذف</th>
                            </tr>
                            @foreach ($user as $item)
                            @if ($item->username!='admin')
                            <tr>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->firstname }}</td>
                                <td>{{ $item->lastname }}</td>
                                <td>{{ $item->credit }}</td>
                                <td>{{ $item->phonenumber }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>
                                <td><a class="fa fa-times" href="admin/{{ $item->id }}/deleteuser"></a></td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <script src="assets/js/adminpanel.js"></script>
</body>

</html>