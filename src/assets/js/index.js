import { data } from "./data.js";
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 1,
  initialSlide: 1,
  spaceBetween: 20,
  // autoplay: {
  //   delay: 3000,
  //   disableOnInteraction: false,
  // },
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    modifier: 1,
    depth: 150,
    slideShadows: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    767: {
      slidesPerView: 3,
    },
  },
});

// quesstion
document.addEventListener("DOMContentLoaded", () => {
  const productList = document.getElementById("box8__list");

  // Generate HTML for each product
  const productHTML = data.map((product) => {
    return `
        <div class="box8__question" id="question-${product.id}" data-id="${product.id}">
          <p>
            ${product.id}. ${product.question}
          </p>
          <div class="box8__btn" data-id="${product.id}">&#43;</div>
        </div>
        <p class="box8__answer" id="answer-${product.id}">
          ${product.answer}
        </p>`;
  });

  const productListHTML = productHTML.join("");
  productList.innerHTML = productListHTML;

  const questions = document.querySelectorAll(".box8__question");
  questions.forEach((question) => {
    question.addEventListener("click", (event) => {
      const productId = event.currentTarget.getAttribute("data-id");
      const answerElement = document.getElementById(`answer-${productId}`);
      const buttonElement = event.currentTarget.querySelector(".box8__btn");

      if (answerElement.classList.contains("show")) {
        answerElement.classList.remove("show");
        buttonElement.innerHTML = "&#43;";
      } else {
        answerElement.classList.add("show");
        // answerElement.style.display = "flex";
        buttonElement.innerHTML = "&#8722;";
      }
    });
  });
});

const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle"),
  navClose = document.getElementById("nav-close");

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
}

const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  // When we click on each nav__link, we remove the show-menu class
  navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));
