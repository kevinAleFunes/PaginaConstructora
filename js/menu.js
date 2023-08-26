const menu_uno = document.querySelector('.menu_uno')
const menu = document.querySelector('.menu-navegacion')

console.log(menu)
console.log(menu_uno)


menu_uno.addEventListener('click', ()=>{
    menu.classList.toggle('spread')
})


window.addEventListener('click', e=>{
    if(menu.classList.contains('spread')
        && e.target != menu && e.target != menu_uno){
            menu.classList.toggle('spread')
    }
})