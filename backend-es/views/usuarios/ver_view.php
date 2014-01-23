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

<!-- Title area -->
<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5>Ver Usuario</h5>
        </div>
        <div class="middleNav">
            <ul>
                <li class="mUser"><a href="<?php echo $this->router->class; ?>" title=""><span class="back"></span></a></li>

            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="line"></div>
<!-- Main content wrapper -->
<div class="wrapper">


    <!-- Form -->
    <div class="form" >
        <fieldset>
            <div class="widget">
                <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Ingresa los siguientes campos</h6></div>

                <div class="formRow">
                    <label >Usuario</label>
                    <div class="formRight">
                        <span class="oneFour"><?php echo $usuario; ?></span>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label>Rol:</label>
                    <div class="formRight">
                        <?php
                        $roles = array('1' => 'Administrador','2' => 'Capturista');
                            foreach($roles as $k => $value){
                                if($k == $rol){
                                    echo $value;
                                }
                            }
                        ?>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label>Estatus:</label>
                    <div class="formRight">
                      <?php if ($checkedActivo!=''){
                        echo "Inactivo";
                    }else{
                        echo "Activo";
                    }?>
                    </div>
                </div>


                <div class="clear"></div>
            </div>
        </fieldset>
    </div>