let navLinks = document.getElementById('navLinks');
let showMenu = document.getElementById('showMenu');
let closeMenu = document.getElementById('closeMenu');



showMenu.addEventListener('click',()=>{
    navLinks.style.top='0'
    navLinks.style.height='100vh'
})

closeMenu.addEventListener('click',()=>{
    navLinks.style.top='-520px'
    navLinks.style.height='0vh'
})



console.log(navLinks,showMenu,closeMenu);

