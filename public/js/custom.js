'use strict';

const menuItem = document.getElementById('curs');
const dropDownMenu = document.getElementById('drop-down_menu');


menuItem.addEventListener('click', () =>{
    console.log(dropDownMenu)
    if(!dropDownMenu.classList.contains('active')){
        dropDownMenu.classList.add('active');
    } else {
        dropDownMenu.classList.remove('active');
    }
})
