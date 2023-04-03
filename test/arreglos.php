<?php

//array (arreglo) mas senvillo
$platos = ["ceviche", "arroz con pollo", "carapulcra", "aji gallina", "lomo saltafo"]
echo $platos [0];
echo $platos [1]

$amigos = array("jose", "joel", "lorenzo","cesar");
echo $amigos [1]; //segundo

//array multi dimensional
$aplicaciones =[
  ["Photoshop", "corel draw", "premier", "muse"];
  ["Vscode", "xampp", "netbeans","erwin", "notepad++"]
  ["excel","sap", "autocad", "powerbi","project"]
]

//obtener VSCODE
echo $aplicaciones[1][0]; //1= idice arreglo, 0 = indic de largo
//obtener muse
echo $aplicaciones[0][3]; 
//obtener sap
echo $aplicaciones[2][1]

//hasta aqui, cualquier de los arreglos anteriores utiliza un indice
//arreglos asociativos... - key -> valvue
$datospersonales = [
  "apellidos"     =>    "Quesada Nolasco",
  "nombres"       =>    "Pool",
  "especialidad"  =>    "ing. software con inteligencia artificial",
  "email"         =>    "1377060@senati.pe"
  "edad"          =>    38,
  "estacasado"    =>    true,
  "peliculas"     =>    ["EndGame", "Pinocho", "IronMan"]
],

//Obtener la especialidad
echo $datospersonales["especialidad"],

//Obtener la primera de tus peliculas favoritas
echo $datospersonales["peliculas"][0]
