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

// var quantity = document.getElementById('quantity'),
// quantity_val = parseInt(quantity.value),
// btn_add = document.querySelector('.add'),
// btn_remove = document.querySelector('.remove')

// quantity.addEventListener('keyup', (e) => {
//     quantity_val = parseInt(quantity.value)
// });

// btn_add.addEventListener('click', (e) => {
//     if (e.shiftKey) {
//         quantity_val += 10
//     } else {
//         quantity_val++
//     }
//     quantity.value = quantity_val;
// });

// btn_remove.addEventListener('click', (e) => {
//     if (quantity_val > 11 && e.shiftKey) {
//         quantity_val -= 10
//     } else if (quantity_val > 1) {
//         quantity_val--
//     }
//     quantity.value = quantity_val;
// });

// document.addEventListener('DOMContentLoaded', function () {
//     var splide = new Splide('.splide', {
//       type         : 'loop',
//       perPage      : 1,
//       autoplay     : false,
//       interval     : 15000, // How long to display each slide
//       pauseOnHover : false, // must be false
//       pauseOnFocus : false, // must be false
//       resetProgress: false,
//       classes: {
//         pagination: 'splide__pagination splide__custom',
//       }
//     }).mount();
//   });