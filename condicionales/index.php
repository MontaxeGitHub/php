<?php

//CONDICIONALES

//CONDICIONAL SIMPLE

// IF - ELSE 
// Operadores de comparación 
//     >  (mayor que)
//     <  (menor que)
//     >= (mayor o igual que)
//     <= (menor o igual que) 
//     == (igual que)

$edad = 60;

if($edad > 18){
    echo '<h1>Eres mayor de edad</h1>';
}else{
    echo '<h1>Eres menor de edad</h1>';
}

$nombre = 'Ana';

if($nombre == 'Ana'){
    echo '<h1>El nombre es Ana</h1>';
}
else{
    echo '<h1>El nombre no es Ana</h1>';
}

// CONDICIONAL MÚLTIPLE

if($edad >= 18 && $edad < 35){
    echo '<h1>Eres mayor de edad</h1>';
}
else if($edad >= 35 && $edad <= 60){
    echo '<h1>Eres madurito</h1>';
}
else{
    echo 'Eres tirando a anciano';
}


echo '<br>';

$color = 'rojo';

switch($color){

    case 'rojo';
        echo 'El color es rojo';
        break;
    case 'amarillo';
        echo 'E color es amarillo';
        break;

    case 'azul';
        echo 'El color es azul';
        break;

    default;
        echo 'El color no es ni rojo ni amarillo ni azul';
        break;
 
}

echo '<br>';

// Operadores lógicos

// && - Y lógico
// || - O lógico

$minusvalia = '55%';
$edad = 40;

if($minusvalia >= 33 || $edad > 50){
    echo '<h1>Recibes una subvención</h1>';
}
else{
    echo '<h1>No recibes subvención</h1>';
}








