<?php
require_once "proteger.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>

<body>
    <h1>Clínica Veterinária</h1>
    <p>
        Usuário logado:
        <?php echo $_SESSION["usuario_nome"]; ?>
    </p>
    <a href="tutores.php">Tutores</a>
    <a href="pets.php">Pets</a>
    <a href="agendamentos.php">Agendamentos</a>
    <a href="logout.php">Sair</a>
</body>

</html>