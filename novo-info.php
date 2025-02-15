<?php
include('db-connect.php');

if(count($_POST)){

    $nome  = $_POST['nome'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $cpf   = $_POST['cpf']; 

    if ($email === false || empty($email) || empty($nome) || empty($cpf)) {
        header('Location: form-info.php?sucesso=0');
        exit();
    } else if(strlen($cpf) > 11 || strlen($nome) > 10){ 
        header('Location: form-info.php?sucesso=0');
        exit();
    } else {
        include('db-connect.php'); 
        $sql = 'INSERT INTO infos (email, cpf, nome) value (?, ?, ?)';
        $statement = $connect->prepare($sql);
        $statement->bindValue(1, $email);
        $statement->bindValue(2, $cpf);
        $statement->bindValue(3, $nome);

        if ($statement->execute() === false) {
            header('Location: form-info.php?sucesso=0');
            exit(); 
        } else {
            header('Location: index.php?sucesso=1');
            exit();
        }
    }
}   
?>