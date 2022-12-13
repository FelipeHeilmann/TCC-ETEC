const denunciaPerdido = document.querySelector('#perdido');
const denunciaRisco = document.querySelector('#risco');
const btn = document.querySelector("#home");
let footer = document.querySelector('#footer');
let latitude_abandoned = document.querySelector('#latitude_abandoned');
let latitude_risk = document.querySelector('#latitude_risk');
let longitude_abandoned = document.querySelector('#longitude_abandoned');
let longitude_risk = document.querySelector('#longitude_risk');

function sucess(position){
    latitude_abandoned.value=position.coords.latitude;
    latitude_risk.value=position.coords.latitude;
    longitude_abandoned.value=position.coords.longitude;
    longitude_risk.value=position.coords.longitude;
}
function error(err){
    console.log(err);
}
var watchID = navigator.geolocation.watchPosition(sucess,error,{
    timeout: 5000
});

function perdidoModal(modalId){
    let modal = document.querySelector(modalId);
    modal.classList.add('show');
    body.style.overflow = "hidden";
    footer.style.position = 'static';
    modal.addEventListener('click', (e)=>{
        if(e.target.className == 'back-btn' || e.target.className == 'fa fa-chevron-left'){
            modal.classList.remove('show');
            body.style.overflow = "visible";
            footer.style.position = 'fixed';
        }
    })
}

function riscoModal(modalRiscoId){
    let modal = document.querySelector(modalRiscoId);
    modal.classList.add('show');
    body.style.overflow = "hidden";
    footer.style.position = 'static';
    modal.addEventListener('click', (e)=>{
        if(e.target.className == 'back-btn' || e.target.className == 'fa fa-chevron-left'){
            modal.classList.remove('show');
            body.style.overflow = "visible";
            footer.style.position = 'fixed';
        }
    })
}

denunciaPerdido.addEventListener('click', ()=>{
    perdidoModal('#modal-abandoned');
})

denunciaRisco.addEventListener('click', ()=>{
    riscoModal('#modal-risk')
})











