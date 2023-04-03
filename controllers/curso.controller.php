<?php

//incorporar al modelo
require_once "../model/curso.php";

//verificar su existe una operacion en curso
//Se verifican por: GET - POST - REQUEST 
if (isset($_POST['operacion'])){

  //Instancia de la clase curso
  $curso = new curso();

  //Identificamos la operacion: si necesita listar, insertar, eliminar, buscar, etc.
  if($_POST['operacion'] == 'listar'){
    
    //Utilizaremos el metodo definido en la clase
    $resultado = $curso->listarcursos();
    sleep(3);

    //Enviamos el resultado a la vista como un JSON
    echo json_encode($resultado);
  }

  if ($_POST['operacion'] == 'buscarID'){
    
  }

}