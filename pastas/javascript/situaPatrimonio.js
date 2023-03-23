const justicativa = document.querySelector('.just');
const textarea = document.querySelector('textarea');
const span = document.querySelector('span')
const divClass = document.querySelector('.repAproCor')
const submit = document.querySelector('input[type="submit"');


function RecusadoPacial(){
        justicativa.style.display = "block";
}
function Aprovada(){
    justicativa.style.display = "none";
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