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
                        <h2>بلیط های خریداری شده</h2>
                        <!-- <h2>Jobs <small>See all jobs <span class="las la-arrow-left"></span></small></h2> -->
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>

                                        <th>مبدا </th>
                                        <th>مقصد</th>
                                        <th>مبلغ</th>
                                        <th>تاریخ رفت</th>
                                        <th>تاریخ برگشت</th>
                                        <th>تگ</th>
                                        <th>نوع</th>
                                        <th>تصویر</th>
                                        <th>حذف</th>
                                        <th>ویرایش </th>
                                    </tr>
                                    @foreach ($tour as $item)
                                        <tr>
                                            <td>
                                                <div>
                                                    {{ $item->from }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{ $item->to }}
                                                </div>
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
                                                    {{ $item->image }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="{{ url('admin', $item->tour_id) }}"><img
                                                            src="assets/images/delete.png" alt="" width="40" /></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a><img src="assets/images/edit.png" alt="" width="23" /></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
            </section>

            <div class="form_add" style="margin-top: 10px">
                <h2>افزودن کاربر جدید</h2>
                <form method="POST" action="addbook.php">

                    <label>مبدا :</label><br>
                    <input type="text"><br>
                    <lable>مقصد :</lable><br>
                    <input type="text"><br>
                    <label>مبلغ :</label><br>
                    <input type="text"><br>
                    <label>تاریخ رفت :</label><br>
                    <input type="text"><br>
                    <label>تاریخ برگشت :</label><br>
                    <input type="text"><br>
                    <label>تگ :</label><br>
                    <input type="text"><br>
                    <label>نوع :</label><br>
                    <input type="text"><br>
                    <label>تصویر :</label><br>
                    <input type="text"><br>
                    <input type="submit" class="submit" value="ثبت">
                </form>
            </div>

            <section style="margin-top: 10px;">
                <div class="jobs-grid">
                    <div class="jobs">
                        <h2>کاربران</h2>
                        <!-- <h2>Jobs <small>See all jobs <span class="las la-arrow-left"></span></small></h2> -->
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>نام کاربری </th>
                                        <th>پسورد</th>
                                        <th>نام</th>
                                        <th>نام خانوادگی</th>
                                        <th>اعتبار</th>
                                        <th>شماره موبایل</th>
                                        <th>ایمیل</th>
                                        <th>نقش</th>
                                        <th>تصویر </th>
                                        <th>حذف</th>
                                        <th>ویرایش</th>
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
                                                    {{ $item->password }}
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
                                                    {{ $item->profile }}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a><img src="assets/images/delete.png" alt="" width="40" /></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a><img src="assets/images/edit.png" alt="" width="23" /></a>
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
