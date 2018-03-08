<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=biblioteca","root","root");
    echo "Conexão realizada com sucesso";
    
} catch (PDOException $e) {
        
    echo "Erro ao realizar a conexão ".$e->getMessage()." Code: ".$e->getCode();
}
