<?php

require_once './conn.php';

$id = filter_input(INPUT_GET'id');

$stmt = $conn -> prepare("SELECT * FROM users WHERE id = :ID");

$stmt -> bindValue(':ID', $id);

$stmt -> execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<html>
    <head>
        <title>title</title>
    </head>    


