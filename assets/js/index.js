const menuTrigger = document.querySelector('.site-header-menu-trigger');
const menuModal = document.querySelector('.menu-modal');

menuTrigger.addEventListener('click', () => {
  document.body.classList.toggle('site-header-menu-active-bg');
  menuModal.classList.toggle('site-header-menu-active');
  menuTrigger.querySelector("img:nth-of-type(1)").classList.toggle("invisible");
  menuTrigger.querySelector("img:nth-of-type(2)").classList.toggle("invisible");
});
