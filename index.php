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
        </div>
    </div>
</body>
</html>