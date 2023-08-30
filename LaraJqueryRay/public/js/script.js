console.log('mantap')

const menu = document.getElementById('menu-button')
const sidebarc = document.getElementsByClassName('nav-vertical')[0];
const content = document.getElementsByClassName('main')[0];

console.log('mantap')

const navcontent = document.getElementsByClassName('nav-content')

menu.addEventListener('click', function(){
    sidebarc.classList.toggle('collapse');
    content.classList.toggle('collapse-main');
console.log('ok')
})

// navContent.querySelector('p').textContent = navContent.querySelector('p').textContent.slice(0, 1);

// const navcontents = document.getElementsByClassName('nav-content');

// const contents = [];
// for (const navcontent of navcontents) {
//     contents.push(navcontent.querySelector('p'));
// }

// const logic = contents.querySelector('p').textContent = contents.querySelector('p').textContent.slice(0, 1);

// console.log(logic, "aksdoakodka")