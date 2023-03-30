
    <header>
        <nav class="indexNav">
            <picture>
                <source media="(max-width:450px)" srcset="pastas/imagens/logo.jpg">
                
            <img src="pastas/imagens/logo.png" alt="Logo da Prefeitura de São Vicente">
            </picture>                
            <menu id="itens" >
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="solicitante.php">Solicitar Equipamento</a></li>
                    <div class="dropdown">
                        <li class="dropbtn">Patrimônio 
                          <i class="fa fa-caret-down"></i>
                        </li>
                        <div class="dropdown-content">
                          <a href="cadastrarProdut.php">Cadastrar Produto</a>
                          <a href="listaProdut.php">Lista de Produtos</a>
                          <a href="listaSolicit.php">Lista de Solicitações</a>
                        </div>
                      </div> 
                      
                    <li><a href="secretaria.php">Relatório da Secretária</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </menu>
        </nav>
        <i class="fa-solid fa-bars" id="burguer" onclick="clickMenu()"></i>
    </header>
    <script>

        function mudouTamanho() {
            if(window.innerWidth <=1100){
                itens.style.display = 'none'
            }
            else {
                itens.style.display = 'block'
            }

        }

        function clickMenu() {
            if(itens.style.display == 'block'){
            itens.style.display = 'none';
            } else{
                itens.style.display = 'block';
            }
        }
    </script>