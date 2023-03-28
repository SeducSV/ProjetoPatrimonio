<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
    <link rel="stylesheet" href="pastas/css/relatorio.css">
    <link rel="stylesheet" href="pastas/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body onresize="mudouTamanho()">
    <?php include 'header.php';?>

    <?php include 'pastas/grafico-exemplo/dados.php';?>
    <main>
        <section>
            <div class="sair">
                <a href="secretaria.php"><button>Voltar</button></a>
            </div>
            <div class="organizar">
                <div class="grafico">
                    <h1>Porcentagem Total de Solicitações</h1>

                    <div id="piechart_3d" class="chart"></div>
                </div>
                <div class="div-escola">
                    <form action="">
                        <label for="escola">Escola:</label>
                        <select name="escola" id="escola">
                            <option style="display:none">Escolha a escola</option>
                            <option value="escola">escola</option>
                            <option value="escola">escola</option>
                        </select>
                        <input type="submit" value="Filtrar">
                    </form>

                    <div class="organizar">
                        <div class="grafico-escola">
                            <span id="escola-grafico">Escola</span>
                            <div id="piechart2" class="chart"></div>
                        </div>

                        <div class="informacoes-grafico">
                            <h3>Informações do grafico</h3>
                            <p>Click na parte do recusado ou parcialmente aprovado.</p>
                            <div class="span">
                                <span id="faltaM"></span> <!-- Falta Material -->
                                <span id="materialFP"></span> <!-- Material fora do padrão  -->
                                <span id="tamanhoNA"></span> <!-- Tamanho não atendido -->
                                <span id="semQS"></span> <!-- Sem quantidade solicitada -->
                                <span id="outro"></span> <!-- Outro -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="pastas/javascript/graficoRelat.js"></script>
</body>

</html>