let latitude_animal = document.querySelector('#latitude_animal').value;
let longitude_animal = document.querySelector('#longitude_animal').value;
const delete_button = document.querySelector('.delete-button');
const cancel = document.querySelector('#cancel');
let divmap = document.querySelector('.map');
let modal = document.querySelector('#modal');

var map = L.map('map').setView([latitude_animal, longitude_animal],16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([latitude_animal, longitude_animal]).addTo(map)
.bindPopup('O animal foi visto aqui!')
.openPopup();

delete_button.addEventListener('click', ()=>{
    modal.classList.add('show');
    divmap.style.display = 'none'
})

cancel.addEventListener('click', ()=>{
    modal.classList.remove('show');
    divmap.style.display = 'block';
})