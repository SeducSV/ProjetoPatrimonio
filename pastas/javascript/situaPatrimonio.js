const justicativa = document.querySelector('.just');
const textarea = document.querySelector('textarea');
const submit = document.querySelector('input[type="submit"');
const spanSitua = document.querySelector('#situa');
var parRec = 2


function Pacial(){
    parRec = 0
        justicativa.style.display = "block";
        spanSitua.innerHTML = "- Parcial"

}
function Recusado(){
    parRec= 1
    justicativa.style.display = "block";
    spanSitua.innerHTML = "- Recusado"
    
}
function Aprovada(){
    justicativa.style.display = "none";
    alert("Solicitação aprovada com sucesso!!")
    
}

window.onload = function() {
    const inputOpcoes = document.getElementsByName('radio')
	
	for(var i=0; i<inputOpcoes.length; i++) {
        inputOpcoes[i].addEventListener("click", function(e) {
              if(e.target.id == 'outro'){
                textarea.style.display = "block"
                textarea.setAttribute('required', 'required');
            }
            else{
                textarea.style.display = "none";
                textarea.removeAttribute("required");
            }
        });
	}
}
submit.addEventListener("click", function() {
    var resposta = parRec == 1 ? "recusada" : "parcialmente aprovada";
    if(textarea.style.display == "block" &&  textarea.value !== ''){
        alert(`Solicitação ${resposta} com sucesso!!`)
        } 
    else if(textarea.style.display != "block"){
        alert(`Solicitação ${resposta} com sucesso!!`)
    }
   /*  window.location ="infoPatrimonio.html"; */

    
})
