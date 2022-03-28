<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números múltiplos</title>
    <link rel= "stylesheet" href= "css/style.css">

</head>
<body>

    <h2>Números múltiplos <br>De 2, 3, 5 y 7</br></h2>
    <form action= "ejercicio4.php" method= "get">

        <ul>
            <li>
            <label for="numero">Ingrese un Número:</label>
            <input type="number" name="numero" id= "numero"
            min="1" max="while" required="" placeholder="1, 2, 3...">

            </li>
           
            <li class="button">
                <button type= "submit">Enviar</button>
                <button type="reset">Limpiar</button>
            </li>

             
                <?php
                if(isset($_GET["numero"])){
                    //La funcion isset evalua si 
                    //una variable esta o no definida
                    $numero = $_GET["numero"];
                    switch($numero%2==0){
                        case 1 :
                            echo "<br>El número $numero es múltiplo de 2</br>";
                            break;

                        
                    }
                 
                }
                if(isset($_GET["numero"])){

                    $numero = $_GET["numero"];
                    switch($numero%3==0){
                        case 3 :
                            echo "<br>El número $numero es múltiplo de 3</br>";
                            break;

                            
                    }
                }

                if(isset($_GET["numero"])){

                    $numero = $_GET["numero"];
                    switch($numero%5==0){
                        case 5 :
                            echo "<br>El número $numero es múltiplo de 5</br>";
                            break;

                            
                    }
                }

                if(isset($_GET["numero"])){

                    $numero = $_GET["numero"];
                    switch($numero%7==0){
                        case 7 :
                            echo "<br>El número $numero es múltiplo de 7</br>";
                            break;

                            
                    }
                }

                if(isset($_GET["numero"])){

                    $numero = $_GET["numero"];
                    switch($numero%2!==0&&$numero%3!==0&&$numero%5!==0&&$numero%7!==0){
                        case 8 :
                            echo "<br>El número $numero No es múltiplo de ninguno de ellos</br>";
                            break;
                    }
                    
                }
            ?>
        
         
     </form>  
            

            
        </ul>

</body>
</html>