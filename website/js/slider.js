let thumbnails = document.getElementsByClassName('product-card');
let slider = document.getElementById('slider');

let buttonRight = document.getElementById('slide-right');
let buttonLeft = document.getElementById('slide-left');

buttonLeft.addEventListener('click', function(){
    console.log("yes");
    slider.scrollLeft -= 500;
})

buttonRight.addEventListener('click', function(){
    console.log("yes");
    slider.scrollLeft += 500;
})

const maxScrollLeft = slider.scrollWidth - slider.clientWidth;
// alert(maxScrollLeft);
// alert("Left Scroll:" + slider.scrollLeft);
