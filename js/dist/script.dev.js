"use strict";

var menu = document.querySelector("#menu-btn");
var navbar = document.querySelector(".header .navbar");

menu.onclick = function () {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

window.onscroll = function () {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
};

var swiper = new Swiper(".team-slider", {
  loop: true,
  grabCursor: true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1
    },
    768: {
      slidesPerView: 2
    },
    991: {
      slidesPerView: 3
    }
  }
});