
//Slide Carousel (Vanilla JS, no Bootstrap)

const slides = document.querySelectorAll(".slide");
// Current Slide Counter
let currentSlide = 0;
// Last Slide in a Carousel
let lastSlide = slides.length - 1;

// Loop through slides and set each slides translateX
slides.forEach((slide, indx) => {
  slide.style.transform = `translateX(${indx * 100}%)`;
});

// Select next slide button
const nextSlide = document.querySelector(".btn-next");
// addEventListener and navigation functionality (nextSlide)
nextSlide.addEventListener("click", function () {
  // Check if current slide is the last and reset current slide
  if (currentSlide === lastSlide) {
    currentSlide = 0;
  } else {
    currentSlide++;
  }
  // Move slide by -100%
  slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${100 * (indx - currentSlide)}%)`;
  });
});


// Select next slide button
const prevSlide = document.querySelector(".btn-prev");

// addEventListener and Navigation Functionality (prevSlide)
prevSlide.addEventListener("click", function () {
  // Check if current slide is the first and reset current slide to last
  if (currentSlide === 0) {
    curSlide = lastSlide;
  } else {
    currentSlide--;
  }
  // Move slide by 100%
  slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${100 * (indx - currentSlide)}%)`;
  });
});

//Slide Carousel Ends Here



var dialogs = anime.timeline()
.add({
  targets: '#phrase1',
  opacity: [0, 1],
  keyframes: [
      {
          
          translateX: 10
      }
  ],
  duration: 700,
  easing: 'easeInOutQuad',
  autoplay: false,
  loop: false

  
})
.add({
  targets: '#phrase2',
  opacity: [0, 1],
  keyframes: [
      {
          
          translateX: 10
      }
  ],
  duration: 700,
  easing: 'easeInOutQuad',
  autoplay: false,
  loop: false
});

dialogs.pause();


const trymeButton = document.getElementById("tryme");

trymeButton.addEventListener(`click`, function () {
  dialogs.play();
}
)



