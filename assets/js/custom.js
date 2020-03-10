
const header = document.querySelector('.header-nav'); 
const btnUp = document.createElement('div')
btnUp.setAttribute('class', 'btn-up');
btnUp.id = 'btn-up'
btnUp.style.fontSize = '2em'
btnUp.style.opacity = '0'
btnUp.classList.add('color-savo')
btnUp.classList.add('d-flex')
btnUp.classList.add('justify-content-center')
btnUp.classList.add('align-items-center')
btnUp.innerHTML = '<i class="fas fa-arrow-up"></i>'
document.body.appendChild(btnUp)

let posicionScroll = 0

//Control de botón up
let controlBtnUp = () => {

    intervalo = setInterval(function() {

        posicionScroll -= 50; 

        if(posicionScroll === header.offsetTop || posicionScroll < 0) {
            posicionScroll = 0; 
            clearInterval(intervalo)
        }
        window.scrollTo(0, posicionScroll);

    }, 20)
}

window.addEventListener('scroll', (e) => {
    //Control de botón up
    posicionScroll = window.pageYOffset;
    
    //Control del header
    
    if(scrollY > 150) {
        // header.style.backgroundColor = 'rgba(255, 255, 255, .5)'
        
        btnUp.style.cursor = 'pointer'
        btnUp.style.opacity = '1'
        btnUp.addEventListener('click', controlBtnUp)
    }else { 
        // header.style.backgroundColor = 'rgba(255, 255, 255, 1)'
        
        
        btnUp.style.opacity = '0'
        btnUp.style.cursor = 'default'
        btnUp.removeEventListener('click', controlBtnUp)
    }

    if(document.querySelector('.bg-sistema') != null) {

        if( scrollY >= (document.querySelector('.bg-sistema').offsetTop - 150) ) {
     
            gsap.to(".pantallas", {opacity: 1, duration: 2, x: 50});
        }
    }
    if(document.querySelector('.bg-somos') != null) {

        if( scrollY >= (document.querySelector('.bg-somos').offsetTop - 100) ) {
             
            gsap.to(".animate-text-3", {opacity: 1, duration: 2, scale: 1});
        }
    }

    /*Animaciones de Productos */

    if(document.querySelector('.animate-sec-1') != null) {

        if( scrollY >= (document.querySelector('.animate-sec-1').offsetTop - 300) ) {
             
            gsap.to(".animate-img-2", {opacity: 1, duration: 1, y:20});
        }
    }

    if(document.querySelector('.animate-sec-2') != null) {

        if( scrollY >= (document.querySelector('.animate-sec-2').offsetTop - 300) ) {
             
            gsap.to(".animate-img-3", {opacity: 1, duration: 1, x:100});
        }
    }

    if(document.querySelector('.animate-sec-3') != null) {

        if( scrollY >= (document.querySelector('.animate-sec-3').offsetTop - 300) ) {
             
            gsap.to(".animate-img-4", {opacity: 1, duration: 1, x:20});
        }
    }
    if(document.querySelector('.animate-sec-4') != null) {

        if( scrollY >= (document.querySelector('.animate-sec-4').offsetTop - 300) ) {
             
            gsap.to(".animate-img-5", {opacity: 1, duration: 1, scale:.8, x:-50});
        }
    }
    
 

})

/*Animaciones del index */

document.querySelectorAll('.pantallas').forEach(function(el) {
    el.style.opacity = 0
    el.style.transform = 'traslateX(-100%)'
}) 

document.querySelectorAll('.animate-text-3').forEach(function(el) {
    el.style.opacity = 0
    el.style.transform = 'scale(0)'
}) 

//Animación de bg-info al cargar
if(document.querySelector('.animate-text') != null) {

    gsap.from(".animate-text", {opacity: 0, duration: 2, y: -50});
}


/*Animaciones de Productos */
if(document.querySelector('.animate-img') != null ||
 document.querySelector('.animate-img-2') != null ||
 document.querySelector('.animate-img-3') != null ||
 document.querySelector('.animate-img-4') != null ||
 document.querySelector('.animate-img-5') != null 
 ) {
    
    gsap.from(".animate-img", {opacity: 0, duration: 1, x: 100});
    document.querySelector('.animate-img-2').style.opacity = '0'
    document.querySelector('.animate-img-3').style.opacity = '0'
    document.querySelector('.animate-img-4').style.opacity = '0'
    document.querySelector('.animate-img-5').style.opacity = '0'
    document.querySelector('.animate-img-5').style.transform = 'scale(0)'
}



/*Animaciones de Nosotros */
if(document.querySelector('.animate-text-4') != null || document.querySelector('.animate-text-5') != null) {
    
    gsap.from(".animate-text-4", {opacity: 0, duration: 2, y: -50});
    gsap.from(".animate-text-5", {opacity: 0, duration: 1, y: -50});
}
