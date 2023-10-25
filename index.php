<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css.css">
    <title>Cadastro PHP</title>
</head>
<body>
    <main>
        <div class="box">
            <form action="cadastro.php" method="POST">
                <div class="title">
                    <h2>Cadastro PHP</h2>
                </div>
                <div class="group">
                    <input type="text" name="nome" placeholder="Nome" required>
                </div>
                <div class="group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="group">
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <div class="box-button">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </main>
</body>
</html>