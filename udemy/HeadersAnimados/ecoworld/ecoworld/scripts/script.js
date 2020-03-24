let logo = document.querySelectorAll('.logo')[0];
window.addEventListener('scroll', toogleNavBar, false);
const navegacao = document.querySelectorAll('.nav-bar')[0];
function toogleNavBar() {
	if (window.pageYOffset >= logo.offsetHeight && navegacao.classList.contains('abs-pos')) {
		navegacao.classList.remove('abs-pos');
		navegacao.classList.add('fix-pos');
	}
	else if (window.pageYOffset <= logo.offsetHeight && navegacao.classList.contains('fix-pos')) {
		navegacao.classList.remove('fix-pos');
		navegacao.classList.add('abs-pos');
	}
}
const intLink = document.querySelectorAll('.int-link a')
intLink.forEach(function (cur) {
	cur.addEventListener('click', function (evt) {
		evt.preventDefault();
		window.scrollTo({
			top: document.querySelector(cur.getAttribute('href')).offsetTop - navegacao.offsetHeight,
			left: 0,
			behavior: 'smooth'
		})
	}, false)
})