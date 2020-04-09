

//adding header bg on scroll

const navBg = document.querySelector('.site-header');
addEventListener('scroll', () =>{
  if(scrollY > 100) {
    navBg.style.background = '#0a0a0a';
  } else {
    navBg.style.background = 'transparent';
  }
});

// menu trigger
const menuToggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.main-navigation');


menuToggle.addEventListener('click', () => {
  const getElementCss = window.getComputedStyle(nav);
  const elementDisplay = getElementCss.getPropertyValue('display');

  if(elementDisplay === 'none') {
    nav.style.display = 'block';
  }
  else if(elementDisplay === 'block') {
    nav.style.display = 'none';
  }
});

// preloader
window.addEventListener('load',() =>{
  const preloader = document.querySelector('.preloader');
  setTimeout(() => {
    preloader.classList.add('loader-finish');
  },1500)
});


