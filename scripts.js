// popup aparecendo
var btnFolder = document.getElementById('newFolder');
var btnFile = document.getElementById('newFile');
var divFile = document.getElementById('cArquivo');
var divFolder = document.getElementById('cPasta');
var fundo = document.getElementById('fundo');

btnFile.addEventListener("click", function(){
	divFile.classList.toggle('-active');
	divFile.style.display = "block";
	fundo.style.display = "block";
	if ((divFile.classList.contains('-active'))){
		document.addEventListener('keydown', function() {
			var key = event.key;
			if (key === "Escape") {
				divFile.classList.toggle('-active');
				divFile.style.display = "none";
				fundo.style.display = "none";
			}
		});
	}
});
btnFolder.addEventListener("click", function(){
	divFolder.classList.toggle('-active');
	divFolder.style.display = "block";
	fundo.style.display = "block";
	if ((divFolder.classList.contains('-active'))){
		document.addEventListener('keydown', function() {
			var key = event.key;
			if (key === "Escape") {
				divFolder.classList.toggle('-active');
				divFolder.style.display = "none";
				fundo.style.display = "none";
			}
		});
	}
	
});
fundo.addEventListener("click", function(){
	if (divFile.classList.contains('-active')){
		divFile.classList.toggle('-active');
		divFile.style.display = "none";
	};
	if (divFolder.classList.contains('-active')){
		divFolder.classList.toggle('-active');
		divFolder.style.display = "none";
	};
	fundo.style.display = "none";
});