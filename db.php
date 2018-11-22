<?php

require_once 'connection.php';
$id = 0;
// exibir
try {
    $stmt = $conn->prepare("SELECT * FROM cadastro");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   

} catch(PDOException $e) {
    echo 'Error ao listar o banco ' . $e->getMessage();
}

// insert
if(isset($_POST['salvar'])){
    try {

        $nome = $_POST['cadastro_nome'];
        $email = $_POST['cadastro_email'];
        $cidade = $_POST['cadastro_cidade'];

        $sql = "INSERT INTO cadastro(cadastro_nome, cadastro_email, cadastro_cidade)
                    VALUES ('$nome','$email','$cidade')";
        $conn->exec($sql);
        
        header('location: index.php?insert_success');
        
    } catch(PDOException $e) {
        echo 'Erro ao tentar salvar os dados!' .$e->getMessage();    
    }
}


// deletar
if(isset($_GET['cadastro_id'])){
   
    try {
      
        $id = $_GET['cadastro_id'];
        $sql = "DELETE FROM cadastro WHERE cadastro_id='$id'";
        $conn->exec($sql);

        header('location: index.php?deleted_success');
    } catch(PDOException $e) {
        echo 'Erro ao tentar deletar os dados!' .$e->getMessage();    
    }
}

// update
if(isset($_POST['cadastro_nome'])){
    try
     {

    $id = $_POST['cadastro_id'];
    $nome = $_POST['cadastro_nome'];
    $email = $_POST['cadastro_email'];
    $cidade = $_POST['cadastro_cidade'];

    $sql = "UPDATE cadastro SET cadastro_nome='$nome', cadastro_email='$email', cadastro_cidade='$cidade' WHERE cadastro_id=$id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    header('location: index.php?updated_success');
    }
    catch(PDOException $e)
    {
        echo $sql . $e->getMessage();
    }
    $conn = null;
}
