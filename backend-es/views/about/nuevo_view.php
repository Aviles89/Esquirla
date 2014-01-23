<?php
    if ($msg!="")
    {
        echo "<script type='text/javascript'>$(function(){ $.jGrowl('$msg',{sticky:true}); 	});</script>";
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
                        <li><a href="<?php echo $this->router->class;?>"><span class="icon16   icomoon-icon-undo"></span> Atrás</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <?php titulo_seccion("Nuevo Registro"); ?>

            <div class="content">
                <form class="form-horizontal"
                      action="<?php echo $this->router->class.'/nuevo'; ?>"
                      method="post"
                      enctype="multipart/form-data"
                      autocomplete="off">
                    <div class="row-fluid">
                        <div class="span12">
                            Español
                        </div>
                    </div>
                    <?php echo formInput('titulo','titulo',set_value('titulo'),$clase ='','*Título');?>
                    <?php echo formTextArea('descripcion','descripcion',set_value('descripcion'),$clase ='','Descripción');?>
                    <div class="row-fluid">
                        <div class="span12">
                            Inglés
                        </div>
                    </div>
                    <?php echo formInput('titulo','titulo',set_value('titulo'),$clase ='','*Título');?>
                    <?php echo formTextArea('descripcion','descripcion',set_value('descripcion'),$clase ='','Descripción');?>
                    <div class="row-fluid">
                        <div class="span12">
                            Alemán
                        </div>
                    </div>
                    <?php echo formInput('titulo','titulo',set_value('titulo'),$clase ='','*Título');?>
                    <?php echo formTextArea('descripcion','descripcion',set_value('descripcion'),$clase ='','Descripción');?>

					<?php echo formInput('link','link',set_value('link'),$clase ='','Enlace');?>

                    <div class="form-row row-fluid">
                        <div class="span12">
                            <div class="row-fluid">
                                <label class="form-label span4" for="textarea">Foto</label>
                                <input type="file" name="foto" id="foto" />
                            </div>
                        </div>
                    </div>
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