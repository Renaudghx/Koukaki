// ---------- Swiper ----------

// core version:
import Swiper from '../../../../node_modules/swiper/swiper-bundle.esm.browser.min.js';
// import Swiper styles :
import sheet from '../../../../node_modules/swiper/swiper.min.css' assert { type: 'css' };
document.adoptedStyleSheets = [sheet];

// init Swiper:

const swiper = new Swiper(".swiper-container", {
  grabCursor: true,
  spaceBetween: 30,
  slidesPerView: "3",
  loop: false,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 0,
    modifier: 1,
    slideShadows: false,
  }
})

