<?php
include('db-connect.php');

if(count($_POST)){

$nome  = $_POST['nome'];
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$cpf   = $_POST['cpf'];

if ($email === false || empty($email) || empty($nome) || empty($cpf)) {
    header('Location:/?sucesso=0');
    exit();
} else {
    $sql = 'INSERT INTO infos (email, cpf, nome) value (?, ?, ?)';
    $statement = $connect->prepare($sql);
    $statement->bindValue(1, $email);
    $statement->bindValue(2, $nome);
    $statement->bindValue(3, $cpf);

    if ($statement->execute() === false) {
        header('Location: index.php?sucesso=0');
    } else {
        header('Location: index.php?sucesso=1');
    }

}


}   
?>