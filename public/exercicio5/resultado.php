<?php
$nome = $_POST["Nome"];
$email = $_POST["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro realizado</h1>
    <?php echo $nome; ?><br>
    <?php echo $email; ?>
</body>
</html>