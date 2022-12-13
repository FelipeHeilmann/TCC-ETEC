const perfilIcon = document.querySelector('#perfil-icon');
let header = document.querySelector('#header');
let perfilSettings = document.querySelector('#perfil-settings');
const body = document.querySelector('body');
const closeBtn = document.querySelector('#close-btn');
const carousel = document.querySelector('.carousel');

perfilIcon.addEventListener('click', ()=>{
    header.style.position = 'static'
    perfilSettings.style.right = '0vw';
    carousel.style.paddingTop = '15px'
    carousel.style.paddingBottom = '20px'
})

closeBtn.addEventListener('click', ()=>{
    header.style.position = 'fixed'
    perfilSettings.style.right = '-50vw';
    carousel.style.paddingTop = '75px'
    carousel.style.paddingBottom = '80px'
})

$('#perfil-img').on('change', function(){
    var formData = new FormData();
    var file = $('#perfil-img').prop('files')[0];
    formData.append('file', file);

    $.ajax({
        url: './muda_foto.php',
        type: 'post',
        data: formData, 
        contentType: false,
        processData: false,   
    }).done(function(data){
        location.reload(true);
    })
})
