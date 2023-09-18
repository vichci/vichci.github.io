<?php 
    echo "Hola mundo";
    //creo mi primer variable
    echo"<br>";
    $variable= 5; //operación de ASIGNACIÓN

    echo "$variable"; //muestro el contenido de la variable.
    echo"<br>"; 
    var_dump($variable); //mostrar la estructura de mi caracter.
    echo"<br>";
    $variable="Hola mundo";
    var_dump($variable);
    echo"<br>";
    //operaciones aritméticas
    $numero1=5;
    $numero2=10;
    //SUMA
    echo $numero1+$numero2;
    echo"<br>";
    //RESTA
    echo $numero1-$numero2;
    echo"<br>";
    //MULTIPLICACIÓN
    echo $numero1 * $numero2;
    echo"<br>"; 
    //DIVISIÓN
    echo $numero2 / $numero1;
    echo"<br>";
    //RESTO DE UNA DIVISIÓN
    echo $numero2 % $numero1;   
    echo"<br>";
    //Grados celsius a Farenheit, (x°C * 9/5) + 32.   20°C 
    $gradoC=20;
    echo "Pasaje de Grados Celsius:20°C a Farenheit";
    echo"<br>";
    echo $gradoC * 9/5 + 32;
    echo"<br>";
    
/*P- Calcular e imprimir el perímetro y el área de un rectángulo con base de 18cm y
altura 12cm.
*/
    echo "Perimetro y área de un rectángulo de 18 y 12cm. Respectivamente en cm y cm^2";
    echo"<br>";
    $baserectangulo=18;
    $alturarectangulo=12;
    echo $baserectangulo*2  + $alturarectangulo*2 ;
    echo"<br>";
    echo $baserectangulo * $alturarectangulo;
    echo"<br>";
    /*  Calcular e imprimir el perímetro y el área de un círculo dado que su radio es de
30cm
*/
    echo "Perimetro y área de un circulo de 30cm de radio. Respectivamente en cm y cm^2";
    echo"<br>";
    $radiocirc=30;
    echo $radiocirc * pi() * 2 ;
    echo"<br>";
    echo $radiocirc * $radiocirc * pi();


?>