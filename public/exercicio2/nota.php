<?php
$nota = 8;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovaçao</title>
</head>
<body>
    <?php
       if($nota >= 7){
        echo "aluno aprovado";
       }
       else{
        echo "aluno reprovado";
       }
       ?>
    
    
</body>
</html>

