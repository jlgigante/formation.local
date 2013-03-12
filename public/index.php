<?php

//var_dump($_SERVER);
//ecriture possible avec un entier
${0} = 'index';

//utilisation de fonction a travers une variable
$test = 'date';
var_dump($test('Y-m-d H:i:s'));

//copie par reference
$origine = 10;
$copie =& $origine;
$copie++;

var_dump($copie ,$origine);

//pour détruire la reference
//unset($origine);
$origine = 3;
var_dump($copie, $origine);

//Les constantes
//concatenation possible
//define('APP_ENV', 'dev');
//concatenation impossible
const APP_ENV = 'dev';//
echo APP_ENV;
//
$param = 'PDO::ERRMODE_EXCEPTION';
var_dump(defined($param), constant($param));


//
$val = 012;
//(1x8)+2 hochtal ??? base de 8
var_dump($val);

//
$user = [
    'firstName' => 'JeanLuc', 
    'lastName' => 'Gigante',
];
//proction de variable
echo "Bonjour {$user['firstName']} !";


