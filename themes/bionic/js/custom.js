(function () {
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper(".bionicSwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
}());