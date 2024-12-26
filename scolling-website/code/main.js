let star = document.getElementById('star');
let moon = document.getElementById('moon');
let mountain1 = document.getElementById('mountain1');
let mountain2 = document.getElementById('mountain2');
let river = document.getElementById('river');
let boat = document.getElementById('boat');
let abdo = document.querySelector('.abdo');

window.onscroll = function () {
    let sc = scrollY;
    star.style.left = sc + 'px';
    moon.style.top = sc * 3.5 + 'px';
    mountain1.style.top = sc * 2 + 'px';
    mountain2.style.top = sc * 1.5 + 'px';
    river.style.top = sc + 'px';
    boat.style.top = sc + 'px';
    boat.style.left = sc * 3 + 'px';
    abdo.style.fontSize = sc + 'px';
    if (scrollY >= 77) {
        abdo.style.fontSize = 77 + 'px';
        abdo.style.position = 'fixed';
        if (scrollY >= 386) {
            abdo.style.display = 'none';
        } else {
            abdo.style.display = 'block';

        }
    }
    if (scrollY >= 129) {
        document.querySelector('.main').style.background = 'linear-gradient(#376281,#10001f)';
    } else {
        document.querySelector('.main').style.background = 'linear-gradient(#200016, #10001f)';

    }
}