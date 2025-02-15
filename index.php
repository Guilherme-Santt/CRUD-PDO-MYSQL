<?php

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
    <header class="form-header">
        <a href="form-info.php">Cadastre uma info</a>
    </header>
    <div class="container">
        <div class="form-container">
            <?php
            include('db-connect.php');  
            $infos = $connect->query('SELECT * FROM infos;')->fetchAll(\PDO::FETCH_ASSOC);
            foreach($infos as $dados): 
                if($dados === 0): ?>
            <p>Nenhum dado encontrado</p>
            <?php endif; ?>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Remover</th>
                </tr>
                <tr>
                    <td><?= $dados['nome']?></td>
                    <td><?= $dados['cpf']?></td>
                    <td><?= $dados['email']?></td>
                    <td><a href="form-editar-info.php?id=<?= $dados['id']?>">Editar</td>
                    <td><a href="remover.php?id=<?= $dados['id']?>">Remover</td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</body>

</html>