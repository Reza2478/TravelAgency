<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" maximnum-scale=1,minimum-scale=1>
    <title>panel</title>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="panel.css">

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
    <input type="checkbox" name="" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <img src="assets/images/logo-cover.png" alt="#" width="40px">
                <div class="brand-icons">
                    <span class="las la-bell"></span>
                    <span class="las la-user-circle"></span>
                </div>
            </div>
        </div>
        <div class="sidebar-main">
            <div class="sidebar-user">
                <img src="assets/images/dakota.jpg" alt="#">
                <div>
                    <h3>رضا امینی زاده </h3>
                    <span>raminizade@gmail.com</span>
                </div>
            </div>
            <div class="sidebar-menu">
                <div class="menu-head">
                    <span>پنل کاربری</span>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span class="las la-balance-scale"></span>
                            Finance
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-chart-pie"></span>
                            Analytics
                        </a>
                    </li>
                </ul>
                <div class="menu-head">
                    <span>Applications</span>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span class="las la-calendar"></span>
                            Calendar
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-users"></span>
                            Contacts
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-shopping-cart"></span>
                            Ecommerce
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-envelope"></span>
                            Mailbox
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-check-circle"></span>
                            Tasks
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-content">
        <header>
            <div class="menu-toggle">
                <label for="sidebar-toggle">
                    <span class="las la-bars"></span>
                </label>

            </div>
            <div class="header-icons">
                <span class="las la-search"></span>
                <span class="las la-bookmark"></span>
                <span class="las la-sms"></span>
            </div>
        </header>
        <main>
            <div class="page-header">
                <div>
                    <h1>Analytics Dashboard</h1>
                    <small>Monitor key metrics. Check reporting and review insights</small>
                </div>
                <div class="header-actions">
                    <button>
                        <span class="las la-file-export"></span>
                        Export
                    </button>
                    <button>
                        <span class="las la-tools"></span>
                        Settings
                    </button>
                </div>
            </div>
            <div class="cards">
                <div class="card-single">
                    <div class="card-flex">
                        <div class="card-info">
                            <div class="card-head">
                                <span>Refunds</span>
                                <small>Value of refunded orders</small>
                            </div>
                            <h2>$4,553.11</h2>
                            <small>10% less refunded</small>
                        </div>
                        <div class="card-chart yellow">
                            <span class="las la-chart-line"></span>
                        </div>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-flex">
                        <div class="card-info">
                            <div class="card-head">
                                <span>uniq visitors</span>
                                <small>Number of visitors</small>
                            </div>
                            <h2>46,085</h2>
                            <small>2% less visitors</small>
                        </div>
                        <div class="card-chart success">
                            <span class="las la-chart-line"></span>
                        </div>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-flex">
                        <div class="card-info">
                            <div class="card-head">
                                <span>uniq visitors</span>
                                <small>Number of visitors</small>
                            </div>
                            <h2>46,085</h2>
                            <small>2% less visitors</small>
                        </div>
                        <div class="card-chart danger">
                            <span class="las la-chart-line"></span>
                        </div>
                    </div>
                </div>
            </div>
            <section style="margin-top: 10px;">
                <div class="jobs-grid">
                    <div class="jobs">
                        <h2>تور های آسان گشت</h2>
                        <!-- <h2>Jobs <small>See all jobs <span class="las la-arrow-left"></span></small></h2> -->
                        <div class="table-responsive">
                            <table id="table">
                                <tbody>
                                    <tr>
                                        <th>مبدا </th>
                                        <th>مقصد</th>
                                        <th>مبلغ</th>
                                        <th>تاریخ رفت</th>
                                        <th>تاریخ برگشت</th>
                                        <th>ساعت رفت</th>
                                        <th>ساعت برگشت</th>
                                        <th>ظرفیت</th>
                                        <th>تخفیف</th>
                                        <th>مدت اقامت</th>
                                        <th>هتل</th>
                                        <th>شرکت مسافرتی</th>
                                        <th>دسته بندی</th>
                                        <th>نوع</th>
                                        <th>خدمات</th>
                                        <th>تصویر</th>
                                        <th>حذف</th>
                                        <th>ویرایش </th>
                                        <th> افزودن زمان بندی</th>
                                    </tr>
                                    @foreach ($tour as $item)
                                        <tr>
                                            <td>
                                                <div>{{ $item->from }}</div>
                                            </td>
                                            <td>
                                                <div>{{ $item->to }}</div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->amount }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->departuredate }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->returndate }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->timeback }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->timeback }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->capacity }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->sale }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->staytime }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->hotel }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->travelcompany }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->tag }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->type }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->services }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->image }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    @php
                                                        $counter = 0;
                                                    @endphp
                                                    @foreach ($purchase as $temp)
                                                        @if ($temp->tour->id==$item->id&&$temp->cancel==0)
                                                            <p style="display:none;">{{$counter++ }}</p>
                                                        @endif
                                                    @endforeach
                                                    @if ($counter == 0)
                                                    <a href="admin/{{ $item->id }}/delete"><img
                                                        src="assets/images/delete.png" alt="" width="40" /></a>
                                                    @else
                                                    <a onclick="alert('تعدادی در این تور شرکت دارند امکان حذف وجود ندارد!')"><img
                                                        src="assets/images/delete.png" alt="" width="40" /></a>
                                                    @endif

                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a onclick="edit({{ $item }})"><img
                                                            src="assets/images/edit.png" alt="" width="23" /></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a onclick="addtimeline({{ $item }})"><img
                                                            src="assets/images/add.png" alt="" width="23" /></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
            </section>

            <a href="/addtour">افزودن تور</a>
            <section id="edit" style="display:none;">
                <h2>ویرایش تور</h2>
                <form action="/admin/edit" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" id="id" style="display:none;">
                    مبدا: <input type="text" name="from" id="from">
                    مقصد: <input type="text" name="to" id="to">
                    مبلغ: <input type="text" name="amount" id="amount">
                    تاریخ رفت: <input type="text" name="departuredate" id="departuredate">
                    تاریخ برگشت: <input type="text" name="returndate" id="returndate">
                    ساعت رفت: <input type="text" name="timewent" id="timewent">
                    ساعت برگشت: <input type="text" name="timeback" id="timeback">
                    ظرفیت: <input type="text" name="capacity" id="capacity">
                    تخفیف:<input type="text" name="sale" id="sale">
                    مدت اقامت: <input type="text" name="staytime" id="staytime">
                    هتل: <input type="text" name="hotel" id="hotel">
                    دسته بندی: <input type="text" name="tag" id="tag">
                    نوع : <input type="text" name="type" id="type">
                    خدمات : <input type="text" name="services" id="services">
                    تصویر: <input type="text" name="image" id="image">
                    شرکت مسافرتی: <input type="text" name="travelcompany" id="travelcompany">
                    <input type="submit" value="ویرایش">
                </form>
            </section>


            <section id="add" style="display:none;">
                <h2> افزودن زمان بندی</h2>
                <form action="/admin/addtimeline" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="tour_id" id="tour_id" style="display:none;">
                    توقف: <input type="text" name="city" id="city">
                    زمان: <input type="time" name="time" id="time">
                    رفت/برگشت: <input type="text" name="status" id="status">
                    <input type="submit" value="افزودن">
                </form>
            </section>


            <section style="margin-top: 10px;">
                <div class="jobs-grid">
                    <div class="jobs">
                        <h2>خریدهای آسان گشت</h2>
                        <!-- <h2>Jobs <small>See all jobs <span class="las la-arrow-left"></span></small></h2> -->
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>دسته بندی</th>
                                        <th>نوع</th>
                                        <th>شماره پیگیری</th>
                                        <th>لغو شده</th>
                                    </tr>
                                    @foreach ($purchase as $item)
                                        <tr>
                                            <td>
                                                <div>
                                                    {{ $item->tour->tag }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->tour->type }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->track }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->cancel }}
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section style="margin-top: 10px;">
                <div class="jobs-grid">
                    <div class="jobs">
                        <h2>کاربران</h2>
                        <!-- <h2>Jobs <small>See all jobs <span class="las la-arrow-left"></span></small></h2> -->
                        <div class="table-responsive">
                            <table>
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
                                        <tr>
                                            <td>
                                                <div>
                                                    {{ $item->username }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->firstname }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->lastname }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->credit }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->phonenumber }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->email }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->role }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a><img src="assets/images/delete.png" alt="" width="40" /></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </div>
    <label for="sidebar-toggle" class="bode-label">

    </label>
    <script src="assets/js/index.js"></script>
</body>

</html>
