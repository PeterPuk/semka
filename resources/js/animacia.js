window.addEventListener('scroll', () => {
    let obsah = document.querySelector('.rowSpecial');
    let poziciaObsahu = obsah.getBoundingClientRect().top;
    let poziciaObrazovky = window.innerHeight;
    if (poziciaObsahu < poziciaObrazovky) {
        obsah.classList.add('active');
    } else {
        obsah.classList.remove('active');
    }
});
window.addEventListener('scroll', () => {
    let obsah = document.querySelector('.rowSpecialDva');
    let poziciaObsahu = obsah.getBoundingClientRect().top;
    let poziciaObrazovky = window.innerHeight;
    if (poziciaObsahu < poziciaObrazovky) {
        obsah.classList.add('active');
    } else {
        obsah.classList.remove('active');
    }
});
