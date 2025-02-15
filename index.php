<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="styles/style.css">
<script src="./script/main.js" defer></script>
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


<body>
    <div class="container">
        <div>
            <a href="form-info.php" id="btn">Cadastre uma info</a>
        </div>
        <div class="form-container">
            <div>
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
    </div>
    <?php 
    $suc = filter_input(INPUT_GET, 'sucesso', FILTER_VALIDATE_INT);
    if(isset($suc)): ?>
    <script>
    Swal.fire({
        position: "center",
        icon: "success",
        title: `Tudo certo por aqui :D`,
        showConfirmButton: false,
        timer: 2000
    });
    </script>
    <?php endif;?>
</body>

</html>