<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=biblioteca","root","root");
    echo "Conex�o realizada com sucesso";
    
} catch (PDOException $e) {
        
    echo "Erro ao realizar a conex�o ".$e->getMessage()." Code: ".$e->getCode();
}
