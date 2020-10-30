// Toggle mobile navigation

const menuTrigger = document.querySelector('.site-header-menu-trigger');
const menuModal = document.querySelector('.menu-modal');
const overlay = document.querySelector('.mobile-overlay');

menuTrigger.addEventListener('click', () => {
  overlay.classList.toggle('mobile-overlay-active');
  menuModal.classList.toggle('site-header-menu-active');
  menuTrigger.querySelector("img:nth-of-type(1)").classList.toggle("invisible");
  menuTrigger.querySelector("img:nth-of-type(2)").classList.toggle("invisible");
});

// Toggle faq answer

const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
  //const faqToggleAnswer = faq.querySelector('.faq-toggle-answer');

  faq.onclick = (e) => {

    faqs.forEach(item => {
      if(item !== faq) {
        item.classList.remove('show-answer');
      }
    });

    faq.classList.toggle('show-answer');
  }
});

// Add class name to primary menu cta link & modal menu cta.

const ctaLink = document.querySelector('.primary-menu li:last-child a');
ctaLink.classList.add('btn-call-to-action');

const ctaLinkModal = document.querySelector('.modal-menu li:last-child a');
ctaLinkModal.classList.add('btn-call-to-action');

// Animate on scroll
// Detect request animation frame

var scroll = window.requestAnmationFrame ||
             // IE fallback
             function(callback){ window.setTimeout(callback, 1000/60)};
var elementsToShow = document.querySelectorAll('.show-on-scroll');

function loop() {
  elementsToShow.forEach(function(element) {
    if(isElementInViewport(element)) {
      element.classList.add('is-vissble');
    } else {
      element.classList.remove('is-visible');
    }
  });

  scroll(loop);
}

// call the loop for the first time

loop();
