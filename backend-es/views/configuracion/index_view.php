
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <?php titulo_seccion($this->router->class); ?>
            <div class="content noPad">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Valor</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($q->result() as $r) : ?>
                        <tr >
                            <td><?php echo $r->descripcion; ?></td>
                            <td><?php echo $r->string; ?></td>
                            <td><?php echo $r->txtstatus; ?></td>
                            <td><?php dropdown_acciones($r->id,$this->router->class, FALSE,FALSE) ?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div><!-- End .box -->
    </div><!-- End .span6 -->
</div><!-- End .container-fluid -->
