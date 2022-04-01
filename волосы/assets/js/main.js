$(function () {
  $(".pop").on("click", function (event) {
    event.preventDefault();
    $(".imagepreview").attr("src", $(this).find("img").attr("src"));
    $("#imagemodal").modal("show");
  });
  $(".collapse_button").on("click", function (event) {
    event.preventDefault();
    $(".table_wrapper").toggleClass("active");
    var text = $(".collapse_button").text();
    $(".collapse_button").text(
      text == "Показать все" ? "Скрыть все" : "Показать все"
    );
  });
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
