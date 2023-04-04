const tabela = document.getElementById('tabela');
const spanSit = document.querySelector('#sit')

Pendentes();
 function Pendentes(){
    tabela.innerHTML = ""
    spanSit.innerHTML = "- Pendentes"
    for(let i = 0; i <50; i++) {
        tabela.innerHTML += `<tr><td>${i+1}</td> <td>Escola Municipal Centro Municipal De Educação Supletiva</td> <td>16/03/2023</td> <td><a href="infoSolicitacao.php"><button class="abrir">Abrir</button> </a></td> <td><button id="situacao">Pendente</button></td></tr>`
     }
 }

 function Aprovado(){
    tabela.innerHTML = ""
    spanSit.innerHTML = "- Aprovados"

    for(let i = 0; i <50; i++) {
        tabela.innerHTML += `<tr><td>${i+1}</td> <td>Escola Municipal Centro Municipal De Educação Supletiva</td> <td>19/03/2023</td><td><a href="infoSolicitacao.php"><button class="abrir">Abrir</button> </a></td> <td><button id="situacao" style="background-color: green;">Aprovado</button></td></tr>`
     }
 }
 
 function Recusado(){
    tabela.innerHTML = ""
    spanSit.innerHTML = "- Recusados"

    for(let i = 0; i <50; i++) {
        tabela.innerHTML += `<tr><td>${i+1}</td> <td>Escola Municipal Centro Municipal De Educação Supletiva</td> <td>12/03/2023</td><td><a href="infoSolicitacao.php"><button class="abrir">Abrir</button> </a></td> <td><button id="situacao" style="background-color: red;">Recusado</button></td></tr>`
     }
 }
 function Parcial(){
    tabela.innerHTML = ""
    spanSit.innerHTML = "- Parciais"

    for(let i = 0; i <50; i++) {
        tabela.innerHTML += `<tr><td>${i+1}</td> <td>Escola Municipal Centro Municipal De Educação Supletiva</td> <td>12/03/2023</td> <td><a href="infoSolicitacao.php"><button class="abrir">Abrir</button> </a></td> <td><button id="situacao" style="background-color: rgb(90, 65, 3);">Parcial</button></td></tr>`
     }
 }
