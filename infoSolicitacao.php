<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link rel="shortcut icon" href="pastas/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="pastas/css/infoSolicitacao.css">
    <!-- index -->
    <link rel="stylesheet" href="pastas/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body onresize="mudouTamanho()">
    <?php include 'header.php';?>
    <main>
        <section>
            <div class="sair">
                <a href="listaSolicit.php"><button>Voltar</button></a>

            </div>

            <h1>Informações da Solicitação</h1>
            <hr>
            <div class="info">
                <p><strong>Holerite:</strong>12345</p>
                <p><strong>Nome:</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="info">
                <p><strong>Telefone:</strong>13 991234567</p>
                <p><strong>E-mail:</strong>solicitante.exemplo@gmail.com</p>
            </div>
            <p><strong>Escola:</strong>Escola Municipal Centro Municipal De Educação Supletiva</p>
            <p><strong>Equipamento:</strong>Geladeira</p>
            <div class="info">
                <p><strong>Data:</strong>16/03/2023</p>
                <p><strong>Voltagem:</strong>220V</p>
                <p><strong>Quantidade:</strong> 2</p>
            </div>
            <p><strong>Observações:</strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui beatae
                officiis quia aliquid repellendus placeat. Reiciendis nulla fugiat placeat fugit facere quaerat
                obcaecati, reprehenderit mollitia porro tempora tempore quod libero.</p>
            <a href="situaSolicitacao.php"><button>Responder Solicitação</button></a>

        </section>
    </main>

</body>

</html>