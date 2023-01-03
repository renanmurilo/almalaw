// Toggle Menu
let openMenu = document.querySelector('.open__menu');
let ico = document.querySelector('.hamburguer-line')
let menu = document.querySelector('.menu')
let closeMenu = document.querySelector('.close__menu')
let language = document.querySelector('.language')

openMenu.addEventListener('click', (e) => {
    e.preventDefault();

    closeMenu.classList.toggle('active')
    language.classList.toggle('active');
    openMenu.classList.toggle('active')
    menu.classList.toggle('active')
});

closeMenu.addEventListener('click', (e) => {
    e.preventDefault();

    openMenu.classList.toggle('active')
    language.classList.toggle('active');
    closeMenu.classList.toggle('active')
    menu.classList.toggle('active');
})

$('[data-group]').each(function () {
    var $allTarget = $(this).find('[data-target]'),
        $allClick = $(this).find('[data-click]'),
        activeClass = 'active';

    $allClick.click(function (e) {
        e.preventDefault();

        var id = $(this).data('click'),
            $target = $('[data-target="' + id + '"]');

        $target.toggleClass(activeClass);
        $(this).toggleClass(activeClass)
    });
});

const imagem = document.querySelectorAll('.image img');

imagem.forEach((image) => {
    if (image.getAttribute('src') === '') {
        image.parentElement.parentElement.remove();
    }
});

(() => {
    if (!localStorage.pureJavaScriptCookies) {
        document.querySelector(".box-cookies").classList.remove('hide');
    }

    const acceptCookies = () => {
        document.querySelector(".box-cookies").classList.add('hide');
        localStorage.setItem("pureJavaScriptCookies", "accept");
    };

    const btnCookies = document.querySelector(".btn-cookies");

    btnCookies.addEventListener('click', acceptCookies);
})();