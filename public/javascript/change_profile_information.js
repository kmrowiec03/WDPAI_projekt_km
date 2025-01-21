// Edycja danych użytkownika
const editButton = document.getElementById('editProfile');
const saveButton = document.getElementById('saveProfile');
const inputs = document.querySelectorAll('#profileForm input');

editButton.addEventListener('click', () => {
    inputs.forEach(input => input.readOnly = false);
    editButton.style.display = 'none';
    saveButton.style.display = 'inline-block';
});

saveButton.addEventListener('click', (e) => {
    e.preventDefault();
    inputs.forEach(input => input.readOnly = true);
    editButton.style.display = 'inline-block';
    saveButton.style.display = 'none';
});

// Wykresy postępów
const ctx1 = document.getElementById('progressChart1').getContext('2d');
const ctx2 = document.getElementById('progressChart2').getContext('2d');

const chart1 = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Tydzień 1', 'Tydzień 2', 'Tydzień 3', 'Tydzień 4'],
        datasets: [{
            label: 'Postęp siły',
            data: [5, 10, 15, 20],
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true
            }
        }
    }
});

const chart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Poniedziałek', 'Środa', 'Piątek'],
        datasets: [{
            label: 'Kalorie spalone',
            data: [500, 700, 800],
            backgroundColor: 'rgba(54, 162, 235, 0.6)'
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true
            }
        }
    }
});
