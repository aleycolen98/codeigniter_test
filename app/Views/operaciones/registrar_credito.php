<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de creditos</title>
</head>
<body>
    <form action="<?php echo site_url('/addcredito'); ?>" method="post">
        <label for="">Cuenta: </label>
        <select name="cuenta" id="">
            <option value="">Seleccione la cuenta:</option>
            <?php foreach($cuentas as $cuenta):?>
                <?php echo "<option value='".$cuenta['id']."'>".$cuenta['numero_cuenta'].$cuenta['tipo_cuenta']." </option>";?>
            <?php endforeach ?>
        </select>
        <br><br>
        <label for="">Número de creditos: </label>
        <input type="text" name="numero_creditos" placeholder="Número de creditos">
        <br><br>
        <label for="">Monto de credito: </label>
        <input type="number" name="monto_creditos" placeholder="Monto de credito">
        <br><br>
        <label for="">Monto de capital: </label>
        <input type="number" name="monto_capital" placeholder="Monto de capital">
        <br><br>
        <label for="">Monto de IVA: </label>
        <input type="number" name="monto_iva" placeholder="Monto de IVA">
        <br><br>
        <input type="submit" name="subir_form3" value="Guardar credito">
    </form>

    
</body>
</html>
