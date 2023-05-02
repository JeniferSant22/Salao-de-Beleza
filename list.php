<?php
require_once './conn.php';

$stmt = $conn -> prepare("SELECT * FROM users");
$stmt-> execute();
$list = $stmt-> fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border ="1">
        <tr>
            <th>ID</th> 
            <th>Nome</th> 
            <th>E-mail</th> 
            <th>Ações</th> 
        </tr>
        <?php foreach ($list as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>        
            <td><?= $user['name'];?></td>        
            <td><?= $user['email'];?></td>        
            <td>
                <a href="update.php?id=<?= $user['id']; ?>">Editar </a>
            
                <a href="delete.php?id=<?= $user['id']; ?>">Excluir </a>
            </td>   
        </tr>
        <?php endforeach; ?>
    </table>         
</body>
</html>