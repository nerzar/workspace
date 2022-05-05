$(document).ready(function () {
  const eventObserver = new EventObserver();
  eventObserver.watchClick();




  // fixed scroll menu
  if ($(document).scrollTop() > 100) {
    if (!$('.navigation.fixed').hasClass('open')) {
      $('.navigation.fixed').addClass('open');
    }
  }

  $(document).scroll(function () {
    if ($(this).scrollTop() > 100) {
      if (!$('.navigation.fixed').hasClass('open')) {
        $('.navigation.fixed').addClass('open');
      }
    }else {
      $('.navigation.fixed').removeClass('open');
    }
  });

  $('[data-rf_adv-h]').click(function () {
    $('[data-rf_adv-h]').removeClass('open');
    $(this).addClass('open');
    let h2 = $(this).attr('data-rf_adv-h');
    let p = $(this).attr('data-rf_adv-p');
    let a = $(this).attr('data-rf_adv-a');
    let l = $(this).attr('data-rf_adv-al');

    $('.advantages__content_item>h2').html(h2);
    $('.advantages__content_item>p').html(p);
    let ao = $('.advantages__content_item>a.button').remove();
    if (a != "" && l != "") {
      $('.advantages__content_item').append('<a href="' + l + '" class="button">' + a + '</a>');
    }
  });


  //swiper sliders
    // main
    if ($('div').is(".header_slider__content")) {
      var swiper = new Swiper(".header_slider__content", {
        loop: true,
        autoplay: {
           delay: 1000,
           disableOnInteraction: false,
        },
        slidesPerView: "auto",
        // centeredSlides: true,
        spaceBetween: 30,
        pagination: false
      });
    }

    // reports
    if ($('div').is(".partners__advantages__reports__slider")) {
      var swiper_reports = new Swiper('.partners__advantages__reports__slider', {
        loop: true,
        spaceBetween: 30,
        autoplay: {
           delay: 2000,
           disableOnInteraction: false,
        },
        slidesPerView: "auto",
        pagination: false
      });
    }

  // wow
  const wow = new WOW().init();

  // Istrion Stat

  if ($('div').is('.istrion___stat_count')) {
    var istrionStatTmp = '<h3>--content--%</h3> <p>Проблем можно решить <br> на стадии разработки проекта</p>';
    var offsetTop = $('.istrion___stat_count').offset().top;
    var vh = $(window).height();

    if ((vh - (offsetTop + $(this).scrollTop())) < 200) {
      if (!$('.istrion___stat_count').hasClass('iserted')) {
        $('.istrion___stat_count').addClass('iserted');
        istrionCount();
      }
    }

    $(document).scroll(function () {
      if ((vh - (offsetTop + $(this).scrollTop())) < 200) {
        if (!$('.istrion___stat_count').hasClass('iserted')) {
          $('.istrion___stat_count').addClass('iserted');
          istrionCount();
        }
      }
    });
  }

  // get file name for Popup
  // $('#file').change(function functionName() {
  //   $('.file_placeholder').html(this.files[0].name + ' ').css({
  //     'color' : 'rgba(106, 196, 220, 1)',
  //     'border' : '2px dotted rgba(106, 196, 220, 1)'
  //   });
  // })

  // forms
  const formsObserver = new FormsObserver(
    'request_answer',
    '<div class="loader"></div> <span> Загрузка... </span>'
  );

});
function off() {}

function istrionCount() {
  var i = 0;
  var istrionStatTmp = '<h3>--content--%</h3> <p>Проблем можно решить <br> на стадии разработки проекта</p>';
  var timer = setInterval(function () {
    $('.istrion___stat_count').html(istrionStatTmp.replace('--content--', i));
    i++;
    if (i == 71) {
      clearTimeout(timer);
    }
  }, 10);
}
