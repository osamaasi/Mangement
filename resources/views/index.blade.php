@extends('layout')

@section('content')



        <!-- Start QueryTheData -->
        <div class="col-md-10 QueryTheData hid">
            <h3 class="h1T">بيانات الموظف</h3><br/>
            <fieldset class=" Qdata fieldsetinfo">
                <legend class="legendinfo">البيانات الشخصية</legend>

                <div class="Qdata col-md-12 ">
                    <fieldset class="fieldsetinfo">
                        <legend class="legendinfo">بيانات أساسية</legend>
                        <button class="dt-button buttons-print" tabindex="0" aria-controls="example" type="button"><span>Print</span></button>
                        <table class="table">

                            <tbody>
                            <tr>
                                <th scope="row">اسم الموظف</th>
                                <td colspan="2"> أحمد محمد علي</td>

                                <td rowspan="3">
                                    <img class="img-thumbnail" src="pictures/o.jpg">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">تاريخ الميلاد: </th>
                                <td colspan="2">19-8-1994</td>
                            </tr>
                            <tr>
                                <th scope="row">مكان الميلاد: </th>
                                <td colspan="2">غزة</td>
                            </tr>
                            <tr>
                                <th scope="row">الجنس: </th>
                                <td colspan="2">ذكر</td>
                            </tr>
                            <tr>
                                <th scope="row">الجنسية:</th>
                                <td colspan="2">فلسطيني</td>
                            </tr>
                            <tr>
                                <th scope="row">رقم جواز السفر/الهوية:</th>
                                <td colspan="2"> 91458422</td>

                            </tr>
                            </tbody>
                        </table>

                    </fieldset>
                    <fieldset class="fieldsetinfo">
                        <legend class="legendinfo">بيانات الوظيفة </legend>

                        <table class="table">

                            <tbody>
                            <tr>
                                <th scope="row">رقم التوظيف</th>
                                <td>1541475</td>


                            </tr>
                            <tr>
                                <th scope="row">
                                    <i class="fa fa-cog"></i> القسم</th>
                                <td> تكنولوجيا المعلومات</td>

                            </tr>
                            <tr>
                                <th scope="row"> الوظيفية</th>
                                <td> مدير قسم تكنولوجيا المعلومات</td>

                            </tr>
                            <tr>
                                <th scope="row">المسمي الوظيفي</th>
                                <td> مدير</td>

                            </tr>
                            <tr>
                                <th scope="row">نوع التوظيف</th>
                                <td>رسمي</td>

                            </tr>
                            <tr>
                                <th scope="row">
                                    <i class="fa fa-calendar"></i> تاريخ التوظيف</th>
                                <td>18-4-2014</td>

                            </tr>


                            <tr>
                                <th scope="row">
                                    <i class="fa fa-graduation-cap"></i>المؤهل الدراسي </th>
                                <td>بكالوريوس </td>

                            </tr>
                            <tr>
                                <th scope="row">
                                    <i class="fa fa-graduation-cap"></i> التخصص العلمي</th>
                                <td> تكنولوجيا المعلومات</td>

                            </tr>
                            </tbody>
                        </table>

                    </fieldset>
                    <fieldset class="fieldsetinfo">
                        <legend class="legendinfo">بيانات الراتب </legend>
                        <table class="table">

                            <tbody>
                            <tr>
                                <th scope="row">
                                    <i class="fa fa-money"></i> الراتب الاساسي </th>
                                <td>1540</td>


                            </tr>
                            <tr>
                                <th scope="row">
                                    <i class="fa fa-money"></i> خصومات مالية</th>
                                <td>40</td>

                            </tr>
                            <tr>
                                <th scope="row">
                                    <i class="fa fa-money"></i> مستحقات مالية</th>
                                <td>18000</td>

                            </tr>
                            <tr>
                                <th scope="row">
                                    <i class="fa fa-bank"></i> صافي الراتب الشهري</th>
                                <td>1500</td>

                            </tr>


                            </tbody>
                        </table>

                    </fieldset>

                    <fieldset class="fieldsetinfo ">
                        <legend class="legendinfo">بيانات التواصل</legend>
                        <table class="table col-12">

                            <tbody>
                            <tr colspan="2">
                                <th scope="row" colspan="2">
                                    <i class="fa fa-address-card"></i> العنوان
                                </th>
                                <td>غزة </td>

                            </tr>
                            <tr>
                                <th scope="row" colspan="2">
                                    <i class="fa fa-mobile"></i> رقم الجوال</th>
                                <td>059844444</td>

                            </tr>

                            <tr>
                                <th scope="row" colspan="2">
                                    <i class="fa fa-envelope"></i> البريد الالكتروني</th>
                                <td class="pr-0"> osam@gmil.com</td>

                            </tr>
                            </tbody>
                        </table>

                    </fieldset>

                </div>

            </fieldset>

        </div>
        <!-- End QueryTheData -->

        <!-- Start Get a report -->
        <div class="col-md-10">
            <div class=" table-responsive EmployeeReports  hid">
                <h3 class="h1T">تقارير الحضور</h3><br/>
                <div class="Qdata col-md-12 ">
                    <fieldset class="fieldsetinfo">
                        <legend class="legendinfo">الحصول على تقارير الحضور</legend>

                        <form class="needs-validation" novalidate>
                            <div class="form-row text-center">
                                <div class="col-md-4 mt-0">
                                    <strong>  <label for="N_Emp">تقرير يومي </label></strong>
                                    <button class="btn btn-primary" type="submit">عرض التقرير </button>

                                </div>
                                <div class="col-md-4 mt-0">
                                    <label for="N_Emp">تقرير شهري </label>
                                    <button class="btn btn-primary" type="submit">عرض التقرير </button>

                                </div>
                                <div class="col-md-4 mt-0">
                                    <label for="N_Emp">تقرير شهري </label>
                                    <button class="btn btn-primary" type="submit">عرض التقرير </button>

                                </div>
                            </div>
                        </form>
                    </fieldset>
                </div>


                <table class="table table-hover ">
                    <thead>
                    <tr>
                        <th>اسم الموظف</th>
                        <th>الرقم الوظيفي</th>
                        <th>أيام الحضور</th>
                        <th>أيام الاجازات</th>
                        <th>الاجازات المتبقية</th>
                        <th> السنة</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>محمد عبد الرحيم</td>
                        <td>1525155</td>
                        <td>30</td>
                        <td>15</td>
                        <td>1</td>
                        <td>2018</td>
                    </tr>
                    <tr>
                        <td>محمد عبد الرحيم</td>
                        <td>1525155</td>
                        <td>304</td>
                        <td>15</td>
                        <td>6</td>
                        <td>2017</td>
                    </tr>
                    <tr>
                        <td>محمد عبد الرحيم</td>
                        <td>1525155</td>
                        <td>301</td>
                        <td>24</td>
                        <td>5</td>
                        <td>2016</td>
                    </tr>
                    <tr>
                        <td>محمد عبد الرحيم</td>
                        <td>1525155</td>
                        <td>132</td>
                        <td>15</td>
                        <td>3</td>
                        <td>2015</td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <!-- End  Get a report  -->

        <!-- Start Employee Reports -->
        <div class="col-md-10">
            <div class="table-responsive Get-a-report hid">
                <h3 class="h1T">الحصول على تقارير الحضور</h3><br/>

                <div class="Qdata col-md-12 ">
                    <fieldset class="fieldsetinfo">
                        <legend class="legendinfo">الحصول على تقارير الحضور</legend>

                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="N_Emp">اسم الموظف </label>
                                    <input type="text" class="form-control" id="N_Emp" value="محمد عبد الرحيم">

                                </div>
                                <div class="col-md-6 ">
                                    <label for="ID_E">رقم الموظف </label>
                                    <input type="number" class="form-control" id="ID_E" value="1580188">

                                </div>


                            </div>
                            <div class="form-row">

                                <div class="col-4">

                                    <label for="s-Date"> التاريخ من </label>

                                    <input class="form-control" type="date" value="2018-08-19" id="s-Date" required>

                                </div>

                                <div class="col-4">

                                    <label for="endtDate"> الي  </label>

                                    <input class="form-control" type="date" value="2018-08-19" id="endtDate" required>

                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <br/>
                                    <button class="btn btn-primary" type="submit">عرض التقرير </button>
                                </div>
                            </div>
                        </form>



                    </fieldset>


                </div>
                <table class="table table-hover ">
                    <thead>
                    <tr>
                        <th>اسم الموظف</th>
                        <th>الرقم الوظيفي</th>
                        <th>أيام الحضور</th>
                        <th>أيام الاجازات</th>
                        <th>الاجازات المتبقية</th>
                        <th> السنة</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>محمد عبد الرحيم</td>
                        <td>1525155</td>
                        <td>30</td>
                        <td>15</td>
                        <td>1</td>
                        <td>2018</td>
                    </tr>
                    <tr>
                        <td>محمد عبد الرحيم</td>
                        <td>1525155</td>
                        <td>304</td>
                        <td>15</td>
                        <td>6</td>
                        <td>2017</td>
                    </tr>
                    <tr>
                        <td>محمد عبد الرحيم</td>
                        <td>1525155</td>
                        <td>301</td>
                        <td>24</td>
                        <td>5</td>
                        <td>2016</td>
                    </tr>
                    <tr>
                        <td>محمد عبد الرحيم</td>
                        <td>1525155</td>
                        <td>132</td>
                        <td>15</td>
                        <td>3</td>
                        <td>2015</td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <!-- End  Employee Reports  -->


        <!-- Start Registering unregistered Leaves  -->
        <div class="col-md-10 RegisterUnregistered hid">
            <h3 class="h1T">قسم المعلومات</h3><br/>
            <fieldset class=" Qdata fieldsetinfo">
                <legend class="legendinfo">تسجيل الموظف</legend>

                <div class="Qdata col-md-12 ">
                    <fieldset class="fieldsetinfo">
                        <legend class="legendinfo">تسجيل الخروج</legend>

                        <form class="needs-validation" novalidate>
                            <div class="form-row">

                                <div class="col-md-6 ">
                                    <label for="ID_Emp">رقم الموظف </label>
                                    <input type="number" class="form-control" id="ID_Emp" value="1580188">

                                </div>
                                <div class="col-md-6 ">
                                    <label for="Type"> نوع العملية </label>
                                    <select class="form-control" id="Type">
                                        <option selected disabled> اختيار نوع التسجيل</option>
                                        <option value="1" > تسجيل الخروج</option>

                                    </select>

                                </div>


                            </div>
                            <div class="form-row">
                                <div class="col-md-6">

                                    <label for="st-Date"> التاريخ </label>

                                    <input class="form-control" type="date" value="2018-08-19" id="st-Date" required>

                                </div>
                                <div class="col-md-6 ">
                                    <label for="time-input">الوقت</label>
                                    <input class="form-control" type="time" value="13:45:00" id="time-input">

                                </div>
                            </div>
                            <div class="form-row">
                                <label for="Cause"> السبب </label>
                                <div class="col-12 col-md-12">
                                    <textarea name="textarea-input" id="Cause" rows="9" placeholder="سبب المغادرة" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <br/>
                                    <button class="btn btn-primary" type="submit">التسجيل </button>
                                </div>
                            </div>
                        </form>



                    </fieldset>


                </div>

            </fieldset>
        </div>
        <!-- End Registering unregistered Leaves    -->


        <!-- Start RegisterAttendance  -->
        <div class="col-md-10 RegisterAttendance hid">
            <h3 class="h1T">قسم المعلومات</h3><br/>
            <fieldset class=" Qdata fieldsetinfo">
                <legend class="legendinfo">تسجيل الموظف</legend>

                <div class="Qdata col-md-12 ">
                    <fieldset class="fieldsetinfo">
                        <legend class="legendinfo">تسجيل الحضور أو الخروج</legend>

                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="Na_Emp">اسم الموظف </label>
                                    <input type="text" class="form-control" id="Na_Emp" value="محمد عبد الرحيم">

                                </div>
                                <div class="col-md-6 ">
                                    <label for="ID_Em">رقم الموظف </label>
                                    <input type="number" class="form-control" id="ID_Em" value="1580188">

                                </div>


                            </div>
                            <div class="form-row">

                                <div class="col-md-4 ">
                                    <label for="Type-e"> نوع العملية </label>
                                    <select class="form-control" id="Type-e">
                                        <option selected disabled> اختيار نوع التسجيل</option>
                                        <option value="IN" >تسجيل الدخول </option>
                                        <option value="OUt" > تسجيل الخروج</option>

                                    </select>

                                </div>

                                <div class="col-md-4">

                                    <label for="saa-Date"> التاريخ </label>

                                    <input class="form-control" type="date" value="2018-08-19" id="saa-Date" required>

                                </div>
                                <div class="col-md-4 ">
                                    <label for="ti-input">الوقت</label>
                                    <input class="form-control" type="time" value="13:45:00" id="ti-input">

                                </div>




                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <br/>
                                    <button class="btn btn-primary" type="submit">التسجيل </button>
                                </div>
                            </div>
                        </form>



                    </fieldset>


                </div>

            </fieldset>
        </div>
        <!-- End RegisterAttendance  -->

        <!-- Start Holiday -->
        <div class="col-md-10 CreateHoliday hid">
            <h3 class="h1T">قسم الإجازات</h3><br/>
            <fieldset class=" Qdata fieldsetinfo">
                <legend class="legendinfo">إضافة عطلة</legend>

                <div class="Qdata col-md-12 ">
                    <fieldset class="fieldsetinfo">
                        <legend class="legendinfo">بيانات الإجازة</legend>

                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 ">
                                    <label for="Name_Emp">اسم الموظف </label>
                                    <input type="text" disabled class="form-control" id="Name_Emp" value="محمد عبد الرحيم">

                                </div>
                                <div class="col-md-4 ">

                                    <label for="startDate">بداية المغادرة </label>

                                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="startDate" required>

                                </div>
                                <div class="col-md-4 ">

                                    <label for="EndDate">نهاية المغادرة </label>

                                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="EndDate" required>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="TypeHoliday">نوع الإجازة</label>
                                    <select class="form-control" id="TypeHoliday">
                                        <option selected disabled>اختيار نوع الإجازة</option>
                                        <option value="0" >إجازة اعتيادية سنوية  </option>
                                        <option value="1" >إجازة طارئة  </option>
                                        <option value="2">إجازة مرضية </option>
                                        <option value="3">إجازة دراسية</option>
                                        <option value="4">إجازة الأمومة</option>
                                        <option value="5">إجازة الحج</option>
                                        <option value="6">الإجازة دون راتب</option>
                                    </select>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="EmployeeSection">دائرة الموظف</label>
                                    <select class="form-control" id="EmployeeSection">
                                        <option selected disabled>اختر الدائرة</option>
                                        <option value="0" >اﻹدارة اﻟﻌﺎﻣﺔ ﻟﺘﻜﻨﻮﻟﻮﺟﯿﺎ اﻟﻤﻌﻠﻮﻣﺎت </option>
                                        <option value="1" >اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﻮازم اﻟﻌﺎﻣﺔ </option>
                                        <option value="2">اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﺸﺆون اﻹدارﯾﺔ و اﻟﻤﺎﻟﯿﺔ </option>
                                        <option value="3">اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﺸﺆون اﻟﻘﺎﻧﻮﻧﯿﺔ</option>
                                        <option value="4">اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﺮﻗﺎﺑﺔ اﻟﻤﺎﻟﯿﺔ اﻟﻤﺪﻧﯿﺔ</option>
                                        <option value="5">اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﺮﻗﺎﺑﺔ اﻟﻤﺎﻟﯿﺔ اﻟﻌﺴﻜﺮﯾﺔ</option>
                                        <option value="6">اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﺮواﺗﺐ</option>
                                    </select>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom05">حالة الطلب</label>
                                    <input type="text" disabled class="form-control" value="غير معتمد">
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">طلب إجازة</button>
                        </form>



                    </fieldset>


                </div>

            </fieldset>
        </div>
        <!-- End Holiday -->



        <!-- Start DayHoliday -->
        <div class="col-md-10 text-right DayHoliday hid">
            <h3 class="h1T c">قسم الإجازات</h3><br/>
            <div class="row">

                <div class="col-md-4 b">
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                <i class="fa fa-th "></i>2018-01-15
                            </strong>
                            <div class="box-icon">

                                <a href="#" data-rel="tooltip" title="Click here for remove date" class="btn  btn-round" id="close_1968">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body card-block">
                            ... السبب </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-dot-circle-o"></i> قبول
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> رفض
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 b">
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                <i class="fa fa-th "></i>2018-01-15
                            </strong>
                            <div class="box-icon">

                                <a href="#" data-rel="tooltip" title="Click here for remove date" class="btn  btn-round" id="close_1968">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body card-block">
                            ... السبب </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-dot-circle-o"></i> قبول
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> رفض
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 b">
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                <i class="fa fa-th "></i>2018-01-15
                            </strong>
                            <div class="box-icon">

                                <a href="#" data-rel="tooltip" title="Click here for remove date" class="btn  btn-round" id="close_1968">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body card-block">
                            ... السبب </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-dot-circle-o"></i> قبول
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> رفض
                            </button>
                        </div>
                    </div>

                </div>



            </div>
            <div class="row">

                <div class="col-md-4 b">
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                <i class="fa fa-th "></i>2018-01-15
                            </strong>
                            <div class="box-icon">

                                <a href="#" data-rel="tooltip" title="Click here for remove date" class="btn  btn-round" id="close_1968">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body card-block">
                            ... السبب </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-dot-circle-o"></i> قبول
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> رفض
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 b">
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                <i class="fa fa-th "></i>2018-01-15
                            </strong>
                            <div class="box-icon">

                                <a href="#" data-rel="tooltip" title="Click here for remove date" class="btn  btn-round" id="close_1968">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body card-block">
                            ... السبب </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-dot-circle-o"></i> قبول
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> رفض
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 b">
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                <i class="fa fa-th "></i>2018-01-15
                            </strong>
                            <div class="box-icon">

                                <a href="#" data-rel="tooltip" title="Click here for remove date" class="btn  btn-round" id="close_1968">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body card-block">
                            ... السبب </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-dot-circle-o"></i> قبول
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> رفض
                            </button>
                        </div>
                    </div>

                </div>



            </div>



        </div>
        <!-- End DayHoliday -->




        <!-- Start password -->

        <div class="col-md-10 pass hid ">
            <h3 class="h1T">إدارة الحساب </h3><br/>

            <div class="col-sm-12 col-md-6 ">
                <div class="card">
                    <div class="card-header ">تغيير كلمة المرور</div>
                    <div class="card-body card-block">
                        <form action="" method="post">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="input-group ">
                                        <input type="password" id="email1" name="email2" placeholder="كلمة المرور القديمة" class="is-invalid form-control">
                                        <div class="input-group-addon ">
                                            <i class="fa fa-asterisk"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="password" id="email2" name="email2" placeholder="كلمة المرور الجديدة" class="is-invalid form-control">
                                        <div class="input-group-addon ">
                                            <i class="fa fa-asterisk"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group ">
                                        <input type="password" id="password2" name="password2" placeholder="تأكيد كلمة المرور" class="is-invalid form-control">
                                        <div class=" input-group-addon">
                                            <i class="fa fa-asterisk"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions form-group">
                                    <button type="submit" class="pass btn btn-primary ">تأكيد</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End password -->


@endsection
        