<div class="row-fluid">
    <div class="span12">
        <div class="right">
            <div class="navbar">
                <div class="nav-no-collapse">
                    <ul class="nav">
                        <li><a href="<?php echo $this->router->class.'/nuevo';?>"><span class="icon16 entypo-icon-plus-2"></span> Nuevo</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <?php titulo_seccion($this->router->class); ?>
            
            <div class="content noPad">
                <table class="table">
                    <thead>
                    <tr>
                        <!--<th>Titulo</th>-->
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($q->result() as $r) : ?>
                        <tr >
                            <td><?php echo $r->titulo; ?></td>
                            <td>
                            <ul id="itemContainer" class="galleryView center" >
                                <li class="animated fadeInUp">
                                    <a href="../uploads/galerias/<?php echo $r->foto; ?>" rel="prettyPhoto" title="">
                                        <img src="../uploads/galerias/<?php echo $r->thumbnail; ?>" data-original="../uploads/galerias/<?php echo $r->thumbnail; ?>" alt="" style="display: inline;">
                                    </a>
                                </li>
                            </ul>
                            </td>
                            <td><?php dropdown_acciones($r->id,$this->router->class) ?></td>
                            
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div><!-- End .box -->
    </div><!-- End .span6 -->
</div><!-- End .container-fluid -->
