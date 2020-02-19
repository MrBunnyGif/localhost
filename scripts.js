// popup aparecendo
var btnFolder = document.getElementById('newFolder');
var btnFile = document.getElementById('newFile');
var divFile = document.getElementById('cArquivo');
var divFolder = document.getElementById('cPasta');
var fundo = document.getElementById('fundo');

// Pressionada tecla esc
document.addEventListener('keydown', function(event) {
    const key = event.key; // Or const {key} = event; in ES6+
    if (key === "Escape") {
        alert("Está funcionando");
    }
});

btnFile.addEventListener("click", function(){
	divFile.classList.toggle('-active');
	fundo.classList.toggle('-active');
	if (aparecer.classList.contains('-active')){
		fundo.addEventListener("click", function(){
			divFile.classList.toggle('-active');
		});
	};
});

// if (aparecer.classList.contains('-active')){
// 	fundo.classList.toggle('-active');
// };