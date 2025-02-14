<?php

try{
    $connect = New PDO('mysql:host=localhost;dbname=infos-pacientes', 'root', '');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $erro){
    echo 'Erro na conexão=>' . $erro->getMessage();
}
?>