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
        <div class="form-container">
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
                        <input type=" text" name="cpf">
                    </li>
                    <li>
                        <Label>Nome.:</Label>
                        <input type="nome" name="nome">
                    </li>
                    <button type="submit" id="btn">Enviar</button>
                    <a href="index.php" id="btn">Home</a>
                </ul>
            </form>
        </div>
    </div>
    <?php 
    $suc = filter_input(INPUT_GET, 'sucesso', FILTER_VALIDATE_INT);
    if(isset($suc)): ?>
    <script>
    Swal.fire({
        position: "center",
        icon: "error",
        title: `Erro ao inserir`,
        showConfirmButton: false,
        timer: 2000
    });
    </script>
    <?php endif;?>
</body>

</html>