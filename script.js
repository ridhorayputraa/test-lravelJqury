const menu = document.getElementById('menu-button')
const sidebarc = document.getElementsByClassName('sidebar')[0];

console.log('mantap')

menu.addEventListener('click', function(){
    sidebarc.classList.toggle('hide');
console.log('ok')
})