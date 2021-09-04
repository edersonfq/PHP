<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//echo "seu nome é " .$nome. " e sua idade é " .$idade;

if (empty($nome)){
    echo "O nome nao pode ser vazio!";
    return;
}
if (strlen($nome) < 3){
    echo "O nome deve conter mais de 3 caracteres!";
    return;
}
if (strlen($nome) > 10){
    echo "O nome nao pode conter mais que 40 caracteres!";
    return;
}
if(!is_numeric($idade)){
    echo "digite apena numeros";
    return;
}




if($idade >=6 && $idade <=12){
    echo ' infantil';
}else if ($idade >=13 && $idade <=18){
    echo ' adolescente';
}else{
    echo ' adulto';
}