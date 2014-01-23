<?php

switch($status)
{
    case 1:
        $checkedActivo ='checked="checked"';
        $classActivo = 'class="checked"';
        $checkedInactivo ='';
        break;
    case 0:
        $checkedActivo ='';
        $classActivo = '';
        $checkedInactivo ='checked="checked"';
        break;
}
?>
<div class="row-fluid">
    <div class="span12">
        <ul class="breadcrumb">
            <li><a href="dashboard">Dashboard</a><span class="divider">></span></li>
            <li class="active">
                <a href="<?php echo $this->router->class;?>" class="jTips"><?php echo $this->router->class;?></a>
                <span class="divider">></span>
            </li>
            <li class="active">Ver Registro</li>
        </ul><!-- breadcrumb end -->
    </div>
</div>
<!-- Title area -->
<div class="row-fluid">
    <div class="span12">
        <div class="right">
            <div class="navbar">
                <div class="nav-no-collapse">
                    <ul class="nav">
                        <li><a href="<?php echo $this->router->class;?>"><span class="icon16 icomoon-icon-undo"></span> Atr&aacute;s</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="line"></div>-->
<!-- Main content wrapper -->

<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <?php titulo_seccion("Ver Registro"); ?>
            <div class="content">
                <table class="table table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th class="center">Propiedad</th>
                        <th>Valor</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--<tr>
                        <td class="center">Titulo</td>
                        <td><?php  //echo $titulo;?></td>
                    </tr>
                    <tr>
                        <td class="center">Descripcion</td>
                        <td><?php  //echo $descripcion;?></td>
                    </tr>-->
                    <tr>
                        <td class="center">Foto</td>
                        <td>
                            <ul id="itemContainer" class="galleryView center" >
                                <li class="animated fadeInUp">
                                    <a href="../uploads/galerias/<?php echo $foto; ?>" rel="prettyPhoto" title="">
                                        <img src="../uploads/galerias/<?php echo $thumbnail; ?>" data-original="../uploads/inicio/<?php echo $thumbnail; ?>" alt="" style="display: inline;">
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="center">Estatus</td>
                        <td><?php  echo $txtstatus;?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- End .box -->
    </div><!-- End .span6 -->
</div><!-- End .row-fluid -->
