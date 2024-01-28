console.log("hallo");

const prev = document.querySelector('.pref');
const next = document.querySelector('.next');

let index = 0;
function fadeout() {
    let slider = document.getElementById('imageslider')
    slider.style.opacity = '10%';
    setTimeout(function () {
        slider.style.background = 'aliceblue';
        slider.style.opacity = '100%';
    }, 150);
}
function fadein() {
    let slider = document.getElementById('imageslider')
    slider.style.opacity = 0;
    
    setTimeout(function () {
        slider.style.opacity = 1;
    }, 100);
}
function PrevSlider(request, event) {

    let gambar = ['../images/tuluspage/1.png', '../images/tuluspage/2.jpg'];
    let slider = document.getElementById('imageslider')
    index += request;
    let opacity = 0;
    if (index != gambar.length) {
        console.log('kurang nih');
        slider.src = gambar[index];
        slider.src.animation = 'animation2'
    } else {
        slider.style.display = 'flex';
        index = 0;
        slider.src = gambar[index];
        console.log(index);
    }

    console.log("jalan");
}

// const dataElement = document.getElementById('imageslider')
// dataElement.style.opacity = 0

// function go(event) {
// //   event.preventDefault()
//   dataElement.animate({
//     opacity: [0, 1]
//   }, 700).onfinish = () => dataElement.style.opacity = 1
// }
// document.getElementById('clicker').addEventListener('click', go)