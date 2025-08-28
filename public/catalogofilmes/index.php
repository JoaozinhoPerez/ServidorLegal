<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        div {
            text-align: center;
            align-items: center;

        }
       
        .texto {
            box-shadow:  5px 5px 5px 5px;
            border-radius: 10px;
            align-items: center;
            text-align: center;
            width: 300px;
            height: 200px;
            padding: 20px;
            margin: 0 auto;

           
        }
        button{
            color: white;
            background-color: black;
        }
    
    </style>
</head>

<body>
        <div style="text-align: center">
            <?php include "cabecalho.php"; ?><br>
            <div class="texto">
                <form action="index.php" method="post">
                    <label for="nome">Nome do Filme</label><br>
                    <input type="text" name="nome"><br>
                    <label for="genero">Gênero do filme: (ex: drama, terror, comédia...)</label><br>
                    <input type="text" name="genero"><br><br>
                    <button>Enviar</button><br>
                </form>
            </div><br>
            <?php
            $nome = $_POST["nome"];
            $genero = $_POST["genero"];
            ?>
            <p><?php echo "nome: $nome ($genero)"; ?></p>
            <?php
            if ($genero == "terror") {
                echo "<h2 style='color:red;'> Atenção, filme de terror </h2>";
            } elseif ($genero == "comédia") {
                echo "<h2 style='color:green;'> Você vai dar boas risadas </h2>";
            }
            ?><br>

            <?php include "rodape.php"; ?>
        </div>
    
</body>

</html>