/* fixed header */
const header = document.querySelector('.header');
const headerContent = document.querySelector('.header__content');

window.addEventListener('scroll', () => {
  const offset = window.pageYOffset;

  if (offset < 70) {
    console.log('detach');
    header.classList.remove('fixed');
    headerContent.style.cssText =
      'border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 40px;';
  } else {
    console.log('fix');
    header.classList.add('fixed');
    headerContent.style.cssText = 'border-bottom: none; padding-bottom: 0;';
  }
});
