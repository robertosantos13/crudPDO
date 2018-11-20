<?php

require_once 'connection.php';

// exibir
try {
    $stmt = $conn->prepare("SELECT * FROM cadastro");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   

} catch(PDOException $e) {
    echo 'Error ao listar o banco ' . $e.getMessage();
}

// deletar


// update