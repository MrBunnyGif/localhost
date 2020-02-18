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