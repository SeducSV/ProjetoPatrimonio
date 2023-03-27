window.onload = function() {
    const inputOpcoes = document.getElementsByName('radio')
	
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