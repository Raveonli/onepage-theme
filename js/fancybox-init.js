(function ($) {
  $(document).ready(function () {
    $("[data-fancybox]").fancybox({
      animationEffect: "zoom-in-out",
      transitionEffect: "slide",
      buttons: ["zoom", "slideShow", "fullScreen", "thumbs", "close"],
      slideShow: {
        autoStart: true,
        speed: 3000,
      },
      clickOutside: "close",
      protect: true,
    });
  });
})(jQuery);
