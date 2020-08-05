const navIcon = document.querySelector('.site-header-menu-trigger');
const menuModal = document.querySelector('.menu-modal');
const closeIcon = document.querySelector('.site-header-menu-close');

//$closeIcon = '<?php echo get_template_directory_uri() . \'/assets/icons/close.svg\' ?>';
navIcon.addEventListener('click', () => {
  menuModal.classList.add('site-header-menu-active');
  //navIcon.setAttribute("src", $closeIcon);
  navIcon.style.opacity = 0;
  closeIcon.style.opacity = 1;
});

closeIcon.addEventListener('click', () => {
  menuModal.classList.remove('site-header-menu-active');
  navIcon.style.opacity = 1;
  closeIcon.style.opacity = 0;
});
