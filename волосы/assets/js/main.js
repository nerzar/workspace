$(".pop").on("click", function (event) {
  event.preventDefault();
  $(".imagepreview").attr("src", $(this).find("img").attr("src"));
  $("#imagemodal").modal("show");
});
$(".pop-video").on("click", function (event) {
  event.preventDefault();
  let srcpath = $(this).attr("video-src");
  var video = document.getElementById("video");
  var source = document.getElementById("source");

  source.setAttribute("src", srcpath);
  $("#videomodal").modal("show");
  video.load();
});
$(".collapse_button").on("click", function (event) {
  event.preventDefault();
  $(".table_wrapper").toggleClass("active");
  var text = $(".collapse_button").text();
  $(".collapse_button").text(
    text == "Показать все" ? "Скрыть все" : "Показать все"
  );
});

var slider = document.querySelector("#slider_compare-product"),
  afterWrap = document.querySelector(".after-wrap-product");
slider.addEventListener("input", function (e) {
  var sliderPos = slider.value;
  afterWrap.style.width = 100 - sliderPos + "%";
});
var slider2 = document.querySelector("#slider_compare-product2"),
  afterWrap2 = document.querySelector(".after-wrap-product2");
slider2.addEventListener("input", function (e) {
  var sliderPos2 = slider2.value;
  afterWrap2.style.width = 100 - sliderPos2 + "%";
});
var slider3 = document.querySelector("#slider_compare-product3"),
  afterWrap3 = document.querySelector(".after-wrap-product3");
slider3.addEventListener("input", function (e) {
  var sliderPos3 = slider3.value;
  afterWrap3.style.width = 100 - sliderPos3 + "%";
});

$(function () {
  $(".accordeon_title").click(function () {
    $(this).parent().toggleClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(".accordeon_content").slideUp();
    if (!$(this).next().is(":visible")) {
      $(this).next().slideDown();
    }
  });
});

$(".picture-checkbox1").on("change", function () {
  let slide = $(this).parents(".sendprice_slide").index();
  quizAction(slide + 1);
});
$(".step").on("click", function () {
  let slide = $(this).index() + 1;
  quizAction(slide);
});
function quizAction(slide) {
  $(".sendprice_slide").fadeOut(500);
  $(".slide-" + slide)
    .delay(550)
    .fadeIn(500);
  $(".step").removeClass("active");
  console.log(slide);
  for (i = 1; i <= slide; i++) {
    $(".step-" + i).addClass("active");
  }
  if (slide == 4) {
    console.log("asd");
    $(".quiz_steps").fadeOut(500);
  }
}

function quizGoTo(slide) {}
$(" .quiz_step").click(function (e) {
  let slide = $(this).attr("data-index");
  quizGoTo(slide);
});

var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  loop: true,
  spaceBetween: 59.4,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 20,
    stretch: 1,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
if (matchMedia("only screen and (max-width: 1200px)").matches) {
}

var swiper2 = new Swiper(".servicesSwiper", {
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: false,
  },
  slidesPerView: 2,
  spaceBetween: 10,
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    769: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 20,
    },
    1400: {
      slidesPerView: 7,
      spaceBetween: 4,
    },
    1500: {
      slidesPerView: 7,
      spaceBetween: 20,
    },
  },
});
