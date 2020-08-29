<?php
include_once 'class_sql.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

//$id = 50;

$sql = new Sql;
$select = $sql->marcos($id);


$marcos = array_column($select, 'marco');
$tamano = array_column($select, 'tamano');

for($i=0;$i<count($tamano);$i++){
    $nuevo[$i] = $tamano[$i]." ".$marcos[$i];
}


$contar_marcos = array_count_values($nuevo);
arsort($contar_marcos);
/*
echo "<pre>";
print_r($contar_marcos);
echo "</pre>";
*/

$null = is_null($contar_marcos);
if($null==true){
    echo "[]";
}else{
$sql->jsonConverter($contar_marcos); 
}
