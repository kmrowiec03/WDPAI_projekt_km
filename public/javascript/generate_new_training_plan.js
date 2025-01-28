document.addEventListener('DOMContentLoaded', () => {
    const openModalBtn = document.getElementById('openModal');
    const modal = document.getElementById('trainingModal');
    const closeModalBtn = document.querySelector('.close');

    // Otwieranie modala
    openModalBtn.addEventListener('click', () => {
        modal.style.display = 'flex';
        modal.style.alignItems= 'center';
        modal.style.justifyContent = 'center'
    });

    // Zamykanie modala
    closeModalBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Zamykanie modala przy kliknięciu poza jego obszar
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});