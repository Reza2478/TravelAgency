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
                        <li><a href="/">صفحه اصلی</a> </li>
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
                        <ul>
                            <li>مبدا : {{ $info->from }}</li>
                            <li>مقصد : {{ $info->to }}</li>
                            <li>تاریخ رفت : {{ $info->departuredate }}</li>
                            <li>ساعت حرکت : {{ $info->returndate }}</li>
                            <li>تاریخ برگشت : {{ $info->timewent }}</li>
                            <li>ساعت برگشت : {{ $info->timeback }}</li>
                            <li>ظرفیت تور : {{ $info->capacity }}</li>
                            <li>مدت اقامت : {{ $info->staytime }} روز</li>
                            <li>هتل : {{ $info->hotel }}</li>
                            <li>شرکت : {{ $info->travelcompany }} </li>
                            <li>خدمات تور : {{ $info->services }}</li>
                            <li>هزینه تور : {{ $info->amount }} تومان</li>

                        </ul>
                    </div>
                    <div class="timeline">
                        <h2>زمان بندی ها </h2>
                        <hr>
                        <div class="right">
                            <h2>مسیر رفت</h2>
                            <br>
                            <table>
                                <tr>
                                    <th>توقف</th>
                                    <th>زمان</th>
                                </tr>
                                @foreach ($details as $item)
                                    @if ($item->status == 0)
                                        <tr>
                                            <td>{{ $item->city }}</td>
                                            <td>{{ $item->time }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                        <div class="left">
                            <h2>مسیر برگشت</h2>
                            <br>
                            <table>
                                <tr>
                                    <th>توقف</th>
                                    <th>زمان</th>
                                </tr>
                                @foreach ($details as $item)
                                    @if ($item->status == 1)
                                        <tr>
                                            <td>{{ $item->city }}</td>
                                            <td>{{ $item->time }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
                <div class="parent_panel">
                    <div class="panel_information">
                        <div class="titr">
                            <h1>تور {{$info->to}}</h1>
                            <hr />
                        </div>
                        <img src="/uploads/{{ $info->image }}" alt="#" />
                        @if ($remain>=0)
                        <a href="/user/{{ $info->id}}/buy" class="price">شرکت در تور</a>
                        @else
                        <a onclick="alert('اعتبار شما برای شرکت در تور ناکافیست!')" class="price">شرکت در تور</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</body>

</html>
