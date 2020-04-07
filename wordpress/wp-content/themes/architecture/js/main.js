

//adding header bg on scroll

const navBg = document.querySelector('.site-header');
addEventListener('scroll', () =>{
  if(scrollY > 100) {
    navBg.style.background = 'black';
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
  preloader.classList.add('loader-finish')
});


// let galleryImages = document.querySelectorAll('.gallery-item');
let getLatestOpenedImg;
let windowWidth = window.innerWidth;

if(galleryImages) {
  galleryImages.forEach((image, index)=>{
    image.addEventListener('click',()=>{
      // taking img src from css
      let getElementCss = window.getComputedStyle(image);
      let getFullImgUrl = getElementCss.getPropertyValue('background-image');
      let getImgUrlPos = getFullImgUrl.split('/images/');
      let setNewImgUrl = getImgUrlPos[1].replace('")','');

      getLatestOpenedImg = index + 1;
      //create div element for image
      let container = document.body;
      let newImgWindow = document.createElement('div');
      container.appendChild(newImgWindow);
      newImgWindow.setAttribute('class', 'img-window');


      // adding src of image to element
      let newImg = document.createElement('img');
      newImgWindow.appendChild(newImg);
      newImg.setAttribute('src','../images/'+setNewImgUrl);
      newImg.setAttribute('id','current-img');

      newImg.addEventListener('load',() => {
        // next btn
        let imgWidth = newImg.width;
        let caclImgToEdge = ((windowWidth - imgWidth) / 2) - 80;

        let nextBtn = document.createElement('a');
        let nextText = document.createTextNode('next');
        nextBtn.appendChild(nextText);
        container.appendChild(nextBtn);
        nextBtn.setAttribute('class', 'img-btn-next');
        nextBtn.addEventListener('click', () => {
          document.querySelector('#current-img').remove();

          let getImgWindow = document.querySelector('.img-window');
          let newImg = document.createElement('img');
          getImgWindow.appendChild(newImg);
          let calcNewImg;
          calcNewImg = getLatestOpenedImg + 1;

          if(calcNewImg > galleryImages.length) {
            calcNewImg = 1;
          }
          newImg.setAttribute('src','../images/img'+ calcNewImg +'.jpg');
          newImg.setAttribute('id', 'current-img');
          getLatestOpenedImg = calcNewImg;
             //position nexxtbtn and prev btn after images load
          newImg.addEventListener('load',() => {
            let imgWidth = newImg.width;
            let caclImgToEdge = ((windowWidth - imgWidth) / 2) - 80;
            let nextBtn = document.querySelector('.img-btn-next');
            nextBtn.style.cssText = 'right:' + caclImgToEdge + 'px;' ;
            let prevBtn = document.querySelector('.img-btn-prev');
            prevBtn.style.cssText = 'left:' + caclImgToEdge + 'px;' ;
          });
        });
        nextBtn.style.cssText = 'right:' + caclImgToEdge + 'px;' ;

        // prev btn
        let prevBtn = document.createElement('a');
        let prevText = document.createTextNode('prev');
        prevBtn.appendChild(prevText);
        container.appendChild(prevBtn);
        prevBtn.setAttribute('class', 'img-btn-prev');
        prevBtn.addEventListener('click', () => {
          document.querySelector('#current-img').remove();

          let getImgWindow = document.querySelector('.img-window');
          let newImg = document.createElement('img');
          getImgWindow.appendChild(newImg);
          let calcNewImg;
          calcNewImg = getLatestOpenedImg - 1;

          if(calcNewImg < 1) {
            calcNewImg = galleryImages.length;
          }
          newImg.setAttribute('src','../images/img'+ calcNewImg +'.jpg');
          newImg.setAttribute('id', 'current-img');
          getLatestOpenedImg = calcNewImg;
             //position nexxtbtn and prev btn after images load
          newImg.addEventListener('load',() => {
            let imgWidth = newImg.width;
            let caclImgToEdge = ((windowWidth - imgWidth) / 2) - 80;
            let nextBtn = document.querySelector('.img-btn-next');
            nextBtn.style.cssText = 'right:' + caclImgToEdge + 'px;' ;
            let prevBtn = document.querySelector('.img-btn-prev');
            prevBtn.style.cssText = 'left:' + caclImgToEdge + 'px;' ;
          });
        });
        prevBtn.style.cssText = 'left:' + caclImgToEdge + 'px;' ;

      });
      // funcstion to close modal if outside click
      newImgWindow.addEventListener('click',(e)=>{
        if(e.target == newImgWindow) {
          newImgWindow.remove();
          document.querySelector('.img-btn-next').remove();
          document.querySelector('.img-btn-prev').remove();
        }
      })
    });
  });
}
