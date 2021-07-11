<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>user_panel</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body style="background:#25a65b">
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
                <div class="panel">
                    <div class="panel_buy">

                        <!-- <img src="images/login1.jpg" alt="" > -->
                        <div class="info">
                            <h2>اطلاعات تور</h2>
                            <hr>
                            <ul >
                                <li>مبدا : {{$info->from}}</li>
                                <li>مقصد : {{$info->to}}</li>
                                <li>تاریخ رفت : {{$info->departuredate}}</li>
                                <li>تاریخ برگشت : {{$info->returndate}}</li>
                                <li>مدت اقامت : {{$info->staytime}} روز</li>
                                <li>هتل : {{$info->hotel}}</li>
                                <li>شرکت  : {{$info->travelcompany}} </li>
                                <li>خدمات تور : {{$info->services}}</li>
                                <li>هزینه تور : {{$info->amount}} تومان</li>
                            </ul>
                        </div>
                        <div class="timeline">
                            <h2>زمان بندی ها </h2>
                            <hr>
                            <ul>
                                <li>مسیر رفت : {{$detail->routewent}}</li>
                                <li>ساعت رفت : {{$detail->timewent}}</li>
                                <li>مسیر برگشت : {{$detail->routeback}}</li>
                                <li>ساعت برگشت : {{$detail->timeback}}</li>
                            </ul>
                        </div>

                    </div>
                    <div class="parent_panel">
                        <div class="panel_information">
                            <div class="titr">
                                <h1>تور مشهد</h1>
                                <hr />
                            </div>
                            <img src="{{ $info->image }}" alt="#"/>
                            <button class="price">شرکت در تور</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
</body>

</html>
