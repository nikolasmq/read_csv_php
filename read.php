<?php

/**
 * Función read_csv : creada para leer archivos csv y poder invocar el sistema de matricula en moodle existente.
 * 
 * Recibe [$file] = Nombre del archivo que contiene los numeros de orgen a matricular
 * No retorna ya que llama a la función de matricula en moodle desarrollada en el wordpress
 */
function read_csv($file){
    if (($open = fopen($file, "r")) !== FALSE) 
  {
    $array = [];
    while (($data = fgetcsv($open, 1000)) !== FALSE) 
    {        
      $array[] = $data; 
    }
  
    fclose($open);
  }
  echo "<pre>";
  //To display array data
  foreach($array as $row){
      var_dump($row[0]);
  }
  echo "</pre>";
}
read_csv("ordenes.csv");