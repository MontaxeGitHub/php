<?php


// Variables (valores que pueden variar)

// Variables de tipo entero (integer)

$numero = 100;

echo $numero . ' es una variable de tipo entero';

echo '<br>';

// Variables de tipo decimal (float)

$numeroDecimal = 12.5;

echo $numeroDecimal . ' es una variable de tipo decimal';

echo '<br>';

// Variables de tipo texto (string)

$nombre = 'Ana';

echo $nombre . ' es  una variable de tipo texto';

echo '<br>';

// Variables de tipo caracter (char)

$vocal = 'a';

echo $vocal . ' es una variable de tipo caracter';

echo '<br>';


// Variables de tipo booleano - valor de verdad (boolean)

$pagado = true;

if($pagado){
    echo 'El recibo está pagado';
}
else{ 
    echo 'El recibo no está pagado';
}

echo '<br>';

// Constantes  (valores fijos, no pueden variar)

define('PI', 3.1416);

echo PI . ' es una constante';

echo '<br>';

// Arreglos - arrays (almacenan conjuntos de valores)

// a ) Arrays indexados

$nombres = ['Pepe', 'Luis', 'Emilio'];

echo 'El primer elemento del array es ' . $nombres[0] . '<br>';
echo 'El segundo elemento del array es ' . $nombres[1] . '<br>';
echo 'El tercer elemento del array es ' . $nombres[2] . '<br>';

// a ) Arrays asociativos

$empleado = [
    'nombre' => 'Luis',
    'edad' => 23,
    'email' => 'luis@es.es'
];

echo 'El nombre del empleado es ' . $empleado['nombre'] . '<br>';
echo 'La edad del empleado es ' . $empleado['edad'] . '<br>';
echo 'El email del empleado es ' . $empleado['email'] . '<br>';

















