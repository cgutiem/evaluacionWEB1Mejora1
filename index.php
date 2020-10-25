<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <link rel="stylesheet" href="estilos.css">  

</head> 
<body>

<html>
   <head>
     <title>  </title>
 </head>

 <body>

 <form method ="post" action =""><br>  
 <h1> temperatura media </h1>
 ingrese temperatura max <br>
 <input type = "text" name ="numero1"><br>
 ingrese  la temperatura min:<br>
 <input type = "text" name = "numero2"><br>
 <input type ="submit" value ="Calcular"><br>
 </form>                   


</body>


<?php      
 $numero1 = $_POST['numero1'];
 $numero2 = $_POST['numero2'];
  $suma = $numero1 + $numero2  ;
  $tempmedia = $suma / 2 ;
  echo "la temperatura media de es :".$tempmedia;     


?>                 


 <form action="calcular.php" method="post">
      <h1>Calcular pedido</h1>
      <label for="">Producto: </label>
      <select name="producto" id="">
        <option value="Arroz">Arroz</option>
        <option value="Leche">Leche</option>
        <option value="Azúcar">Azúcar</option>
        <option value="Yogurt">Yogurt</option>
      </select>
      <label for="">Precio: </label>
      <input type="text" name="precio">
      <label for="">Cantidad: </label>
      <input type="text" name="cantidad">
      <input type="submit" value="Calcular">
    </form>

</body>



    


</html>