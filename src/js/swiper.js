// swiper1
let swipeOption = {
  loop: true,
  effect: "fade",
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
};
new Swiper(".swiper1", swipeOption);
// swiper1ここまで

// swiper2
//Slider1
var slider1 = new Swiper(".swiper2", {
  effect: "slide",
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

// swiper2ここまで

// swiper3

//メインスライド
var slider = new Swiper(".gallery-slider", {
  slidesPerView: 1,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  loop: true,
  loopedSlides: 6, //スライドの枚数と同じ値を指定
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

//サムネイルスライド
var thumbs = new Swiper(".gallery-thumbs", {
  slidesPerView: "auto",
  spaceBetween: 24,
  breakpoints: {
    // when window width is >= 768px
    768: {
      spaceBetween: 10,
    },
  },
  centeredSlides: true,
  loop: true,
  slideToClickedSlide: true,
});

//3系
//slider.params.control = thumbs;
//thumbs.params.control = slider;

//4系～
slider.controller.control = thumbs;
thumbs.controller.control = slider;
