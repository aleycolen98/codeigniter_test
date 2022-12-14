<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de cuentas</title>
</head>
<body>
<div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">No. Cuenta</th>
                    <th scope="col">Tipo de cuenta</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos2 as $cuenta):?>
                <tr class="">
                    <td><?=$cuenta['numero_cuenta']?></td>
                    <td><?=$cuenta['tipo_cuenta']?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>