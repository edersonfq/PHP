<?php
$categorias = ['infantil','adolescente','adulto'];
$categorias [] = 'idoso';

//print_r ($categorias);

$nome = 'eduardo';
$idade = 8;

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O nadador " .$nome. " de idade " .$idade. " faz parte da categoria " .$categorias[$i];
    }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
            echo "O nadador " .$nome. " de idade " .$idade. " faz parte da categoria " .$categorias[$i];
    }
}else{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador " .$nome. " de idade " .$idade. " faz parte da categoria " .$categorias[$i];
    }
}

//var_dump($nome);
//var_dump($idade);
/*
if($idade >=6 && $idade <=12){
    echo 'infantil';
}else if ($idade >=13 && $idade <=18){
    echo 'adolescente';
}else{
    echo 'adulto';
}
*/



?>
