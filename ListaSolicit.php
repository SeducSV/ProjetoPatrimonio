<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento de Patrimônio</title>
    <link rel="shortcut icon" href="pastas/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="pastas/css/listaSolicit.css">
    <link rel="stylesheet" href="pastas/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body onresize="mudouTamanho()">
    <?php include 'header.php'; ?>
    <main>
        <h1>Lista de Solicitações</h1>
        <hr>

        <fieldset>
            <legend>Filtros:</legend>
            <form class="filtro">
                <div id="escolher-escola">
                    <label for="escola">Escola: </label>
                    <select name="escola" id="escola">
                        <option style="display:none">Escolha a escola</option>
                        <option value="antoniopacifico">EMEF “ANTONIO PACÍFICO” <br /> Rua: Anadir D. Carvalho, nº 438 –
                            Jóquei Clube</option>
                        <option value="armindoramos">EMEF “ARMINDO RAMOS” Rua Sergipe, nº 131 – Samaritá</option>
                        <option value="augustodesainthilaire">EMEF “AUGUSTO DE SAINT' HILAIRE” Av. Martins Fontes, nº
                            1000 – Catiapoã</option>
                        <option value="caicayrtonsennadasilva">EMEF “CAIC – AYRTON SENNA DA SILVA” Rua Maria Rita Brito
                            Lopes, s/n – Humaitá</option>
                        <option value="carolina dantas">EMEF “CAROLINA DANTAS” Rua Aurélio Ponna, nº 26 – Catiapoã
                        </option>
                        <option value="cejacon">CEJACON “CENTRO M. DE EDUCAÇÃO SUPLETIVA – ÁREA CONTINENTAL” Av.
                            Quarentenário n°1001 - Jardim Quarentenario</option>
                        <option value="cejain">CEJAIN “CENTRO MUNICIPAL DE EDUCAÇÃO SUPLETIVA – ÁREA INSULAR” Av.
                            Capitão Mor Aguiar, 798 - Centro - São Vicente</option>
                        <option value="mariocovasjunior">EMEF “DR. MARIO COVAS JUNIOR” Rua Senador Nilo de S. Coelho,
                            s/nº - Parque das Bandeiras</option>
                        <option value="professorconstante">EMEF “PROFESSOR CONSTANTE LUCIANO C. HOULMOUT” Av. Antônio
                            Emmerick, nº 504 – Vila Valença</option>
                        <option value="franciscomartins">EMEF “FRANCISCO MARTINS DOS SANTOS” Rua Dr. Donald Alexandre
                            Kelman, nº 255 – Jardim Rio Branco</option>
                        <option value="lionsclube">EMEF “LIONS CLUBE” Rua Costa Rego, nº 533 – Vila São Jorge</option>
                        <option value="matteobei1">EMEF “MATTEO BEI” Rua Carijós, nº 505 – Parque São Vicente</option>
                        <option value="numaa">EMEF “NUMAA – ANA LUCIA ALMEIDA DE OLIVEIRA” Av. João Francisco Bensdorp,
                            nº 201 – Cidade Náutica</option>
                        <option value="pastorjoaquim">EMEF “PASTOR JOAQUIM RODRIGUES DA SILVA” Rua João Francisco
                            Bensdorp, nº 301 – Cidade Náutica</option>
                        <option value="prefeitoantonio">EMEF “PREFEITO ANTONIO FERNANDO DOS REIS” Rua Juiz de Fora, nº
                            90 – Jardim Independência</option>
                        <option value="prefeitojorge">EMEF “PREFEITO JORGE BIERRENBACH SENRA” Rua Luiz Ferreira Morgado,
                            nº 1783 – Jardim Rio Branco</option>
                        <option value="prefeitoluiz">EMEF “PREFEITO LUIZ BENEDITINO FERREIRA” Rua Dr. Polydoro de
                            Oliveira Bittencourt, nº 333 – Vila Margarida</option>
                        <option value="professorjacob">EMEF “PROFESSOR JACOB ANDRADE CÂMARA” Rua Stelio Machado
                            Loureiro, nº 1071 – Vila Fátima</option>
                        <option value="professorlucio">EMEF “PROFESSOR LÚCIO MARTINS RODRIGUES” Rua Odair Miller A.
                            Marques, nº 434 – Vila Margarida</option>
                        <option value="professorluiz">EMEF “PROFESSOR LUIZ PINHO DE CARVALHO FILHO” Rua Dr. José Singer,
                            nº 369 – Humaitá</option>
                        <option value="professoroctavio">EMEF “PROFESSOR OCTÁVIO DE CÉSARE” Rua Tenente Durval do
                            Amaral, nº 183 – Catiapoã</option>
                        <option value="professorrenan">EMEF “PROFESSOR RENAN ALVES LEITE” Rua Alcides de Araújo, nº 1030
                            – Jardim Paraíso</option>
                        <option value="professoralaura">EMEF “PROFESSORA LAURA FILGUEIRAS” Rua Marechal Euclides Z. da
                            Costa, nº 75 – Vila Matteo Bei</option>
                        <option value="profleonor">EMEF “PROF. LEONOR GUIMARÃES ALVES STOFFEL” Rua Oeiras, s/nº -
                            Samaritá</option>
                        <option value="raqueldecastro">EMEF “RAQUEL DE CASTRO FERREIRA” Av. Newton Prado, nº 503 –
                            Parque Bitaru</option>
                        <option value="raulrocha">EMEF “RAUL ROCHA DO AMARAL” Av. Belo Horizonte, nº 273 – Vila Ponte
                            Nova</option>
                        <option value="republicadeportugal">EMEF “REPÚBLICA DE PORTUGAL” Praça 23 de Maio, nº 265 –
                            Parque Bitaru</option>
                        <option value="uniaocivica">EMEF “UNIÃO CÍVICA FEMININA” Praça Rui Barbosa, s/nº - Parque São
                            Vicente</option>
                        <option value="veralucia">EMEF “VERA LUCIA MACHADO MASSIS” Av. João Francisco Bensdorp, nº 1386
                            – Cidade Náutica</option>
                        <option value="adilza">EMEI “ADILZA DE OLIVEIRA ROSA SOBRAL” Praça 31 de Março, s/nº - Pompeba
                        </option>
                        <option value="anuar">EMEI “ANUAR FRAHYA” Rua José Adriano Marrey Júnior, s/nº - Cidade Náutica
                        </option>
                        <option value="carloscaldeira">EMEI “CARLOS CALDEIRA” Praça Armindo Ramos, s/nº - Samaritá
                        </option>
                        <option value="cidadedenaha">EMEI “CIDADE DE NAHA” Rua General Etchegoyen, nº 25 – Catiapoã
                        </option>
                        <option value="clementeferreira">EMEI “CLEMENTE FERREIRA” Largo Clemente Ferreira, s/nº, Vila
                            Cascatinha</option>
                        <option value="dompedroi">EMEI “DOM PEDRO I” Praça D. Pedro I, s/nº - Parque São Vicente
                        </option>
                        <option value="edmundo">EMEI “EDMUNDO CAPELLARI” Praça Vitória, s/nº - Jardim Independência
                        </option>
                        <option value="joseborges">EMEI “JOSÉ BORGES FERNANDES” Rua Senador Salgado Filho, s/nº - Jóquei
                            Clube</option>
                        <option value="kelma">EMEI “KELMA MARIA TOFFETTI GONÇALVES” R. Maria Rita de Souza Brito Lopes
                            Pontes, s/nº - Humaitá</option>
                        <option value="mariaguilhermina">EMEI “MARIA GUILHERMINA MACHADO – MIMI MACHADO” Rua Américo
                            Martins dos Santos, s/nº - Jardim Paraíso</option>
                        <option value="matteobei2">EMEI “MATTEO BEI” Rua Frei Gaspar, nº 2236 – Parque São Vicente
                        </option>
                        <option value="monteirolobato">EMEI “MONTEIRO LOBATO” Rua Rio Largo, s/nº - Jardim Nosso Lar
                        </option>
                        <option value="nossasenhora">EMEI “NOSSA SENHORA DA ESPERANÇA” Rua Salvador, 30 - Vila Ponte
                            Nova</option>
                        <option value="padrejose">EMEI “PADRE JOSÉ DE ANCHIETA” Praça Dário Aredes, s/nº - Parque das
                            Bandeiras</option>
                        <option value="professoramaria">EMEI “PROFESSORA MARIA ELIZABETH RAMOS DA SILVA” Rua Um, nº 135
                            – Samaritá</option>
                        <option value="provinciadeokinawa">EMEI “PROVÍNCIA DE OKINAWA” Cidade de Cubatão s/nº - Vila
                            Margarida</option>
                        <option value="provinciadeokinawaii">EMEI “PROVÍNCIA DE OKINAWA II” Rua Caimoré, 804 - Vila
                            Margarida</option>
                        <option value="vilajoquei">EMEI “VILA JÓQUEI” Rua Fernando Ferrari s/nº - Jóquei Clube</option>
                        <option value="albertosantos">EMEIEF “ALBERTO SANTOS DUMONT” Rua Eduardo Cação s/nº - Jardim Rio
                            Branco</option>
                        <option value="duquedecaxias">EMEIEF “DUQUE DE CAXIAS” Praça Napoleão Laureano s/nº - Jardim
                            Guassu</option>
                        <option value="ercília">EMEIEF “ERCÍLIA NOGUEIRA COBRA” Rua Vale do Pó, nº 400 – Vila Margarida
                        </option>
                        <option value="eulina">EMEIEF “EULINA TRINDADE” Rua Olga Marques s/nº - Vila Matteo Bei</option>
                        <option value="manoelnascimento">EMEIEF “MANOEL NASCIMENTO JÚNIOR” Rua Roberto Koch, nº 300 –
                            Jóquei Clube</option>
                        <option value="mariadelourdes">EMEIEF “MARIA DE LOURDES BATISTA” Rua Caramuru, nº 623 – Parque
                            São Vicente</option>
                        <option value="mauroaparecido">EMEIEF “MAURO APARECIDO DE GODOY” Praça Grande Oriente do Brasil,
                            nº 03 – Pompeba</option>
                        <option value="niltonribeiro">EMEIEF “NILTON RIBEIRO” Rua José Júlio da Silva s/nº - Japuí
                        </option>
                        <option value="prefeitojonas">EMEIEF “PREFEITO JONAS RODRIGUES” Rua Alexandre Sendim, nº 304 –
                            Parque Bitaru</option>
                        <option value="prefeitosebastiao">EMEIEF “PREFEITO SEBASTIÃO RIBEIRO DA SILVA” Rua Quirino Mário
                            Biasoli, nº 90 – Cidade Náutica</option>
                        <option value="professorgilson">EMEIEF “PROFESSOR GILSON KOOL MONTEIRO” Rua Rivaldo de Lima
                            Ferreira s/nº - Vila Mathias</option>
                        <option value="prefeitojose">EMEIEF “PREFEITO JOSÉ MEIRELLES” Rua Tupã, nº 345 – Quarentenário
                        </option>
                        <option value="reginacelia">EMEIEF “REGINA CÉLIA DOS SANTOS” Visconde de Tamandaré, 385 – Centro
                        </option>
                        <option value="saulotarso">EMEIEF “SAULO TARSO MARQUES DE MELLO” Rua José Viegas, 20 – Parque
                            Continental</option>
                        <option value="vilaema">EMEIEF “VILA EMA” Rua Dr. Marcelo Ribeiro Nogueira s/nº - Vila Ema
                        </option>
                    </select>
                </div>

                <div id="listas-solicitacao">
                    <label for="lista">Listas:</label>
                    <select name="lista" id="lista" class="filtro">
                        <option value="pendente">Lista Pendentes</option>
                        <option value="aprovado">Lista Aprovados</option>
                        <option value="recusado">Lista Recusados</option>
                        <option value="parcial">Lista Parcial</option>
                    </select>
                </div>

                <div id="data">
                    <label for="data">Data:</label>
                    <select name="data" id="data">
                        <option style="display:none">Data</option>
                        <option value="primeiros">Primeiros</option>
                        <option value="ultimos">Últimos</option>
                    </select>
                </div>
                <div id="solicit">
                    <label for="sol">Nº Solicitação:</label>
                    <input type="number" name="sol" id="sol" placeholder="Numero da Solicitação">
                </div>
                <input type="submit" value="Filtrar">
                <input type="reset" value="Limpar Filtro">


            </form>
        </fieldset>

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
                    Lista de Solicitações <span id="sit">- Pendentes</span>
                </caption>
                <thead>
                    <tr>
                        <th scope="col">Nº da Solitação </th>
                        <th scope="col">Nome da Escola</th>
                        <th scope="col">Data de solicitação</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Situação</th>

                    </tr>
                </thead>
                <tbody id="tabela">
                </tbody>
            </table>
        </div>

    </main>
    <script src="pastas/javascript/listaSolicit.js"></script>
</body>

</html>