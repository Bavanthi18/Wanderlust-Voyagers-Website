
let navbar = document.querySelector('.header .navbar');
/*let video = document.querySelector('.vid-btn');*/

/*let videoBtn = document.querySelectorAll('.vid-btn');*/



let themeBtn = document.querySelector('#theme-btn');

themeBtn.onclick = () =>{
  themeBtn.classList.toggle('fa-sun');

  if(themeBtn.classList.contains('fa-sun')){
    document.body.classList.add('active');
  }else{
    document.body.classList.remove('active');
  }
}


/*menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};*/

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};




var swiper = new swiper(".reviews-slider", {
	loop:true,
	spaceBetween: 20,
	autoHeight:true,
	grabCursor:true,
     breakpoints: {
        640: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });

