<?php
$producto = $_POST ['producto'];
$precio = $_POST ['precio'];  
$cantidad = $_POST  ['cantidad'];  
$total = $precio * $cantidad;
$impuesto = $total * 0.19   


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factura</title>
</head>
<body>
    <h2>total a pagar </h2>
    <p>producto <?php echo $producto;?> </p>
    <p>precio <?php echo $precio;?> </p>
    <p>cantidad <?php echo $cantidad;?> </p>
    <p>total <?php echo $total;?></p2>
    <p>iva <?php echo $impuesto;?></p>
</body> 
</html>	
