const targets = document.querySelectorAll("[data-target]");
const content = document.querySelectorAll("[data-content]");
const item = document.querySelectorAll(".header__item");

targets.forEach((target) => {
  target.addEventListener("click", () => {
    content.forEach((c) => {
      c.classList.remove("active");
    });

    item.forEach((i) => {
      i.classList.remove("header__item-active");
    });

    const t = document.querySelector(target.dataset.target);

    t.classList.add("active");

    target.classList.add("header__item-active");
  });
});

$(document).ready(function () {
  $(".nav__btn__hamburger").click(function (e) {
    e.preventDefault();
    $("#main-container").toggleClass("toggled");
    $(".nav__btn__hamburger").toggleClass("active");

    $(".bar").toggleClass("active");
    $("#overlay").fadeToggle("slow", "swing");
  });

  $("#overlay").click(function () {
    $("#overlay").fadeOut("slow");
    $("#main-container").removeClass("toggled");
    $(".nav__btn__hamburger").removeClass("active");

    $(".bar").removeClass("active");
  });
});

$(document).ready(function () {
  $(".header__item-dropdown ").click(function (e) {
    e.preventDefault();
    $(".header__item-dropdown").toggleClass("btn-activo");
    $(".header__dropdown").toggleClass("activado");
  });
});
$("html, body").animate(
  {
    scrollTop: $("div").offset().top,
  },
  550
);

var lastScrollTop = 0;
$(window).scroll(function (event) {
  var st = $(this).scrollTop();
  if (st > lastScrollTop) {
    //âíèç
    $(".btn__container").addClass("scrolling_down");
    $(".btn__container").removeClass("scrolling_up");
  } else {
    // ââåðõ
    $(".btn__container").addClass("scrolling_up");
    $(".btn__container").removeClass("scrolling_down");
  }
  lastScrollTop = st;
});
