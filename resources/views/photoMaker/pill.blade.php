<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Photo Maker</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-ar.css">

    <style>
        .pill-content {
            color: #000;
            background: #fff;
        }

        .pill-content .box {
            background: #f4f4f4;
        }

        .pill-content .box .main-label {
            background: #eaeaea;
            margin: -15px -15px 10px;
            padding: 8px;
        }

        .pill-content .box .main-label p {
            margin: 0;
        }

        .pill-header {
            padding: 20px 0 10px;
            border-bottom: 1px solid #000;
            margin-bottom: 80px;
        }

        .pill-footer {
            padding: 10px 0;
            border-top: 1px solid #000;
            margin-top: 40px;
        }

        .pill-header p {
            margin: 0;
        }

        .pill-header img {
            position: relative;
            height: 100px;
            z-index: 2;
            margin: 15px 0;
        }

        .container {
            padding: 15px;
        }

        .row:before, .row:after {
            display: table;
            content: " "
        }

        .row:after {
            clear: both
        }

        .col-xs-12 {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        @media (min-width: 768px) {
            .pill-header img {
                margin-bottom: -75px;
                margin-top: 0;
            }

            .row {
                margin-right: -15px;
                margin-left: -15px;
            }

            .col-sm-4 {
                width: 29%;
                padding: 0 15px;
            }

            .col-sm-6 {
                width: 43%;
                padding: 0 15px;
            }
        }

        @media (min-width: 992px) {
            .col-md-4 {
                width: 29%;
                padding: 0 15px;
            }

            .container {
                width: 990px;
                margin: 0 auto;
            }
        }
    </style>
</head>

<body>

<div class="pill-content">
    <div class="container">

        <div class="pill-header">
            <div class="row">
                <div class="col-xs-12 col-sm-4 text-align-right">
                    <p>استوديو صانع الصورة</p>
                    <p>Photo Maker Studio </p>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <img src="images/logo-black.png">
                </div>
                <div class="col-xs-12 col-sm-4 pull-left text-align-left">
                    <p>www.pmstu.com</p>
                    <p>info@pmstu.com</p>
                </div>
            </div>
        </div>

        <div>
            <p>الاسم / الشركة</p>
            <p>نوع النشاط</p>
            <p>رقم التواصل</p>
            <p>البريد الإلكتروني</p>


            <label>نوع الخدمة</label>

            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="box margin-bottom" style="background: #f4f4f4">
                        <div class="main-label" style="background: #eaeaea">

                            <p>تصوير فوتوغرافي</p>
                        </div>


                        <div class="check-open">


                            <p>أطعمة ومشروبات</p>


                            <p>أثاث</p>


                            <p>فنادق</p>


                            <p>عقار</p>


                            <p>أجهزة إلكترونية</p>


                            <p>أشخاص</p>


                            <p>توثيق مناسبات</p>


                            <p>عدد الصور: 5</p>


                            <p>خلفية مفرغة</p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-4">
                    <div class="box margin-bottom" style="background: #f4f4f4">
                        <div class="main-label" style="background: #eaeaea">

                            <p>تصوير فوتوغرافي</p>
                        </div>


                        <div class="check-open">


                            <p>أطعمة ومشروبات</p>


                            <p>أثاث</p>


                            <p>فنادق</p>


                            <p>عقار</p>


                            <p>أجهزة إلكترونية</p>


                            <p>أشخاص</p>


                            <p>توثيق مناسبات</p>


                            <p>عدد الصور: 5</p>


                            <p>خلفية مفرغة</p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-4">
                    <div class="box margin-bottom" style="background: #f4f4f4">
                        <div class="main-label" style="background: #eaeaea">

                            <p>تصوير فوتوغرافي</p>
                        </div>


                        <div class="check-open">


                            <p>أطعمة ومشروبات</p>


                            <p>أثاث</p>


                            <p>فنادق</p>


                            <p>عقار</p>


                            <p>أجهزة إلكترونية</p>


                            <p>أشخاص</p>


                            <p>توثيق مناسبات</p>


                            <p>عدد الصور: 5</p>


                            <p>خلفية مفرغة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="pill-footer">
            <div class="row text-center">
                <div class="col-xs-12 col-sm-6">
                    <p>Date :</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>Order number :</p>
                </div>
            </div>
        </div>

    </div>
</div>


<!--===============================
    SCRIPT
===================================-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
