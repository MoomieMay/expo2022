// ANIMACION TEXTO INICIO
var textWrapper = document.querySelector(".ml16");
textWrapper.innerHTML = textWrapper.textContent.replace(
  /\S/g,
  "<span class='letter'>$&</span>"
);

anime
  .timeline({ loop: true })
  .add({
    targets: ".ml16 .letter",
    translateY: [-100, 0],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 30 * i,
  })
  .add({
    targets: ".ml16",
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000,
  });

const openSidebar = () => {
  var text = document.getElementsByClassName("caption");
  for (var j = 0; j < text.length; j++) {
    text[j].classList.add("d-none");
  }

  var logo = document.getElementsByClassName("img");
  for (var k = 0; k < logo.length; k++) {
    logo[k].classList.add("d-none");
  }

  var bg_color = document.getElementsByClassName("bg-parallax");
  for (var i = 0; i < bg_color.length; i++) {
    bg_color[i].classList.remove("bg-parallax-normal");
    bg_color[i].classList.add("parallax-active");
  }

  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
};

const closeSidebar = () => {
  var text = document.getElementsByClassName("caption");
  for (var j = 0; j < text.length; j++) {
    text[j].classList.remove("d-none");
  }
  
  var logo = document.getElementsByClassName("img");
  for (var k = 0; k < logo.length; k++) {
    logo[k].classList.remove("d-none");
  }
  var bg_color = document.getElementsByClassName("bg-parallax");
  for (var i = 0; i < bg_color.length; i++) {
    bg_color[i].classList.remove("parallax-active");
    bg_color[i].classList.add("bg-parallax-normal");
  }

  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
};
