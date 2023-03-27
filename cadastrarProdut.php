<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitante</title>
    <link rel="shortcut icon" href="pastas/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="pastas/css/cadastrarProduto.css">
    <!-- index -->
    <link rel="stylesheet" href="pastas/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body onresize="mudouTamanho()">
    <?php include 'header.php';?>
    <main>
        <h1>Cadastrar Produto</h1>
        <hr>
        <form>
            <div class="nome">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="quantVolt">
                <div class="quant">
                    <label for="quant">Quantidade:</label>
                    <input type="number" name="quant" id="quant" min="0">
                </div>
                <div class="eltVolt">
                    <div id="eletrico">
                        <label for="eletrico">Equipamento eletrônico?</label>
                        <input type="radio" name="radio" id="sim">
                        <label for="sim">Sim</label>
                        <input type="radio" name="radio" id="nao" checked>
                        <label for="nao">Não</label>
                    </div>
                    <div id=voltagem>
                        <label for="volt">Voltagem:</label>
                        <select name="volt" id="volt">
                            <option style="display:none">Escolha a voltagem</option>
                            <option value="220v">220V</option>
                            <option value="110v">110V</option>
                            <option value="N/d">Bivolt</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="descricao">
                <label for="desc">Descrição:</label>
                <textarea id="desc" name="desc" rows="2"> </textarea>
            </div>
            <input type="submit" value="Cadastar">
        </form>

    </main>
    <script src="pastas/javascript/solicitante.js"></script> <!-- Apenas usando para esconder/mostrar a voltagem -->

</body>

</html>