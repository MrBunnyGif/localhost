// popup aparecendo
var btnFolder = document.getElementById('newFolder');
var btnFile = document.getElementById('newFile');
var divFile = document.getElementById('cArquivo');
var divFolder = document.getElementById('cPasta');
var fundo = document.getElementById('fundo');

btnFile.addEventListener("click", function(){
	divFile.style.display = "block";
	fundo.style.display = "block";
});
btnFolder.addEventListener("click", function(){
	divFolder.style.display = "block";
	fundo.style.display = "block";
});
fundo.addEventListener("click", function(){
	divFile.style.display = "none";
	divFolder.style.display = "none";
	fundo.style.display = "none";
});

// Pressionada tecla esc
document.addEventListener('keydown', function(event) {
    const key = event.key; // Or const {key} = event; in ES6+
    if (key === "Escape") {
        alert("Está funcionando");
    }
});
