const menuBtn = document.querySelector(".hamburger");
const menuItems = document.querySelector(".nav-links");
const menuItem = document.querySelectorAll(".nav-link");

// main toggle
menuBtn.addEventListener("click", () => {
  toggle();
});

// toggle on item click if open
menuItem.forEach((item) => {
  item.addEventListener("click", () => {
    if (menuBtn.classList.contains("open")) {
      toggle();
    }
  });
});

function toggle() {
  menuBtn.classList.toggle("open");
  menuItems.classList.toggle("open");
}


// SLIDER CONTROL

new Glider(document.querySelector('.glider'), {
  // Mobile-first defaults
  slidesToShow: 1,
  slidesToScroll: 0.5,
  scrollLock: true,
  arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
  },
  responsive: [
      {
      // screens greater than >= 1024px
      breakpoint: 1024,
      settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          itemWidth: 150,
          duration: 0.25
      }
      }
  ]
  });
