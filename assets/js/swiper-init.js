////////////////// Swiperを初期化 //////////////////

document.addEventListener('DOMContentLoaded', () => {
  const swiperContainer = document.querySelector('.js__member-swiper');

  if (swiperContainer) {
    const swiper = new Swiper('.js__member-swiper', {
      loop: true,
      loopedSlides: 10,
      allowTouchMove: false,
      slidesPerView: 'auto',
      speed: 4000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
        reverseDirection: true
      }
    });

    swiper.on('click', function() {
      swiper.slideToClickedSlide(swiper.clickedIndex);
    });
  }

  // リバース
  const swiperContainerReverse = document.querySelector(
    '.js__member-swiper-reverse'
  );

  if (swiperContainerReverse) {
    const swiperR = new Swiper('.js__member-swiper-reverse', {
      loop: true,
      loopedSlides: 10,
      allowTouchMove: false,
      slidesPerView: 'auto',
      speed: 4000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false
      },
      easing: 'linear'
    });

    swiperR.on('click', function() {
      swiperR.slideToClickedSlide(swiperR.clickedIndex);
    });
  }
});

// const classes = ['.js__member-swiper', '.js__member-swiper2'];
// classes.forEach(className => {
//   document.querySelectorAll(className).forEach(element => {
//     ScrollTrigger.create({
//       trigger: element,
//       start: 'bottom bottom+=100',
//       onEnter: () => restartSwiper(element, className),
//       onEnterBack: () => restartSwiper(element, className),
//       // markers: true,
//       once: true
//     });
//   });
// });

// function restartSwiper(element, className) {
//   const isReverseDirection = className === '.js__member-swiper';
//   const swiperInstance = new Swiper(element, {
//     loop: true,
//     loopedSlides: 1,
//     allowTouchMove: false,
//     slidesPerView: 'auto',
//     speed: 2000,
//     autoplay: {
//       delay: 1000,
//       disableOnInteraction: false,
//       reverseDirection: isReverseDirection
//     }
//   });
// }
