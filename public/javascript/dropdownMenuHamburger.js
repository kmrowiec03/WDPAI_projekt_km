// Pobieranie elementów
const hamburgerButton = document.querySelector('.HamburgerButton');
const dropdownMenu = document.querySelector('.DropdownMenu');

// Dodanie obsługi kliknięcia
hamburgerButton.addEventListener('click', () => {
    dropdownMenu.classList.toggle('show');
});

//Zamknij menu po kliknięciu poza nim
document.addEventListener('click', (event) => {
    if (!dropdownMenu.contains(event.target) && !hamburgerButton.contains(event.target)) {
        dropdownMenu.classList.remove('show');
    }
});