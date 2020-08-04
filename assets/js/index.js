

const navIcon = document.querySelector('.site-header-menu-trigger');
const menuModal = document.querySelector('.menu-modal');

navIcon.addEventListener('click', () => {
  menuModal.classList.add('site-header-menu-active');
  
});
