let logo = document.querySelectorAll('.logo')[0];
window.addEventListener('scroll', toogleNavBar, false);
function toogleNavBar() {
    const navegacao = document.querySelectorAll('.nav-bar')[0];   
    if (window.pageYOffset >= logo.offsetHeight && navegacao.classList.contains('abs-pos')) {
        navegacao.classList.remove('abs-pos');
        navegacao.classList.add('fix-pos');
    }
    else if (window.pageYOffset <= logo.offsetHeight && navegacao.classList.contains('fix-pos')) {
        navegacao.classList.remove('fix-pos');
        navegacao.classList.add('abs-pos');
    }
}

const extLink = document.querySelectorAll('.ext-link')[0];
extLink.addEventListener('click', openLink, false);

function openLink(){
    window.open('https://www.blogger.com/about/', '_blank');
}