const tabela = document.getElementById('tabela');

for(let i = 0; i <50; i++) {
    tabela.innerHTML += `<tr><td>${i+1}</td> <td>Escola Municipal Centro Municipal De Educação Supletiva</td> <td>16/03/2023</td> <td><button >Abrir</button></td> <td><button id="situacao">Ver situação</button></td></tr>`
 }