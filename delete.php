<?php

require_once './conn.php';

$id = filter_input(INPUT_GET, 'id');

if($id){
    $stmt = $conn->prepare("DELETE FROM users WHERE id = :ID");

    $stmt->bindValue(':ID', $id);

    $stmt-> execute();

    header("Location: index.php");
}