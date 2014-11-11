<?php $this->load->helper('form'); ?>



<div class="content">
    <div class="well">
        <div class="container">
            <div class="text">
                <h2> Registro a Ponencias</h2>
                <p> Registrate para asistir a alguna de las ponencias del evento </p>
                <p class="help-block">Todos los campos son obligatorios.</p>
            </div>
            <form class="form-horizontal" role="form" action="" method="POST">
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
                    <label for="">Universidad</label>
                    <p> <?= form_error('university') ?> </p>
                    <input name="university" value="<?= set_value('university');?>" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="">Conferencias</label>
                    <p> <?= form_error('speakers[]') ?> </p>
                    <select name="speakers[]" class="form-control chosen-select" data-placeholder="Selecciona las conferencias" multiple>
                        <?php foreach($speakers as $person): ?>
                            <option value="<?= $person->id ?>"> <?= $person->name." - ".$person->title ?> </option>
                        <?php endforeach; ?>
                    </select>
                    <p class="help-block">Selecciona una o mas ponencias.</p>
                    <p class="help-block">Se te confirmará por correo tu asistencia.</p>
                </div>
                <button type="submit" class="btn btn-default">Enviar Registro</button>
            </form>
        </div>
    </div>

</div>
