<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="insert.php" method="post">
        <div>
            <label for="">Digite o nome do cliente:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="">Digite o e-mail do cliente:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="">Digite o endereço do cliente:</label>
            <input type="address" name="address" id="address">
        </div>
        <div>
            <label for="">Digite a data de anivesário do cliente:</label>
            <input type="birthday" name="birthday" id="birthday">
        </div>
        <div>
            <button>Cadastrar</button>
        </div>
    </form>
</body>
</html>
