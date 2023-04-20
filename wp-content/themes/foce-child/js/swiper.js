// ---------- Swiper ----------

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
  },
  breakpoints: {
    700: {
      slidesPerView: "1"
    },
    1000: {
      slidesPerView: "2"
    }
  }
})