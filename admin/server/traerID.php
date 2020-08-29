<?php
include_once 'class_sql.php';

$id = "no";

$sql = new Sql;
$columnas = $sql->showColumnNames('pedidos');

if ($id =="si") {
    $array = array('mostrar'=>'si');    
    $select = $sql->selectTablaNew('pedidos',$array,'id','DESC','99999');
    //echo "entre en si el ID esta vacio";
}else{
    if($id=="no"){
        $select = $sql->selectTablaNew('pedidos','no','id','DESC','99999');
         //echo "entre en si el ID el igual a no";
    }else{
        
        if (is_numeric($id)){
            $array = array('id'=>$id);
            $select = $sql->selectTablaNew('pedidos',$array,'id','DESC','99999');
        }
    }
}
$null = is_null($select);
if($null==true){
    echo "[]";
}else{
/*echo "<pre>";
print_r($select);
echo "</pre>";*/
}

?>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Email</td>
    </tr>
    <?php
    for ($i=0;$i<count($select);$i++){
    ?>
    <tr>
        <td><?php echo $select[$i]['id'];?></td>
        <td><?php echo $select[$i]['nombre'];?></td>
        <td><?php echo $select[$i]['email'];?></td>
    </tr>
     <?php
    }
    ?>
</table>