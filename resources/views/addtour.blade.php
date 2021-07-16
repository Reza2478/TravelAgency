<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Addtour</title>
    <script type="text/javascript" src="index.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="cover">
        <div class="masthead">
            <div class="wrapper">
                <div class="landing-nav">
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li><a href="product.php">فروشگاه</a></li>
                    </ul>
                </div>
                <div class="logo">
                    <a href="#"><img alt="" src="assets/images/logo2.png" style="width: 180px"></a>
                </div>
            </div>
        </div>
        <div class="parent-form">
            <h3><i class="fa fa-user"></i>افزودن تور</h3>
            <div class="login">
                <form action="/addtour/insert" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="right">
                        <label for="from">
                            <b>مبدا</b>
                        </label>
                        <input class="Uname" name="from" id="from" type="text" placeholder="مبدا " required>
                    </div>
                    <div class="left">
                        <label for="to">
                            <b>مقصد</b>
                        </label>
                        <input class="Uname" name="to" id="to" type="text" placeholder="مقصد" required>
                    </div>
                    <div class="right">
                        <label for="amount">
                            <b>مبلغ</b>
                        </label>
                        <input class="Uname" name="amount" id="amount" type="text" type="text" placeholder="مبلغ"
                            required>
                    </div>
                    <div class="left">
                        <label for="capacity">
                            <b>ظرفیت</b>
                        </label>
                        <input class="Uname" name="capacity" id="capaciy" type="text" type="text" placeholder="ظرفیت"
                            required>
                    </div>
                    <div class="right">
                        <label for="departuredate">
                            <b>تاریخ رفت</b>
                        </label>
                        <input class="Uname" name="departuredate" id="departuredate" type="date" type="text"
                            placeholder="تاریخ رفت" required>
                    </div>
                    <div class="left">
                        <label for="returndate">
                            <b>تاریخ برگشت</b>
                        </label>
                        <input class="Uname" name="returndate" id="returndate" type="date" type="text"
                            placeholder="تاریخ برگشت" required>
                    </div>
                    <div class="right">
                        <label for="timewent">
                            <b>زمان رفت</b>
                        </label>
                        <input class="Uname" name="timewent" id="timewent" type="time" placeholder="زمان رفت" required>
                    </div>
                    <div class="left">
                        <label for="timeback">
                            <b>زمان برگشت</b>
                        </label>
                        <input class="Uname" name="timeback" id="timeback" type="time" placeholder="زمان برگشت"
                            required>
                    </div>
                    <div class="right">
                        <label for="tag">
                            <b>تگ</b>
                        </label>
                        <input class="Uname" name="tag" id="tag" type="text" placeholder="تگ" required>
                    </div>
                    <div class="left">
                        <label for="type">
                            <b>نوع</b>
                        </label>
                        <input class="Uname" name="type" id="type" type="text" placeholder="نوع" required>
                    </div>
                    <div class="right">
                        <label for="hotel">
                            <b>هتل</b>
                        </label>
                        <input class="Uname" name="hotel" id="hotel" type="text" placeholder="هتل" required>
                    </div>
                    <div class="left">
                        <label for="travelcompany">
                            <b>شرکت مسافرتی</b>
                        </label>
                        <input class="Uname" name="travelcompany" id="travelcompany" type="text"
                            placeholder="شرکت مسافرتی" required>
                    </div>
                    <div class="right">
                        <label for="image">
                            <b>تصویر</b>
                        </label>
                        <input class="Uname" name="image" id="image" type="file" placeholder="تصویر"
                            required>
                    </div>
                    <div class="left">
                        <label for="staytime">
                            <b>اقامت</b>
                        </label>
                        <input class="Uname" name="staytime" id="staytime" type="file" placeholder="تصویر"
                            required>
                    </div>
                    <label for="services">
                        <b>خدمات</b>
                    </label>
                    <input class="Uname" name="services" id="services" type="text" placeholder="خدمات" required>
                    <br><br>
                    <input class="log" type="submit" value="افزودن">
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
