<div class="content">
    <div class="speakers">
        <div class="container">
            <h2> Conferencistas</h2>
            <p class="help-block">Programa sujeto a cambios</p>
        </div>
        <?php $count = 0; ?>
        <?php foreach ($speakers as $person): ?>
            <div class="media">
                <div class="container">
                    <h4 class="person-name"> <?= $person->name ?> </h4>
                    <div class="row">
                        <a class="<?= ($count%2 == 0)?'pull-left':'pull-right' ?> col-sm-5">
                            <img class="media-object col-sm-12" src="/webroot/img/fotos/<?= $person->photo ?>" alt="">
                        </a>
                        <div class="media-body col-sm-7">
                            <h2> <?= $person->title ?> </h2>
                            <div class="description row">
                                    <?= $person->description ?>
                            </div>
                            </br>
                            <div class="bio row">
                                    <?= $person->bio ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $count++ ?>
            <hr>
        <?php endforeach; ?>
    </div>
</div>
