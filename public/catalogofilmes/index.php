
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php include "cabecalho.php"; ?>
   <form action="index.php" method="post">
    <label for="nome">Nome do Filme</label><br>
    <input type="text" name="nome" ><br>
    <label for="genero">Gênero do filme: (ex: drama, terror, comédia...)</label><br>
    <input type="text" name="genero" ><br><br>
    <button>Enviar</button><br>
   </form>
<?php
$nome = $_POST["nome"];
$genero = $_POST["genero"];
?>
<p><?php echo "nome: $nome ($genero)"; ?></p>
<?php 
if($genero == "terror"){
    echo "<h2 style='color:red;'> Atenção, filme de terror </h2>";
    
}elseif($genero == "comédia"){
    echo "<h2 style='color:green;'> Você vai dar boas risadas </h2>";
}
?>

    <?php include "rodape.php"; ?>

</body>
</html>
