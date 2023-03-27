<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Patrimonio</title>
    <link rel="shortcut icon" href="pastas/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">    
    <link rel="stylesheet" href="pastas/css/login.css">
    
    <!-- index -->
    <link rel="stylesheet" href="pastas/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body onresize="mudouTamanho()">
    <?php include 'header.php';?>
    <main>
        <div class="login">
            <img src="pastas/imagens/logo.png" alt="Logo da Prefeitura de São vicente">
            <h1>Login</h1>
            <form action="">
                <label for="user">Usuário:</label>
                <input type="text" name="user" id="user">
                <label for="senha">Senha:</label>
                <article> 
                    <input type="password" name="senha" id="senha">
                    <span><i class="fa-solid fa-eye fa-lg icon"></i></span>
                </article>
                <a href="#">Esqueci minha senha</a>
                <input type="submit" value="Enviar">
            </form>   
        </div>
        <div></div>
    </main>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="pastas/javascript/login.js"></script>
</body>
</html>