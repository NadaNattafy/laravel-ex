<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Photo Maker</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-ar.css">

    <style>
        input[type="file"] {
            padding: 0;
        }

        .black-box.margin-bottom {
            margin: 0 0 15px;
        }

        .checkbox-holder {
            font-weight: 100;
            position: relative;
            cursor: pointer;
            margin-bottom: 10px;
            display: block;
        }

        .checkbox-holder span {
            vertical-align: middle;
        }

        .checkbox-holder .checkbox-icon {
            width: 13px;
            height: 13px;
            line-height: 7px;
            display: inline-block;
            border: 1px solid #000;
            background: #000;
            text-align: center;
            margin: 0 4px;
        }

        .checkbox-holder input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkbox-holder .checkbox-icon:after {
            content: '';
            background: #000;
            width: 7px;
            height: 7px;
            display: block;
            margin: 2px;
        }

        .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon {
            border-color: #00bcd4;
        }

        .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon:after {
            background: #00bcd4;
        }

        .main-label {
            border-bottom: 1px dashed #00bcd4;
        }

        .check-open {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<!--===============================
    NAV
===================================-->

<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="fa fa-bars"></span>
                </button>

                <a href="index.html" class="navbar-brand hidden-sm hidden-md hidden-lg"><img src="images/logo.png" alt="LOGO"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right text-align-left">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="about.html">من نحن</a></li>
                    <li><a href="services.html">خدماتنا</a></li>
                </ul>

                <a href="index.html" class="navbar-brand hidden-xs text-center"><img src="images/logo.png" alt="LOGO"></a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                    <li><a href="gallery.html">معرض الصور</a></li>
                    <li class="active"><a href="contact.html">اتصل بنا</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<!--===============================
    CONTENT
===================================-->

<div class="fixed-bg">
    <img src="images/B612_20210110_133528_442.jpg">
</div>


<div class="main-content">
    <div class="container">
        <h1 class="main-heading">تواصل معنا</h1>

        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <form>
                    <input type="text" placeholder="الاسم / الشركة">
                    <input type="text" placeholder="نوع النشاط">
                    <input type="tel" placeholder="رقم التواصل">
                    <input type="email" placeholder="البريد الإلكتروني">


                    <label>نوع الخدمة</label>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير فوتوغرافي</span>
                                    </label>
                                </div>


                                <div class="check-open">

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أطعمة ومشروبات</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أثاث</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>فنادق</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>عقار</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أجهزة إلكترونية</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أشخاص</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>توثيق مناسبات</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span> (يرجى التحديد )أخرى </span>
                                    </label>

                                    <input type="text" placeholder="">

                                    <label>عدد الصور</label>
                                    <input type="number" placeholder="عدد الصور">

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مفرغة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مركبة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير بالشكل الطبيعي</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>الممثلين  ( تصوير الأشخاص)</span>
                                    </label>

                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير فوتوغرافي</span>
                                    </label>
                                </div>


                                <div class="check-open">

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أطعمة ومشروبات</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أثاث</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>فنادق</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>عقار</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أجهزة إلكترونية</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أشخاص</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>توثيق مناسبات</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span> (يرجى التحديد )أخرى </span>
                                    </label>

                                    <input type="text" placeholder="">

                                    <label>عدد الصور</label>
                                    <input type="number" placeholder="عدد الصور">

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مفرغة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مركبة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير بالشكل الطبيعي</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>الممثلين  ( تصوير الأشخاص)</span>
                                    </label>

                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير فوتوغرافي</span>
                                    </label>
                                </div>


                                <div class="check-open">

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أطعمة ومشروبات</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أثاث</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>فنادق</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>عقار</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أجهزة إلكترونية</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>أشخاص</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>توثيق مناسبات</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span> (يرجى التحديد )أخرى </span>
                                    </label>

                                    <input type="text" placeholder="">

                                    <label>عدد الصور</label>
                                    <input type="number" placeholder="عدد الصور">

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مفرغة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مركبة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير بالشكل الطبيعي</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>الممثلين  ( تصوير الأشخاص)</span>
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>


                    <label>إرفاق ملف</label>
                    <input type="file" placeholder="إرفاق ملف">
                    <div class="btn btn-white btn-block">
                        <span><input type="submit" value="إرسال"></span>
                    </div>
                </form>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="box black-box text-center">
                    <h3 class="main-heading">تفاصيل الاتصال</h3>

                    <p><i class="fa fa-envelope-o right-fa"></i> Info@pmstu.com</p>
                    <p><i class="fa fa-phone right-fa"></i> 0123456789</p>
                </div>
                <div class="box black-box text-center">
                    <h3 class="main-heading">إشترك معنا</h3>

                    <form>
                        <input type="email" placeholder="بريدك الالكتروني">
                        <div class="btn btn-white btn-block">
                            <span><input type="submit" value="إشترك معنا"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<!--===============================
    FOOTER
===================================-->

<footer class="text-center">
    <div class="container">

        <p>جميع الحقوق محفوظة لمؤسسة صانع الصورة للتجارة  &copy; 2005-2015 </p>

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
        <a href="#"><i class="fa fa-vimeo"></i></a>

    </div>
</footer>


<!--===============================
    SCRIPT
===================================-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function (){
        $('.check-open').slideUp(0);

        $('.main-label .checkbox-holder').click(function (){
            if($(this).find('input').is(':checked')) {
                $(this).parents('.main-label').next('.check-open').stop().slideDown();
            } else {
                $(this).parents('.main-label').next('.check-open').stop().slideUp();
            }
        });
    });
</script>
<script src="js/script.js"></script>
</body>
</html>
