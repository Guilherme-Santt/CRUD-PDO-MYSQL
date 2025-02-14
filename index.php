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
        <form action="novo-info.php" class="form-container" method="post">
            <div class="tittle-container">
                <h1>Cadastro de informações</h1>
            </div>
            <ul>
                <li>
                    <Label>E-mail:</Label>
                    <input type="text" name="email">
                </li>
                <li>
                    <Label>CPF....:</Label>
                    <input type="text" name="cpf">
                </li>
                <li>
                    <Label>Nome.:</Label>
                    <input type="nome" name="nome">
                </li>
                <button type="submit" id="btn">Enviar</button>
            </ul>
        </form>
        <div class="form-result">
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
                    <th>Nome</th>
                </tr>
                <tr>
                    <td><?php echo $dados['nome']?></td>
                    <td><?php echo $dados['email']?></td>
                    <td><?php echo $dados['cpf']?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</body>

</html>