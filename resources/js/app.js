import './bootstrap';
const bar = document.getElementById('mobile');
const close = document.getElementById('close');
const nav = document.getElementById('navbar-mobile');
const overlay = document.getElementById('overlay');

if (bar) {
    bar.addEventListener('click', (e) => {
        overlay.classList.add('sidebar');
        nav.setAttribute('class', 'slide-in');
        document.body.classList.add('no-scroll');
    })

    document.body.addEventListener('click', (e) => {
        if (!bar.contains(e.target)) {
            overlay.classList.remove('sidebar');
            nav.setAttribute('class', 'slide-out');
            document.body.classList.remove('no-scroll');
        }
    })

}

if (close) {
    close.addEventListener('click', (e) => {
        overlay.classList.remove('sidebar');
        nav.setAttribute('class', 'slide-out');
        document.body.classList.remove('no-scroll');
    })
}