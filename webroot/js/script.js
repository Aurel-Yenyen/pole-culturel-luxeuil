// **************** Menu Burger ********************

let burger = document.getElementById('menu')
let close = document.getElementById('close')
let overlay = document.getElementById('overlay')
let menuNav = document.getElementById('nav')
let body = document.getElementById('body')

burger.addEventListener('click', openOverlay =>{
    overlay.style.visibility = 'visible'
    menuNav.style.visibility = 'visible'
    close.style.visibility = 'visible'
    body.style.overflow = 'hidden'
});
close.addEventListener('click', closeOverlay =>{
    overlay.style.visibility = 'hidden'
    menuNav.style.visibility = 'hidden'
    close.style.visibility = 'hidden'
    body.style.overflow= 'initial'
})


// **************** Caroussel ********************


let cross1 = document.getElementById('radio1')
let cross2 = document.getElementById('radio2')
let cross3 = document.getElementById('radio3')
let cards = document.getElementById('cards')
let input = document.getElementById('input-img')

input.addEventListener('click', choix => {

    if (cross1.checked){
        cards.style.transform = 'translateX(0)'
        cards.style.transition = 'transform 3s ease-in-out'
        }
    else if (cross2.checked){
        cards.style.transform = 'translateX(-100vw)' 
        cards.style.transition = 'transform 3s ease-in-out'
    }
    else if (cross3.checked){
        cards.style.transform = 'translateX(-200vw)'   
        cards.style.transition = 'transform 3s ease-in-out' 
    }
})


// **************** Caroussel Partenaire ********************


