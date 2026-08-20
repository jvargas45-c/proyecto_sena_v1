const imagenes = [
    "img/prueba_promo1.JPG",
    "img/prueba_promo2.JPG"
];

let actual = 0;

const slide = document.getElementById("slide");
document.getElementById("next").addEventListener("click", ()=>{
    
    actual++;

    if(actual >= imagenes.length){
        actual = 0;
    }

    slide.src = imagenes[actual];
});

document.getElementById("prev").addEventListener("click", ()=>{
    actual--;

    if(actual < 0){
        actual = imagenes.length -1;
    }

    slide.src = imagenes[actual];
});

setInterval(()=>{
    actual++;

    if(actual >= imagenes.length){
        actual = 0;
    }

    slide.src = imagenes[actual];
}, 5000);

const menuBtn = document.getElementById('menuBtn');
const dropdownMenu = document.getElementById('dropdownMenu');

menuBtn.addEventListener('click', () => {
  dropdownMenu.classList.toggle('hidden');
});

document.addEventListener('click', (e) => {
  if (!menuBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
    dropdownMenu.classList.add('hidden');
  }
});