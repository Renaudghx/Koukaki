// ---------- Swiper.js ----------

// core version:
import Swiper from "swiper";
// import Swiper styles :
import '../../../../node_modules/swiper/swiper-bundle.css';

// init Swiper:

const swiper = new Swiper(".swiper-container", {
  loop: true,
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "4",
  coverflowEffect: {
      modifier: 1,
  }
})