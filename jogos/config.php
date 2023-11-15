<?php 

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    //inserir o banco de dados
    $banco = "mundoinclusivo";
    try {
        $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=8889;charset=utf8;", $usuario, $senha);
    } catch (\Exception $e) {
        echo "<p>Erro ao se conectar no banco</p>";
        echo $e->getMessage();
    }
