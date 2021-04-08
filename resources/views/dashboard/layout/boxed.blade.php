<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Boxed Layout</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/public/_admin/AdminLTE-RTL-master/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/public/_admin/AdminLTE-RTL-master/dist/css/skins/_all-skins.min.css">

    <!-- Bootstrap 3.3.4 -->

{!!Html::style('/public/_admin/AdminLTE-RTL-master/bootstrap/css/bootstrap.min.css')!!}

{!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')!!}

{!!Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')!!}

{!!Html::style('/public/_admin/AdminLTE-RTL-master/dist/css/AdminLTE.min.css')!!}
{{--  {!!Html::style('/public/_admin/AdminLTE-RTL-master/dist/css/skins/_all-skins.min.css')!!}--}}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="skin-blue layout-boxed sidebar-mini" dir="rtl">

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Boxed Layout
                <small>Blank example to the boxed layout</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Layout</a></li>
                <li class="active">Boxed</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="callout callout-info">
                <h4>Tip!</h4>
                <p>Add the layout-boxed class to the body tag to get this layout. The boxed layout is helpful when working on large screens because it prevents the site from stretching very wide.</p>
            </div>
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    Start creating your amazing application!
                </div><!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>

<!-- Jquery Core Js -->
{!!Html::script('public/_admin/AdminLTE-RTL-master/plugins/jQuery/jQuery-2.1.4.min.js')!!}

<!-- Bootstrap Core Js -->
{!!Html::script('public/_admin/AdminLTE-RTL-master/bootstrap/js/bootstrap.min.js')!!}

<!-- Waves Effect Plugin Js -->
{!!Html::script('../../plugins/slimScroll/jquery.slimscroll.min.js')!!}

<!-- Validation Plugin Js -->
{!!Html::script('../../plugins/fastclick/fastclick.min.js')!!}

<!-- Custom Js -->
{!!Html::script('../../dist/js/app.min.js')!!}
{!!Html::script('../../dist/js/demo.js')!!}

</body>
</html>
