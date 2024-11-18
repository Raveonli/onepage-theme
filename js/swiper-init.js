document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".swiper-container")) {
    const swiper = new Swiper(".swiper-container", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  }
});
