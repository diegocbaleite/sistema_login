<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg text-center" style="width: 350px;">
        <h2>Bem-vindo, <span class="text-primary"><?php echo $_SESSION["usuario"]; ?></span>!</h2>
        <p class="mt-3">Você está logado no sistema.</p>
        <a href="logout.php" class="btn btn-danger w-100">Sair</a>
    </div>
</div>

</body>
</html>
