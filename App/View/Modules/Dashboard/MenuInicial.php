<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Logado como <?= $_SESSION['admin_logged']->nome ?></title>
</head>
<body>
    <h1>ÁREA PROTEGIDA</h1>
    <a href="/logout?exit=true">Fazer Loggout</a>
</body>
</html>