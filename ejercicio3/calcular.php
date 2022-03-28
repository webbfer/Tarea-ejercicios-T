<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

	<form action="../index.php">
	<input type="submit" name="btn" value="" class="btn2">
</form>
	<center>

	<label class="letra">
			<form method="POST" action="ejercicio3.php">
            <center><h2>Calcular salario</h2></center>		
	<h3>Nombre del Empleado:</h3>
<input type="text" name="nom" class="cajas"><br>
<h3>Horas trabajadas:</h3>
<input type="text" name="horas" class="cajas"><br>

<input type="submit" name="btnC" value="" class="btn">
		</form>
            <?php
            if (isset($_POST['btnC'])) {

	        $Nombre = $_POST['nom'];
	        $Hora = $_POST['horas'];
	        $pagoN=0;
	        $pagoD=0;
	        $pagoT=0;
            if ($Hora <= 50) {
	        $pagoN = $Hora*20; 

}
             if ($Hora >= 56) {
	        $pg1=$Hora-50;
	        $pg2=$Hora-$pg1;
	        $pagoN=$pg2*20;
	        $horaD=$Hora-50;
	        $pagoD = $horaD*20*4;
}
            if ($Hora >= 47) {
	        $horaT=$Hora-56;
	        $pagoT = $horaT*15*6;

}

           echo "Nombre del empleado : $Nombre<br>";
           echo "----Detalle de pago----<br>";
           echo "Horas Trabajadas:<br>";
           echo "Pago de Horas Normales:$$pagoN <br>";
           echo "Pago de Horas Dobles :$$pagoD <br>";
           echo "Pago de horas Triples :$$pagoT <br>";

}

?>
            </li>
        </ul>
    </form>
</body>
</html>