
//otworzenie okna z treningiem
function openWorkoutModal(workoutId, workoutName, workoutDescription) {
    const modal = document.getElementById('workoutModal');
    const title = document.getElementById('modalWorkoutTitle');
    const description = document.getElementById('modalWorkoutDescription');

    title.textContent = workoutName;
    description.textContent = workoutDescription;

    const exercisesContainer = document.getElementById('modalExercises');
    exercisesContainer.innerHTML = '<p>Loading exercises...</p>';

    fetch(`/getExercises/${workoutId}`)
        .then(response => response.json())
        .then(exercises => {
            exercisesContainer.innerHTML = '';
            if (exercises.length > 0) {
                exercises.forEach(exercise => {
                    const exerciseItem = document.createElement('div');
                    exerciseItem.className = 'exercise-item';

                    exerciseItem.innerHTML = `
                        <h4>${exercise.name}</h4>
                        <p>Sets: ${exercise.sets}</p>
                        <p>Reps: ${exercise.reps}</p>
                        <p>Rest Time: ${exercise.rest_time} sec</p>
                        <p id="currentWeight-${exercise.id}">Current weight: ${exercise.kg_result} kg</p>
                        <input type="number" id="kgInput-${exercise.id}" placeholder="Enter kg">
                        <button onclick="saveKgResult(${exercise.id})">Save</button>
                    `;

                    exercisesContainer.appendChild(exerciseItem);
                });
            } else {
                exercisesContainer.innerHTML = '<p>No exercises found.</p>';
            }
        })
        .catch(err => {
            exercisesContainer.innerHTML = '<p>Error loading exercises.</p>';
            console.error(err);
        });

    modal.style.display = 'flex';
}

function closeModal() {
    const modal = document.getElementById('workoutModal');
    modal.style.display = 'none';
}


//aktualizacja kg z fetchAPI
function saveKgResult(exerciseId) {
    const kgInput = document.getElementById(`kgInput-${exerciseId}`).value; // Pobierz wartość z odpowiedniego inputu

    if (!kgInput) {
        alert('Please enter the kg value');
        return;
    }

    console.log('Sending data:', {
        exerciseId: exerciseId,
        kgResult: parseInt(kgInput),
    });


    fetch('/updateExerciseKgResult', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            exerciseId: exerciseId,
            kgResult: parseInt(kgInput),
        }),
    })
        .then((response) => response.json()) // Oczekuj odpowiedzi w formacie JSON
        .then((data) => {
            if (data.success) {
                //aktualizacja po zmianie na nowa wartosc
                const currentWeightElement = document.getElementById(`currentWeight-${exerciseId}`);
                if (currentWeightElement) {
                    currentWeightElement.textContent = `Current weight: ${kgInput} kg`;
                }
            } else {
                alert('Failed to update kg result: ' + data.error);
            }
        })
        .catch((err) => {
            console.error(err);
            alert('Error updating kg result');
        });
}
//aktualizacja przerobionych treningow z fetchAPI
function markWorkoutAsCompleted(workoutId) {
    const checkbox = document.getElementById(`completed-${workoutId}`);
    const workoutElement = document.querySelector(`.Container_for_window[data-id="${workoutId}"]`);

    if (workoutElement) {
        // Natychmiastowa zmiana w UI
        if (checkbox.checked) {
            workoutElement.classList.add('completed'); // Dodaj zieloną ramkę (lub inny styl)
        } else {
            workoutElement.classList.remove('completed'); // Usuń zieloną ramkę
        }
    }

    // Wyślij stan do serwera, aby zaktualizować w bazie danych
    fetch(`/markWorkoutAsCompleted/${workoutId}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ completed: checkbox.checked }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (!data.success) {
                alert('Error: ' + data.error);
                if (workoutElement) {
                    if (checkbox.checked) {
                        workoutElement.classList.remove('completed');
                    } else {
                        workoutElement.classList.add('completed');
                    }
                }
            }
        })
        .catch((error) => {
            console.error('Error:', error);
            // Jeśli jest błąd, cofnij zmiany w UI
            if (workoutElement) {
                if (checkbox.checked) {
                    workoutElement.classList.remove('completed');
                } else {
                    workoutElement.classList.add('completed');
                }
            }
        });
}




