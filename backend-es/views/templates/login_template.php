<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <base href="<?php echo base_url();?>" />
    <title>EPANEL | Panel Administrativo</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Le styles -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="css/supr-theme/jquery.ui.supr.css" rel="stylesheet" type="text/css"/>
    <link href="css/icons.css" rel="stylesheet" type="text/css" />
    <link href="plugins/forms/uniform/uniform.default.css" type="text/css" rel="stylesheet" />
    <!-- Main stylesheets -->
    <link href="css/fonts.css" rel="stylesheet" type="text/css" />

    <link href="css/main.css" rel="stylesheet" type="text/css" />
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
    <?php echo $css;?>

</head>

<body class="loginPage">
<div class="container-fluid">
    <div id="header">
        <div class="row-fluid">
            <div class="navbar">
                <div class="navbar-inner">

                </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
        </div><!-- End .row-fluid -->
    </div><!-- End #header -->
</div><!-- End .container-fluid -->

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="logo"><img class="responsive-image" src="images/logo.png"> </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="loginContainer">
                <form class="form-horizontal" action="login" id="loginForm" method="post" >
                    <div class="span12">
                        <span style=""></span><span style="margin: 2px 0px 0px 2px">Acceso a usuario</span>
                    </div>
                    <div class="form-row row-fluid">
                        <div class="span12">
                            <div class="row-fluid">

                                <input class="span12" id="username-login" type="text" placeholder="NOMBRE DE USUARIO" name="usuario" value="" />
                            </div>
                        </div>
                    </div>

                    <div class="form-row row-fluid">
                        <div class="span12">
                            <div class="row-fluid">

                                <input class="span12" id="password-login" type="password" placeholder="CONTRASEÑA" name="password" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row row-fluid">
                        <div class="span12">
                            <div class="row-fluid">
                                <div class="">
                                    <div class="span12 controls">
                                       <!--  <input type="checkbox" id="keepLoged" value="Value" class="styled" name="logged" /> Keep me logged in -->
                                       <div class="span6" style="width: 50.718%">
                                           <div class="recuerda"style="border-right: 1px solid #fff; height: 25px; margin-bottom: 25px;">
                                               ¿Olvidaste la contraseña?
                                           </div>
                                       </div>
                                        <div class="span6">
                                            <button type="submit" class="btn btn-info right" id="">Entrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div><!-- End .container-fluid -->

<footer>
    <div class="row-fluid bottom-footer">
    </div>

</footer>


<!-- Le javascript
================================================== -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="plugins/misc/touch-punch/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="plugins/misc/ios-fix/ios-orientationchange-fix.js"></script>
<script type="text/javascript" src="plugins/forms/validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="plugins/forms/uniform/jquery.uniform.min.js"></script>
<?php echo $javascripts;?>
<script type="text/javascript">
    // document ready function
    $(document).ready(function() {
        $("input, textarea, select").not('.nostyle').uniform();
        $("#loginForm").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 4
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                username: {
                    required: "Campo requerido",
                    minlength: ""
                },
                password: {
                    required: "Necesitas ingresar un password",
                    minlength: "el password debe de ser mas de 6 caracteres"
                }
            }
        });
    });
</script>
</body>
</html>