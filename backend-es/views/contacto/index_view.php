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
            <div class="title">
                <h4>
                    <span class="icon16 icomoon-icon-equalizer-2"></span>
                    <span><?php echo $this->router->class ?></span>
                </h4>
                <a href="#" class="minimize">Minimizar</a>
            </div>
            <div class="content noPad">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($q->result() as $r) : ?>
                        <tr >
                            <td><?php echo $r->titulo; ?></td>
                            <td>
                              <?php echo $r->email;?>
                            </td>
                            <td>
                                <div class="box-form right">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                        <span class="icon16 icomoon-icon-cog-2"></span>
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu dpmw">
                                        <li><a href="<?php echo $this->router->class;?>/editar/<?php echo $r->id; ?>"><span class="icon-pencil"></span> Editar</a></li>
                                        <li><a href="#" onclick="eliminar(<?php echo $r->id;?>,'<?php echo $this->router->class;?>')"><span class="icon-pencil"></span> Borrar</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div><!-- End .box -->
    </div><!-- End .span6 -->
</div><!-- End .container-fluid -->
