<?php
    session_start();
    if(!isset($_SESSION['mensagem'])){
        $_SESSION['mensagem'] = 'Seja Bem-Vindo!';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
                <img src="icon.png" id="icon" alt="User Icon"/>
            </div>
            <form action="validar-acesso.php" method="post">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                <input type="password" id="password" class="fadeIn third" name="senha" placeholder="senha">
                <input type="submit" class="fadeIn fourth" value="Acessar">
            </form>
            <div>
                <p><?php echo $_SESSION['mensagem']; ?></p>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    // Validação de recarregamento da página
    $pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache'); 
    if($pageRefreshed == 1){
        $_SESSION['mensagem'] = 'Seja Bem-Vindo!';
    }
?>