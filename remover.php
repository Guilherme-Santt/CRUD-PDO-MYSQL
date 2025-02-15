<?php
include('db-connect.php');
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$sql = 'DELETE FROM infos WHERE id = ?';
$statement = $connect->prepare($sql);
$statement->bindValue(1, $id);

if($statement->execute() === false){
    header('location: index.php?sucesso=0');    
} else {
    header('location: index.php?sucesso=1');    

};

?>