

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>descuento</title> 
</head>
<body>
<h2>Descuento</h2>
<form action="#" method="post">
<p>Numero               : <input type="text" name="precio" /></p>
<p> descuento 
  
  10%: <input type="radio" name="des" value="10" />. .
  
  30%: <input type="radio" name="des" value="30" />
</p>
<p><input type="submit" value="Ver resultado" /></p>
</form>
<?php  
function rebajas($base,$dto=0) {
         $ahorro = ($base*$dto)/100;
         $final = $base-$ahorro;
         return array($ahorro, $final);
         }
$precio=$_POST['precio'];
$descuento=$_POST['des'];			 
list($rebaja,$precioFinal)=rebajas($precio,$descuento);
echo "Precio $precio. <br/>";
echo "artículo rebajado en un $descuento%. <br/>";
echo "Este artículo está rebajado en $rebaja $. <br/>";
echo "Precio final : $precioFinal $.";
?>

</body>
</html>