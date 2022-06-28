const ofertas = document.querySelector('.lista-ofertas');

window.addEventListener('load', function() {
    new Glider(ofertas, {
        slidesToShow: 1,
        slidesToScroll: 1,
        // draggable: true,
        dots: '.carousel-indicadores',
        arrows: {
            prev: '.oferta-prev',
            next: '.oferta-next'
        },

        responsive: [
            {
              breakpoint:  480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                itemWidth: 150,
                duration: 0.25
              }
            },
            
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                itemWidth: 150,
                duration: 0.25
              }
            },

            {
                breakpoint: 992,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 4,
                  itemWidth: 150,
                  duration: 0.25
                }
            },

            {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 5,
                  slidesToScroll: 5,
                  itemWidth: 150,
                  duration: 0.25
                }
            }
          ]
    });
});