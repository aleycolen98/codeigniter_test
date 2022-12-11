<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de cliente</title>
</head>
<body>
    <form action="<?php echo site_url('/addcliente'); ?>" method="post">
        <label for="">Nombre: </label>
        <input type="text" name="nombre" placeholder="Nombre(s)">
        <br><br>
        <label for="">Apellido Paterno: </label>
        <input type="text" name="apellido_pat" placeholder="Apellido Paterno">
        <br><br>
        <label for="">Apellido Materno: </label>
        <input type="text" name="apellido_mat" placeholder="Apellido Materno">
        <br><br>
        <label for="">Fecha alta: </label>
        <input type="date" name="fecha_alta" placeholder="Fecha alta">
        <br><br>
        <label for="">Fecha actualización: </label>
        <input type="date" name="fecha_actua" placeholder="Fecha actualización">
        <br><br>
        <label for="">Número cliente:  </label>
        <input type="number" name="num_cliente" placeholder="Número del cliente:">
        <br><br>
        <input type="submit" name="subir_form" value="Guardar datos">

    </form>
</body>
</html>