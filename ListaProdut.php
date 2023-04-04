<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento de Patrimônio</title>
    <link rel="shortcut icon" href="pastas/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="pastas/css/listaProdut.css">
    
    <!-- index -->
    <link rel="stylesheet" href="pastas/css/header.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body  onresize="mudouTamanho()">
    <?php include 'header.php';?>
    <main>
        <h1>Lista de Produtos</h1>
        <hr>
        <fieldset>
            <legend>Filtros:</legend>
            <form class="filtro">
                <div id="nome">
                <label for="nome">Nome do produto:</label>
                <input type="text" name="nome" id="nome">
            </div>
                    <div class="button">
                        <input type="submit" value="Filtrar">
                        <input type="reset" value="Limpar filtro">
                    </div>
              </div>
            </form>
        </fieldset>
        
        <div id="container">
            
            <table border="1">
                <colgroup>
                    <col class="numeracao">
                    <col class="nome">
                    <col class="Quantidade">
                    <col class="Voltagem">
                    <col class="Descrição">
                </colgroup>
                <caption>
                    Lista de Produtos
                </caption>
                <thead>
                    <tr>
                        <th  scope="col">Nº da Produto </th>
                        <th  scope="col">Nome</th>
                        <th  scope="col">Quantidade</th>
                        <th  scope="col">Voltagem</th>
                        <th  scope="col">Descrição</th>
                        <th  scope="col">Editar</th>

                    </tr>
                </thead>
                <tbody id="tabela">
                    <tr>
                        <td>1</td>
                        <td>Geladeira</td>
                        <td>20</td>
                        <td>120</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi perspiciatis voluptatum itaque blanditiis earum.</td>
                        <td><button>Editar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </main>
</body>
</html>