<?php $this->load->helper('form'); ?>



<div class="content">
    <div class="well">
        <div class="container">
            <div class="text">
                <h2> Registro a Mesas de Trabajo </h2>
                <p> Registra una propuesta para participar en una de las mesas de trabajo que se realizarán durante el evento </p>
                <p class="help-block">Todos los campos son obligatorios.</p>
            </div>
            <form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nombre(s)</label>
                    <p> <?= form_error('name') ?> </p>
                    <input name="name" value="<?= set_value('name');?>" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="">Apellidos</label>
                    <p> <?= form_error('last_name') ?> </p>
                    <input name="last_name" value="<?= set_value('last_name');?>" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="">Correo Electronico</label>
                    <p> <?= form_error('email') ?> </p>
                    <input name="email" value="<?= set_value('email');?>" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="">Teléfono</label>
                    <p> <?= form_error('telephone') ?> </p>
                    <input name="telephone" value="<?= set_value('telephone');?>" class="form-control" type="text">
                    <p class="help-block">Solo numeros.</p>
                </div>
                <div class="form-group">
                    <label for="">Universidad</label>
                    <p> <?= form_error('university') ?> </p>
                    <input name="university" value="<?= set_value('university');?>" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="">Mesas de Trabajo</label>
                    <p> <?= form_error('workshops[]') ?> </p>
                    <select name="workshops[]" class="form-control chosen-select-limit" data-placeholder="Selecciona..." multiple>
                        <?php foreach($workshops as $each): ?>
                            <option value="<?= $each->id ?>"> <?= $each->name ?> </option>
                        <?php endforeach; ?>
                    </select>
                    <p class="help-block">Selecciona hasta dos mesas de trabajo.</p>
                    <p class="help-block">Se te confirmará por correo tu asistencia.</p>
                </div>
                <?php
                /*
                <div class="form-group">
                    <label for="">Archivo</label>
                    <?php if(isset($file_errors)): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <?= $file_errors; ?>
                        </div>
                    <?php endif; ?>
                    <input name="document" value="<?= set_value('document');?>" type="file">
                    <p class="help-block">Formato .doc, .docx, .pdf</p>
                    <p class="help-block">Tamaño máximo del archivo: 2MB</p>
                </div>
                */
                 ?>
                <button type="submit" class="btn btn-default">Enviar Registro</button>
            </form>
        </div>
    </div>

</div>
