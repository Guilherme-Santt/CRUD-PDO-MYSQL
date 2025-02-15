<?php
include('db-connect.php');  
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$infos = $connect->query('SELECT * FROM infos WHERE id = ' . intval($id))->fetch(PDO::FETCH_ASSOC);


if(count($_POST)){
    $nome  = $_POST['nome'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $cpf   = $_POST['cpf'];

    if ($email === false || empty($email) || empty($nome) || empty($cpf)) {
        header('Location:/?sucesso=0');
        exit();
    } else {
        $sql = 'UPDATE infos SET email = ?, cpf = ?, nome = ? WHERE id = ' . intval($id); 
        $statement = $connect->prepare($sql);
        $statement->bindValue(1, $email);
        $statement->bindValue(2, $cpf);
        $statement->bindValue(3, $nome);

        if ($statement->execute() === false) {
            header("Location: form-editar-info.php?id=$id");
        } else {
            header("Location: form-editar-info.php?id=$id");
        }
}
}  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="styles/style.css">

<body>
    <div class="container">
        <div class="form-container">
            <form method="post">
                <div class="tittle-container">
                    <h1>Atualização de informações: <?=$infos['nome'];?></h1>
                </div>
                <ul>
                    <li>
                        <Label>E-mail:</Label>
                        <input type="text" name="email" value='<?= $infos['email'];?>'>
                    </li>
                    <li>
                        <Label>CPF....:</Label>
                        <input type="text" name="cpf" value='<?= $infos['cpf'];?>'>
                    </li>
                    <li>
                        <Label>Nome.:</Label>
                        <input type="nome" name="nome" value='<?= $infos['nome'];?>'>
                    </li>
                    <button type="submit" id="btn">Enviar</button>
                    <a href="index.php" id="btn">Home</a>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>