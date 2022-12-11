
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cuentas</title>
</head>
<body>
   

    <form action="<?php echo site_url('/addcuenta'); ?>" method="post">
        <label for="">Cliente: </label>
        <select name="client" id="">
            <option value="">Seleccione el cliente</option>
            <?php foreach($clientes as $cliente):?>
                <?php echo "<option value='".$cliente['id']."'>".$cliente['apellido_paterno'].$cliente['apellido_materno'].$cliente['nombre'].$cliente['numero_cliente']." </option>";?>
            <?php endforeach ?>
        </select>
        <br><br>
        <label for="">Numero de cuenta: </label>
        <input type="text" name="numero_cuenta" placeholder="Numero de cuenta">
        <br><br>
        <label for="">Tipo de cuenta: </label>
        <select name="tipo_cuenta" id="">
            <option value="referencia">referencia</option>
            <option value="ct">ct</option>
            <option value="pagare">pagare</option>
        </select>
        <br><br>
        <input type="submit" name="subir_form2" value="Guardar cuenta">
    </form>
    
</body>
</html>
