<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <base href="<?php echo base_url();?>" />
    <title>EPanel</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Le styles -->
    <!-- Use new way for google web fonts
    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
    <!-- Headings -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />  -->
    <!-- Text -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> -->
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- Core stylesheets do not remove -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/supr-theme/jquery.ui.supr.css" rel="stylesheet" type="text/css"/>
    <link href="css/icons.css" rel="stylesheet" type="text/css" />

    <!-- Plugins stylesheets -->
    <link href="plugins/misc/qtip/jquery.qtip.css" rel="stylesheet" type="text/css" />
    <link href="plugins/misc/prettify/prettify.css" type="text/css" rel="stylesheet" />
    <link href="plugins/misc/pnotify/jquery.pnotify.default.css" type="text/css" rel="stylesheet" />

    <link href="plugins/misc/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="plugins/misc/search/tipuesearch.css" type="text/css" rel="stylesheet" />

    <link href="plugins/forms/uniform/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="plugins/gallery/pretty-photo/prettyPhoto.css" type="text/css" rel="stylesheet" />

    <!-- Main stylesheets -->
    <link href="css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />

    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <?php echo $css;?>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />

    <script type="text/javascript">
        //adding load class to body and hide page
        document.documentElement.className += 'loadstate';
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <?php echo $fjs; ?>
</head>

<body>
<!-- loading animation -->
<div id="qLoverlay"></div>
<div id="qLbar"></div>

<div id="header">

    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <div class="nav-no-collapse">
                    <ul class="nav pull-right usernav">
                        <li ><a id="logout" href="login/logout"><img src="images/ico_logout.png" width="15px"> Salir</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div><!-- /navbar -->

</div><!-- End #header -->



<div id="wrapper">

<!--Responsive navigation button-->
<div class="resBtn">
    <a href="#"><img alt="show" src="images/boton-nav.png" ></a>
</div>

<!--Left Sidebar collapse button-->
<div class="collapseBtn leftbar">
    <a href="#" class="tipR" title="Hide Left Sidebar"> <img alt="show" src="images/boton-nav" > </a>
</div>

<!--Sidebar background-->
<div id="sidebarbg"></div>
<!--Sidebar content-->
<div id="sidebar">
    <div class="sidenav">

        <div class="sidebar-widget" style="margin: 50px 70px 20px;">
            <img src="images/isotipo.png">
            <!--<h5 class="title" style="margin-bottom:0">Navegación</h5>-->
        </div><!-- End .sidenav-widget -->

        <?php echo modules::run('menus/menus/index'); ?>
    </div><!-- End sidenav -->


</div><!-- End #sidebar -->

<!--Body content-->
<div id="content" class="clearfix">
<div class="contentwrapper"><!--Content wrapper-->


<!--<div class="heading">

    <h3>Dashboard</h3>
    <ul class="breadcrumb">
        <li>Estas aqui:</li>
        <li>
            <a href="#" class="tip" title="back to dashboard">
                <img src="images/casa.png">
            </a>
            |
        </li>
        <li class="active">Dashboard</li>
    </ul>

</div>--><!-- End .heading-->

<!-- Build page from here: -->
<?php echo $contenido; ?>
<div class="row-fluid">

    <div class="span8">
        <div class="centerContent">

        </div>
    </div><!-- End .span8 -->

    <div class="span4">
        <div class="centerContent">

        </div>

    </div><!-- End .span4 -->

</div><!-- End .row-fluid -->


</div><!-- End contentwrapper -->
</div><!-- End #content -->

</div><!-- End #wrapper -->

<!-- Le javascript
================================================== -->
<!-- Important plugins put in all pages -->

<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>

<!-- Charts plugins -->
<script type="text/javascript" src="plugins/charts/flot/jquery.flot.js"></script>
<script type="text/javascript" src="plugins/charts/flot/jquery.flot.grow.js"></script>
<script type="text/javascript" src="plugins/charts/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="plugins/charts/flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="plugins/charts/flot/jquery.flot.tooltip_0.4.4.js"></script>
<script type="text/javascript" src="plugins/charts/flot/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="plugins/charts/sparkline/jquery.sparkline.min.js"></script><!-- Sparkline plugin -->
<script type="text/javascript" src="plugins/charts/knob/jquery.knob.js"></script><!-- Circular sliders and stats -->

<!-- Misc plugins -->
<script type="text/javascript" src="plugins/misc/fullcalendar/fullcalendar.min.js"></script><!-- Calendar plugin -->
<script type="text/javascript" src="plugins/misc/qtip/jquery.qtip.min.js"></script><!-- Custom tooltip plugin -->
<script type="text/javascript" src="plugins/misc/totop/jquery.ui.totop.min.js"></script> <!-- Back to top plugin -->
<!-- Search plugin -->
<script type="text/javascript" src="plugins/misc/search/tipuesearch_set.js"></script>
<script type="text/javascript" src="plugins/misc/search/tipuesearch_data.js"></script><!-- JSON for searched results -->
<script type="text/javascript" src="plugins/misc/search/tipuesearch.js"></script>

<!-- Form plugins -->

<script type="text/javascript" src="plugins/forms/watermark/jquery.watermark.min.js"></script>
<script type="text/javascript" src="plugins/forms/elastic/jquery.elastic.js"></script>
<script type="text/javascript" src="plugins/forms/inputlimiter/jquery.inputlimiter.1.3.min.js"></script>
<script type="text/javascript" src="plugins/forms/maskedinput/jquery.maskedinput-1.3.min.js"></script>
<script type="text/javascript" src="plugins/forms/ibutton/jquery.ibutton.min.js"></script>
<script type="text/javascript" src="plugins/forms/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="plugins/forms/stepper/ui.stepper.js"></script>
<script type="text/javascript" src="plugins/forms/color-picker/colorpicker.js"></script>
<script type="text/javascript" src="plugins/forms/timeentry/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="plugins/forms/select/select2.min.js"></script>
<script type="text/javascript" src="plugins/forms/dualselect/jquery.dualListBox-1.3.min.js"></script>
<script type="text/javascript" src="plugins/forms/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript" src="plugins/forms/smartWizzard/jquery.smartWizard-2.0.min.js"></script>
<script type="text/javascript" src="plugins/gallery/pretty-photo/jquery.prettyPhoto.js"></script>

<!--Tiny MCE-->
<script type="text/javascript" src="plugins/forms/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="js/editor.js"></script>
<!-- Fix plugins -->
<script type="text/javascript" src="plugins/fix/ios-fix/ios-orientationchange-fix.js"></script>

<!-- Important Place before main.js  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/supr-theme/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="js/supr-theme/jquery-ui-sliderAccess.js"></script>
<script type="text/javascript" src="plugins/fix/touch-punch/jquery.ui.touch-punch.min.js"></script><!-- Unable touch for JQueryUI -->

<!-- Init plugins -->
<script type="text/javascript" src="js/main.js"></script><!-- Core js functions -->
<?php echo $js;?>
</body>
</html>
