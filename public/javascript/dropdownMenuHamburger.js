
const hamburgerButton = document.querySelector('.HamburgerButton');
const dropdownMenu = document.querySelector('.DropdownMenu');

hamburgerButton.addEventListener('click', () => {
    dropdownMenu.classList.toggle('show');
});

document.addEventListener('click', (event) => {
    if (!dropdownMenu.contains(event.target) && !hamburgerButton.contains(event.target)) {
        dropdownMenu.classList.remove('show');
    }
});