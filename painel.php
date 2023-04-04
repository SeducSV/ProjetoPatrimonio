<head>

    <link rel="stylesheet" href="pastas/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<header>
    <nav class="indexNav">
        <picture>
            <source media="(max-width:450px)" srcset="pastas/imagens/logo.jpg">

            <img src="pastas/imagens/logo.png" alt="Logo da Prefeitura de São Vicente">
        </picture>
        <menu id="itens">
            <ul>
                <?php  
                    echo  '<li><a href="?page=login">Login</a></li>';
                    echo  '<li><a href="?page=solicitante">Solicitar Equipamento</a></li>';
                    echo' <div class="dropdown">
                        <li class="dropbtn">Patrimonio 
                          <i class="fa fa-caret-down"></i>
                        </li>';
                        echo '<div class="dropdown-content">';
                        echo' <a href="?page=cadastrarProdut">Cadastrar Produto</a>';
                        echo'<a href="?page=listaProdut">Lista de Produtos</a>';
                        echo'<a href="?page=listaSolicit">Lista de Solicitações</a>';
                       echo' </div>';
                     echo '</div> ';
                      echo '<li><a href="?page=secretaria">Relatorio da Secretaria</a></li>';
                    echo' <li><a href="?page=index">Logout</a></li>';
                    ?>
            </ul>
        </menu>
    </nav>
    <i class="fa-solid fa-bars" id="burguer" onclick="clickMenu()"></i>
</header>
<?php
        switch (@$_REQUEST["page"]) {
          case "login":
            include("login.php");
            break;
          case "solicitante":
            include("solicitante.php");
            break;
		  case "cadastrarProdut":
            include("cadastrarProdut.php");
            break;
          case "listaProdut":
            include("listaProdut.php");
            break;
          case "listaSolicit":
            include("listaSolicit.php");
            break;
        case "secretaria":
            include("secretaria.php");
            break;
        case "index":
            include("index.php");
            break;
          
            default:
            if ($_SESSION["user"][1] != null)
              print "<h3 class='text-light'>Bem vindo, {$_SESSION["user"][0]}!</h3>";
          }
?>

<script>
function mudouTamanho() {
    if (window.innerWidth <= 1100) {
        itens.style.display = 'none'
    } else {
        itens.style.display = 'block'
    }

}

function clickMenu() {
    if (itens.style.display == 'block') {
        itens.style.display = 'none';
    } else {
        itens.style.display = 'block';
    }
}
</script>