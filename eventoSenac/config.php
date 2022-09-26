<?php 

    $bdHost = 'Localhost';
    $bdUsername = 'root';
    $bdPassword = '';
    $bdName = 'formulario';

    $conexao = new mysqli($bdHost, $bdUsername, $bdPassword, $bdName);

    // if($conexao->connect_errno){
    //     echo "Erro";
    // }
    // else{
    //     echo "Conexão efetuada com sucesso!";
    // }
?>