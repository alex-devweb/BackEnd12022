<?php

var_dump($_POST);

if(isset($_POST)){
    if(!empty($_POST)){
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = $_POST['nome'];
            echo $nome;
        }else{
        echo "Campo nome não existe ou não foi preenchido.";
        }
    }else{
        echo "Campos Vázios.";
    }
}else{
    echo "Erro";
}
