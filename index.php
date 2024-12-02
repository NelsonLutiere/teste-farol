<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

#Tipos de Dados
//String 
$nome="João";
//Números Inteiros
$idade=25;
//Boleanos
$estaChovendo=true;
//Arrays
$frutas=["banana","morango","uva"];
//Array Associativo
$pessoa = [
    "nome" => "Maria",
    "idade" => 30,
    "cidade" => "Brasília"
]
//Constantes
define("PI",3.14159); 
#Operadores Aritiméticos
$soma= 5+3; //8
$subtracao= 5-3; //2
$multiplicacao= 5*3; //15
$divisao= 15/3; //5
#Operadores de Comparação
$a=5;
$b="5";
$igual = ($a == $b); //true
$identico = ($a === $b); //false
$diferente = ($a != $b); //false
$maior = ($a > 3); //true
$menor = ($a < 10); //true
#Operadores Lógicos
$and=(true&&true); //true  :  Operador '&&'/(AND) retorna "true" apenas se ambas as condições forem verdadeiras
/* 
Condição 1         Condição 2      Resulta
true               true             true
true               false            false
false              true             false
false              false            false
*/
$idade=25;
$temHabilitacao= true;
//Vamos verificar se pode dirigir
if($idade >=18 && $temHabilitacao){
    echo"Pode dirigir";}
    else {
        echo "Não Pode dirigir, você é criança ainda!";
    }




$or
$





?> 




</body>
</html>


