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
                    <?php echo formInput('link','link',$link,$clase ='','Enlace');?>					

                    <div class="form-row row-fluid">
                        <div class="span12">
                            <div class="row-fluid">
                                <?php
                                    if ($foto!= ''){ ?>
                                        (Tamaño de imágen 1170 x 450 px. Peso máximo 500KB)
                                        <ul id="cont_foto_0" class="galleryView center">
                                            <li>
                                                <a href="../uploads/sliders/<?php echo $foto; ?>" rel="prettyPhoto" title="">
                                                    <img src="../uploads/sliders/<?php echo $thumbnail; ?>"  width="46" height="80" alt="">
                                                </a>
                                                <div class="actionBtn">
                                                    <a href="javascript:void(0);"  onclick="borrar_foto(<?php echo $id;?>,'0','<?php echo $this->router->class;?>')"  class="delete"><span class="icon16 icomoon-icon-cancel-4 white"></span></a>
                                                </div>
                                            </li>
                                        </ul>

                                        <div id="ifoto_0" style="display:none;">
                                            <label class="form-label span4" for="foto">Foto</label>
                                            <input type="file" name="foto" id="foto" />
                                        </div>
                                    <?php
                                    } else {
                                        ?>
                                        <label class="form-label span4" for="foto">Foto (Tamaño de imágen 1920 x 500 px. Peso máximo 500KB) </label>
                                        <input type="file" name="foto" id="foto" />
                                    <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
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