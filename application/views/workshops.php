<div class="content">
    <div class="workshops">
        <div class="container">
            <h2>Mesas de Trabajo</h2>
            <p class="help-block">Programa sujeto a cambios</p>
        </div>
        <?php foreach ($workshops as $each): ?>
            <div class="container">
                <h4 class="each-name"> <?= $each->name ?> </h4>
                <?php
                    /*
                <div class="description">
                    <?= $each->description ?>
                </div>
                    */
                 ?>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</div>
