// SplideJS Slider. See full docs at:
// https://splidejs.com/
document.addEventListener('DOMContentLoaded', function () {
  var splide = new Splide('.splide', {
    type         : 'loop',
    perPage      : 1,
    autoplay     : false,
    interval     : 15000, // How long to display each slide
    pauseOnHover : false, // must be false
    pauseOnFocus : false, // must be false
    resetProgress: false,
    classes: {
      pagination: 'splide__pagination splide__custom',
    }
  }).mount();
});
