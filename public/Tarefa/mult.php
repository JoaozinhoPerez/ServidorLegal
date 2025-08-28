<?php
echo "Exercicio 1 <br>";


for($i=1 ; $i<=50 ; $i++){

    if($i % 5 == 0){
        echo "Numero:   $i <br>";

        
    }

} 
?>
<?php
echo "Exercicio 2 <br>";

 $produto = [
     "Arroz" => 20,
     "Feijao" => 10 ,
     "macarrao" => 5,
     "leite" => 8,
     "pao" => 6
    ];
 
     
 foreach ($produto as $produtos => $preco){

    echo "$produtos = $preco <br>";

 }
?>
