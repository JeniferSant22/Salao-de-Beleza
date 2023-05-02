<?php 

require_once './conn.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES(:NAME, :EMAIL, :PASSWORD)");

$stmt->bindValue(':NAME', $name);
$stmt->bindValue(':EMAIL', $email);
$stmt->bindValue(':PASSWORD', $passwordHash);

$stmt -> execute();
