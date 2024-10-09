<?php
    // Define o fuso horário
    date_default_timezone_set('America/Sao_Paulo');


    try{
        $pdo = new PDO("mysql:dbname=escola;host=localhost;charset=utf8","root","");
        // No Vertrigo a senha é "vertrigo"
    }
    catch(PDOException $erro)
    {
        echo("ERRO NA CONEXÃO: <br> ".$erro->getMessage());
    }
?>
