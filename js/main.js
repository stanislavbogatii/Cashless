var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 70,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 70,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 50,
    },
    570: {
      slidesPerView: 1.6,
      spaceBetween: 40,
    },
    0: {
      slidesPerView: 1.3,
      spaceBetween: 30,
    },
  },
});


function myFunction() {
  var x = document.getElementById("burger-nav");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}


$(function() {
  $('.questions__info').on('click', function () {
    var $parentItem = $(this).parent();

    if ($parentItem.hasClass('questions__item--active')) {
      $parentItem.removeClass('questions__item--active');
    } else {
      $('.questions__item').removeClass('questions__item--active');
      $parentItem.addClass('questions__item--active');
    }
  });

  $('.questions__info').click(function () {
    var $button = $(this).find('.questions__btn');

    $button.removeClass('rotate');

    void $button[0].offsetWidth;
    $button.addClass('rotate');
  });
})

$(function () {
  $(document).ready(function() {
    $('.application__text').hide();
    $('#link_maibbank').show();
    $('.application__content').hide();
    $('#swipper-maibbank').show();

    $('.application__btn').on('click', function(event) {
        event.preventDefault(); 
        $('.application__btn').removeClass('application__btn--active');
        $(this).addClass('application__btn--active');
        $('.application__content').hide();
        $('#swipper-' + $(this).attr('id')).show();
        $('.application__text').hide();
        $('#link_' + $(this).attr('id')).show();
    });
  })}
)
