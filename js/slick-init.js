(function ($) {
  $(document).ready(function () {
    if ($(".slider-container").length) {
      $(".partner-carousel").slick({
        slidesToShow: 3, // Nombre de diapositives affichées en même temps
        slidesToScroll: 1, // Nombre de diapositives défilées à chaque fois
        autoplay: true, // Activer la lecture automatique
        autoplaySpeed: 2000, // Vitesse de défilement (en millisecondes)
        arrows: true, // Afficher les flèches de navigation
        dots: true, // Afficher les points de navigation
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    }
  });
})(jQuery);
