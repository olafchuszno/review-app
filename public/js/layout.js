const dropdownMenuButton = document.querySelector('#dropdown-menu-button');
const menuDropdown = document.querySelector('#menu-dropdown');


dropdownMenuButton.addEventListener('click', function () {

    menuDropdown.classList.toggle('hidden');
});