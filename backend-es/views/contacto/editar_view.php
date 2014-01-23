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
                        <li><a href="<?php echo $this->router->class;?>"><span class="icon16 icomoon-icon-undo"></span> Atrás</a></li>
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
                <h4><span>Editar Registro</span></h4>
            </div>
            <div class="content">
                <form class="form-horizontal"
                      action="<?php echo $this->router->class.'/editar/'.$id; ?>"
                      method="post"
                      enctype="multipart/form-data"
                      autocomplete="off">
                    <?php echo formInput('titulo','titulo',$titulo,$clase ='','Titulo');?>
                    <?php echo formInput('email','email',$email,$clase ='','Email');?>
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