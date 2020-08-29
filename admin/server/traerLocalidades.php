<?php
include_once 'class_sql.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = new Sql;
$columnas = $sql->showColumnNames('localidad');
        
$array = array('provincia_id'=>$id);
$select = $sql->selectTablaNew('localidad',$array,'nombre','ASC','9999');

$null = is_null($select);
if($null==true){
    echo "[]";
}else{
$sql->jsonConverter($select); 
}

