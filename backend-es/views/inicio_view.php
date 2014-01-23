
<div class="row-fluid">

                            <div class="span12">

                                <div class="widget_wrapper">

                                    <div class="widget_header">
                                        <h3 class="icos_table">Dominios</h3>
                                    </div>

                                    <div class="widget_content no-padding">
                                        <table width="100%" cellspacing="0" cellpadding="0" class="default_table">
                                            <thead>
                                            <tr>
                                                <th>Host</th>
                                                <th>Usuario</th>
                                                <th>Password</th>
                                                <th>Dpanel user</th>
                                                <th>Dpanel pass</th>
                                                <th>Aciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
    foreach($q->result() as $r):
        ?>
    <tr class="odd gradeX">
        <td><?php echo $r->host;?></td>
        <td><?php echo $r->usuario;?></td>
        <td><?php echo $r->password;?></td>
        <td class="center"><?php echo $r->dpanel_user;?></td>
        <td class="center"><?php echo $r->dpanel_pass;?></td>
        <td class="center">

            <div class="btn-group">
                <a href="#" class="btn"><i class="icon-cog"></i> Acciones</a>
                <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></a>
                <ul class="dropdown-menu widget_option_dropdown settings_dropdown">
                    <li><a href="dominios/ver/<?php echo $r->id; ?>"><i class="icon-eye-open"></i> Ver</a></li>
                    <li><a href="dominios/editar/<?php echo $r->id; ?>"><i class="icon-plus"></i> Editar</a></li>
                    <li><a href="dominios/borrar/<?php echo $r->id; ?>"><i class="icon-remove"></i> Borrar</a></li>
                </ul>
            </div>

        </td>
    </tr>
        <?php
        endforeach;
        ?>
                                            <!--
    <tr class="even gradeC">
        <td>Trident</td>
        <td>Internet
            Explorer 5.0</td>
        <td>Win 95+</td>
        <td class="center">5</td>
        <td class="center">C</td>
        <td class="center">Acciones</td>
    </tr>
    <tr class="odd gradeA">
        <td>Trident</td>
        <td>Internet
            Explorer 5.5</td>
        <td>Win 95+</td>
        <td class="center">5.5</td>
        <td class="center">A</td>
        <td class="center">Acciones</td>
    </tr>
    <tr class="even gradeA">
        <td>Trident</td>
        <td>Internet
            Explorer 6</td>
        <td>Win 98+</td>
        <td class="center">6</td>
        <td class="center">A</td>
        <td class="center">Acciones</td>
    </tr>
    <tr class="odd gradeA">
        <td>Trident</td>
        <td>Internet Explorer 7</td>
        <td>Win XP SP2+</td>
        <td class="center">7</td>
        <td class="center">A</td>
        <td class="center">Acciones</td>
    </tr>
    <tr class="even gradeA">
        <td>Trident</td>
        <td>AOL browser (AOL desktop)</td>
        <td>Win XP</td>
        <td class="center">6</td>
        <td class="center">A</td>
        <td class="center">Acciones</td>
    </tr>
                                            -->


                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td>Host</td>
                                                <td>Usuario</td>
                                                <td>Password</td>
                                                <td>Dpanel user</td>
                                                <td>Dpanel pass</td>
                                                <td>Acciones</td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div><!-- widget_wrapper end -->
                            </div>
                        </div>
