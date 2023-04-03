<?php

class curso{

  //atributo
  //arreglo asociativo multidimencional
  private $data =[
    [
      "id"      =>     1,
      "nombre"  =>     "AutoCAD",
      "nivel"   =>     "Básico",
      "precio"  =>     300,
      "hora"    =>     30,
    ],
    [
      "id"      =>     2,
      "nombre"  =>     "Excel",
      "nivel"   =>     "Intermedio",
      "precio"  =>     280,
      "hora"    =>     25,
    ],
    [
      "id"      =>     3,
      "nombre"  =>     "Java",
      "nivel"   =>     "avanzado",
      "precio"  =>     290,
      "hora"    =>     30,
    ],
    [
      "id"      =>     4,
      "nombre"  =>     "Python",
      "nivel"   =>     "Intermedio",
      "precio"  =>     240,
      "hora"    =>     25,
    ],
    [
      "id"      =>     5,
      "nombre"  =>     "JavaScript",
      "nivel"   =>     "Avanzado",
      "precio"  =>     350,
      "hora"    =>     40,
    ]

  ];

  //metodo
  public function listarcursos(){
    return $this->data;
  }

} 