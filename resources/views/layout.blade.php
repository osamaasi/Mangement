<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=on">

    <title>Project</title>
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">


</head>

<body>
<header></header>

<div class="upper-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm phone">
                <span>0598146270</span>
                <i class="fa fa-phone"></i>
                <span>oasmaabuassi.ooo@gmail.com</span>
                <i class="fa fa-envelope-o"></i>

            </div>

        </div>
    </div>

</div>
<!--Start NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span>إدارة</span>
            <span>الموظفين</span>


        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#minenavv" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="minenavv">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        اسم المستخدم
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navlog">
                        <a class="dropdown-item" href="#">تسجيل الخروج</a>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--END NAVBAR-->
<!--start Features--> </div>

<div class="Right-menu text-center">
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-12 col-lg-3 hidden-xs-down bg-faded sidebar pt-3">
                <ul class="list-unstyled aside-nav">

                    <li class=" col-lg active-solid">
                        <i class="fa fa-home"></i>
                        <span>
                            القائمة الرئيسية</span>
                    </li>
                    <li data-class="QueryTheData" class="col-lg a-f">
                        <i class="fa fa-plus"></i> استعلام البيانات
                    </li>
                    <li data-class="EmployeeReports" class="col-lg a-f">
                        <i class="fa fa-pencil-square-o"></i> تقارير الموظف
                    </li>


                    <li class=" col-lg active-solid">
                        <i class="fa fa-info "></i> قسم المعلومات
                    </li>

                    <li data-class="GetAreport" class="col-lg a-f">
                        <i class="fa fa-pencil-square-o"></i> الحصول علي تقرير
                    </li>
                    <li data-class="RegisterUnregistered" class="col-lg a-f">
                        <i class="fa fa-paperclip"></i> طلب مغادرة
                    </li>
                    <li data-class="RegisterAttendance" class="col-lg a-f">
                        <i class="fa fa-file-text"></i> تسجيل الحضور
                    </li>
                    <li data-class=".inf" class="col-lg a-f">
                        <i class="fa fa-users"></i> معلومات القسم
                    </li>

                    <li class=" col-lg active-solid ">

                        <i class="fa fa-history" a></i> قسم الاجازات
                    </li>

                    <li data-class="CreateHoliday" class="col-lg a-f">
                        <i class="fa fa-calendar"></i> طلب إجازة
                    </li>
                    <li data-class="DayHoliday" class="col-lg a-f">
                        <i class="fa fa-bed"></i> إدارة الاجازات
                    </li>


                    <li class=" col-lg active-solid">

                        <i class="fa fa-history"></i> ادارة الحساب
                    </li>
                    <li data-class="ch_pass" class="col-lg a-f">
                        <i class="fa fa-plus"></i> تغير كلمة المرور
                    </li>

                </ul>


            </nav>


            <main class="col-sm-12 col-md-12 col-lg-9 pt-3">
                <div class="row justify-content-center ">

                      @yield('content')

                </div>
            </main>

    </div>
</div>
<!--END Features-->





<footer></footer>


<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>