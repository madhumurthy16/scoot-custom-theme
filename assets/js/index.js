const menuTrigger = document.querySelector('.site-header-menu-trigger');
const menuModal = document.querySelector('.menu-modal');
const overlay = document.querySelector('.mobile-overlay');

menuTrigger.addEventListener('click', () => {
  overlay.classList.toggle('mobile-overlay-active');
  menuModal.classList.toggle('site-header-menu-active');
  menuTrigger.querySelector("img:nth-of-type(1)").classList.toggle("invisible");
  menuTrigger.querySelector("img:nth-of-type(2)").classList.toggle("invisible");
});
