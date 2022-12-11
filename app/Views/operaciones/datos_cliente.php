<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clientes</title>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Num. Cliente</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientes as $cliente):?>
                <tr class="">
                    <td><?=$cliente['nombre']?></td>
                    <td><?=$cliente['apellido_paterno']?></td>
                    <td><?=$cliente['apellido_materno']?></td>
                    <td><?=$cliente['numero_cliente']?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>