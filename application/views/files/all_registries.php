<div class="content">
    <div class="well">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Email</td>
                        <td>Universidad</td>
                        <td>Conferencia</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($registries as $reg): ?>
                        <tr>
                            <tr> <?= $reg->name ?> </tr>
                            <tr> <?= $reg->last_name ?> </tr>
                            <tr> <?= $reg->email ?> </tr>
                            <tr> <?= $reg->univesity ?> </tr>
                            <tr> <?= $reg->Ponencia ?> </tr>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
