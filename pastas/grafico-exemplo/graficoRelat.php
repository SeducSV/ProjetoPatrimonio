
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
    <link rel="stylesheet" href="../css/relatorio.css">
</head>
<body>
    <main>
        <section>
            <div  class="sair">
                <a href="dPatrimonio.html"><button>Voltar</button></a>
                <button>Sair</button>
            </div>
            <img src="../imagens/prefeitura-relatorio.png" alt="Logo Prefeitura Municipal São Vicente">
            <p>Cidade Monumento da História Pátria</p>
            <p>Cellula Mater da Nacionalidade</p>

           <?php require 'dados.php';?> 
           
    <div class="grafico">
    <div id="piechart"></div> <!-- Mostrar o grafico na pagina -->
    </div>

        </section>
    </main>
</body>
</html>