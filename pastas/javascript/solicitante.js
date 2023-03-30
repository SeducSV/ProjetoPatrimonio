const inputOpcoes = document.getElementsByName('radio')
window.onload = function() {
	for(var i=0; i<inputOpcoes.length; i++) {
        inputOpcoes[i].addEventListener("click", function(e) {
              if(e.target.id == 'sim'){
                document.querySelector('#voltagem').style.display = "block"
            }
            else{
                document.querySelector('#voltagem').style.display = "none";
                document.querySelector('#volt').selectedIndex = 0;

            }
        });
	}
}
/* Validar Telefone */
const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
  }
  
  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
  }


 /* Onsubmit */
function Solicitante(){
    /* Validar select escola e equipamento */
    const escola = document.querySelector("#escolher-escola")
    const equipamento = document.querySelector("#equipamento")
    const voltagem = document.querySelector("#volt")
    if(inputOpcoes[0].checked && voltagem.selectedIndex  == 0){
        alert("Escolha a voltagem!")
    }

    if(escola.selectedIndex == 0){
        alert("Escolha a escola!")
    }
    if(equipamento.selectedIndex == 0){
        alert("Escolha o equipamento!")
    }

}


function Cadastrar(){
    const voltagem = document.querySelector("#volt")
    if(inputOpcoes[0].checked && voltagem.selectedIndex  == 0){
        alert("Escolha a voltagem!")
    }
}
