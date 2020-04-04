

//adding header bg on scroll

const navBg = document.querySelector('.site-header');
addEventListener('scroll', () =>{
  if(scrollY > 100) {
    navBg.style.background = 'black';
  } else {
    navBg.style.background = 'transparent';
  }
});
