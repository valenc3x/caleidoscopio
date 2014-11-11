<div class="content">
    <div class="well">
        <div class="container">
            <table class="datatable">
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
                            <td> <?= $reg->name ?> </td>
                            <td> <?= $reg->last_name ?> </td>
                            <td> <?= $reg->email ?> </td>
                            <td> <?= $reg->university ?> </td>
                            <td> <?= $reg->Ponencia ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

