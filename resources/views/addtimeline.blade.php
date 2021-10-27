<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Timeline</title>

    <script src="https://kit.fontawesome.com/8e5597edbc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/timeline.css">

    
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
                <img alt="#" src="/assets/images/logo2.png">
            </div>
        </div>

        <div class="modal-bg">
            <div class="modal">
                <div class="head">
                    <h1>َویرایش برنامه سفر</h1>
                    <hr />
                </div>
                <form action="/addtimeline/edittimeline" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" id="id" style="display:none;">
                    <div class="item">
                        <label>توقف:</label>
                        <input type="text" name="city" id="city">
                    </div>
                    <div class="item">
                        <label>هتل: </label>
                        <input type="text" name="hotel" id="hotel">
                    </div>
                    <div class="item">
                        <label>خدمات: </label>
                        <input type="text" name="services" id="services">
                    </div>
                    <div class="item">
                        <label>اقامت: </label>
                        <input type="text" name="staytime" id="staytime">
                    </div>
                    
                    <div class="btn">
                        <input type="submit" value="ویرایش">
                    </div>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </form>
            </div>
        </div>
        <div class="ptable">
            <h3>برنامه سفر</h3>
            <hr>
            <table id="items-table">
                <tbody>
                    <tr>
                        <th>توقف</th>
                        <th>هتل</th>
                        <th>خدمات</th>
                        <th>اقامت</th>
                        <th>حذف</th>
                        <th>ویرایش</th>
                    </tr>
                    @foreach ($timeline as $item)
                    <tr>
                        <td>{{$item->city}}</td>
                        <td>{{$item->hotel}}</td>
                        <td>{{$item->services}}</td>
                        <td>{{$item->staytime}}</td>
                        <td>
                            <a class="fa fa-times" href="/addtimeline/{{ $item->id }}/deletetimeline"></a>
                        </td>
                        <td>
                            <a class="modal-btn" onclick="edit({{$item}})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pform">
            <div class="head">
                <h3>افزودن برنامه</h3>
                <hr>
            </div>
            <form action="/admin/addtimeline" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" value="{{$id}}" name="tour_id" id="tour_id" style="display:none;">
                <div class="item">
                    <label>توقف:</label>
                    <input type="text" name="city" id="city">
                </div>
                <div class="item">
                    <label>هتل: </label>
                    <input type="text" name="hotel">
                </div>
                <div class="item">
                    <label>خدمات: </label>
                    <input type="text" name="services">
                </div>
                <div class="item">
                    <label>اقامت: </label>
                    <input type="text" name="staytime">
                </div>
                <input class="btns" type="submit" value="افزودن">
            </form>
        </div>

    </div>

    <script src="/assets/js/timeline.js"></script>
</body>

</html>