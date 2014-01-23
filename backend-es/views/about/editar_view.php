<?php
    if ($msg!="")
    {
        echo "<script type='text/javascript'>$(function(){
	$.pnotify({title: 'Aviso',text: '$msg',hide: false,icon: 'picon icon16 entypo-icon-warning white',opacity: 0.95,history: false,sticker: false});});
	</script>";
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
            <li class="active">Editar Registro</li>
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
            <?php titulo_seccion("Editar Registro"); ?>
            <div class="content">
                <form class="form-horizontal"
                      action="<?php echo $this->router->class.'/editar/'.$id; ?>"
                      method="post"
                      enctype="multipart/form-data"
                      autocomplete="off">

                    <div class="row-fluid">
                        <div class="span12">
                           Contenido en Español
                        </div>
                    </div>
                    <?php echo formInput('titulo','titulo',$titulo,$clase ='','*Título');?>
                    <?php echo formTextArea('descripcion','descripcion',$descripcion,$clase ='','Descripcion');?>

                    <div class="row-fluid">
                        <div class="span12">
                            Contenido en Inglés
                        </div>
                    </div>
                    <?php echo formInput('titulo_2','titulo_2',$titulo_2,$clase ='','*Título');?>
                    <?php echo formTextArea('descripcion_2','descripcion_2',$descripcion_2,$clase ='','Descripcion');?>

                    <div class="row-fluid">
                        <div class="span12">
                            Contenido en Alemán
                        </div>
                    </div>
                    <?php echo formInput('titulo_3','titulo_3',$titulo_3,$clase ='','*Título');?>
                    <?php echo formTextArea('descripcion_3','descripcion_3',$descripcion_3,$clase ='','Descripcion');?>

                    <?php echo formCheckedActivo('status','status',$status);?>
                    <div class="form-actions ">
                        <div class="right">
                            <button type="submit" class="btn btn-info "  >Guardar</button>
                            <a href="<?php echo $this->router->class;?>" class="btn">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- End .box -->
    </div><!-- End .span6 -->
</div><!-- End .row-fluid -->