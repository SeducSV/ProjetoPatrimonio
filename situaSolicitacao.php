<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação</title>
    <link rel="shortcut icon" href="pastas/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="pastas/css/infoSolicitacao.css">
    <link rel="stylesheet" href="pastas/css/situaSolicitacao.css">

    <!-- index -->
    <link rel="stylesheet" href="pastas/css/header.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body  onresize="mudouTamanho()">
    <?php include 'header.php';?>
    <main>
        <section>
            <div class="sair">
                <a href="infoSolicitacao.php"><button>Voltar</button></a>
            </div>
            <h1>Situação da Solicitação <span></span></h1>
            <hr>
            <div class="repApro">
                <button onclick="Recusado()">Recusado</button>
                <form action=""><button onclick="Aprovada()" id="aprovada">Aprovado</button></form>
                <button onclick="Pacial()">Parcial</button>
            </div>
            <div class="just">
                <h2>Justificativa: <span id="situa"></span></h2>
                <form action="">
                <div class="motivo">
                    <div>
                        <input type="radio" name="radio" id="faltaM" CHECKED>
                        <label for="faltaM">Falta Material</label>
                    </div>
                    <div>
                        <input type="radio" name="radio" id="materialFP">
                        <label for="materialFP">Material fora do padrão</label>
                    </div>
                    <div>
                        <input type="radio" name="radio" id="tamanhoNA">
                        <label for="tamanhoNA">Tamanho não atendido</label>
                    </div>
                    <div>
                        <input type="radio" name="radio" id="SemQS">
                        <label for="SemQS">Sem quantidade solicitada</label>
                    </div>
                    <div>
                        <input type="radio" name="radio" id="outro">
                        <label for="outro">Outro</label>
                    </div>
                </div>
                <textarea name="rec" id="rec" cols="0" rows="3"
                placeholder="Digite o motivo que a solicitação foi parcialmente aprovada ou recusada."
                ></textarea>
                <input type="submit" value="Enviar">
            </form>
            </div>
        </section>
    </main>
    <script src="pastas/javascript/situaPatrimonio.js"></script>
</body>

</html>