<div class="row-fluid">
    <div class="span12">
        <div class="right">
            <div class="navbar">
                <div class="nav-no-collapse">
                    <ul class="nav">
                        <!--<li><a href="<?php //echo $this->router->class.'/nuevo';?>"><span class="icon16 entypo-icon-plus-2"></span> Nueva Foto Slider</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="box">
            
            <div class="content noPad">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tamaño</th>
                        <th>Dimensiones</th>
                        <th>Activo Inactivo</th>
                        
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            Slider1
                        </td>
                        <td>
                            300 kb
                        </td>
                        <td>
                            600-250px
                        </td>
                        <td>
                               <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        </td>
                        <td>
                            <a href="slider/editar/5"><img src="images/editar.png"></a>
                            <a href="#"><img src="images/borrar.png"></a>
                        </td>
                    </tr>    
                    <?php //foreach($q->result() as $r) : ?>
                        <!--<tr >
                            <td><?php //echo $r->link; ?></td>
                            <td>
                            <ul id="itemContainer" class="galleryView center" >
                                <li class="animated fadeInUp">
                                    <a href="../uploads/sliders/<?php //echo $r->foto; ?>" rel="prettyPhoto" title="">
                                        <img src="../uploads/sliders/<?php //echo $r->thumbnail; ?>" data-original="../uploads/sliders/<?php //echo $r->thumbnail; ?>" alt="" style="display: inline;">
                                    </a>
                                </li>
                            </ul>
                            </td>
                            <td><?php //dropdown_acciones($r->id,$this->router->class) ?></td>
                            
                        </tr>-->
                    <?php //endforeach ?>
                    </tbody>
                </table>
            </div>
        </div><!-- End .box -->
    </div><!-- End .span6 -->
</div><!-- End .container-fluid -->
