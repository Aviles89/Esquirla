<?php
    if ($msg!="")
    {
        echo "<script type='text/javascript'>$(function(){ $.jGrowl('$msg',{sticky:true});  });</script>";
    }
    $val_error = validation_errors();
    echo showErrorsJGrowl($val_error);
?>

<div class="separator"><span></span></div>

<div class="row-fluid">
    <div class="span12">
        <ul class="breadcrumb">
            <li><a href="dashboard">Dashboard</a><span class="divider">></span></li>
            <li class="active">
                <a href="<?php echo $this->router->class;?>" class="jTips"><?php echo $this->router->class;?></a>
                <span class="divider">></span>
            </li>
            <li class="active">Nuevo Registro</li>
        </ul><!-- breadcrumb end -->
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="right">
            <div class="navbar">
                <div class="nav-no-collapse">
                    <ul class="nav">
                        <li><a href="<?php echo $this->router->class;?>">Atrás</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="title">
                <h4>
                    <span>Nuevo Registro</span>
                </h4>
            </div>
            <div class="content">
                <form class="form-horizontal"
                      action="<?php echo $this->router->class.'/nuevo'; ?>"
                      method="post"
                      enctype="multipart/form-data"
                      autocomplete="off">
                    <?php echo formInput('seccion','seccion','',$clase ='','Seccion');?>
                    <?php echo formInput('keywords','keywords','',$clase ='','Palabras clave');?>

                    
                    <div class="form-actions ">
                        <div class="right">
                            <button type="submit" class="btn btn-info">Guardar</button>
                            <a href="<?php echo $this->router->class;?>" class="btn">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- End .box -->
    </div><!-- End .span6 -->
</div><!-- End .row-fluid -->