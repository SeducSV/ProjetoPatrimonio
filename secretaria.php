<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento de Patrimônio</title>
    <link rel="shortcut icon" href="pastas/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="pastas/css/secretaria.css">
    
    <!-- index -->
    <link rel="stylesheet" href="pastas/css/header.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body  onresize="mudouTamanho()">
    <?php include 'header.php';?>
    <main>
        <h1>Secretaria</h1>
        <hr>
        <div id="container">
            
            <table border="1">
                <colgroup>
                    <col class="numeracao">
                    <col class="nomeEscola">
                    <col class="data">
                    <col class="descricao">
                    <col class="situacao">
                </colgroup>
                <caption>
                    Relatório
                </caption>
                <thead>
                    <tr>
                        <th  scope="col">Nº da Relatório </th>
                        <th  scope="col">Nome</th>
                        <th  scope="col">Ano</th>
                        <th  scope="col">Visualizar Relatório</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Relatorio de solicitação das escolas de 2023</td>
                        <td>2023</td>
                        <td><button>Click</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </main>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="pastas/javascript/secretaria.js"></script>
</body>
</html>