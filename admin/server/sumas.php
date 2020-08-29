<?php
include_once 'class_sql.php';

$tabla = filter_input(INPUT_GET, 'tabla', FILTER_SANITIZE_SPECIAL_CHARS);
$columna = filter_input(INPUT_GET, 'columna', FILTER_SANITIZE_SPECIAL_CHARS);
$pago = filter_input(INPUT_GET, 'pago', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = new Sql;
$select = $sql->sumas($tabla,$columna,$pago);
/*
$null = is_null($select);
if($null==true){
    echo "[]";
}else{
echo $select;
}
*/