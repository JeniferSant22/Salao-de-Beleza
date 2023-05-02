<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "crud-pdo";

try{
    $conn = new PDO("mysql:host=". $host . "; dbname=" . $db, $user, $password);
    //echo "Conexão realizada com sucesso!";
}catch(Exception $err){
    //echo "Erro na conexão: ". $err;
    echo "Servidor instavél, retorne em alguns minutos!";
}
?>