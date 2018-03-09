<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sakila", "root", "root");
    // echo "Conexão realizada com sucesso";
    
    $query = "select * from actor";
    
    $stsm = $conn->query($query); // Comando para execução de query
 // $list = $stsm->fetchAll(PDO::FETCH_OBJ); // Traz todos os registros da consulta para a lista
    $list = $stsm->fetch(PDO::FETCH_ASSOC); // Traz somente o primeiro registro da consulta para a lista
    //echo $list[first_name]; // ou  echo $list->first_name
    //print_r($list);
    foreach ($conn->query($query) as $atores){
        echo $atores['first_name'];
        echo "<br/>";
    }
    //
} catch (PDOException $e) {
    
    echo "Erro ao realizar a conexão " . $e->getMessage() . " Code: " . $e->getCode();
}
