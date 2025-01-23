function openWorkoutModal(workoutId, workoutName, workoutDescription) {
    const modal = document.getElementById('workoutModal');
    const title = document.getElementById('modalWorkoutTitle');
    const description = document.getElementById('modalWorkoutDescription');

    title.textContent = workoutName;
    description.textContent = workoutDescription;

    // Wyczyszczenie poprzednich ćwiczeń
    const exercisesContainer = document.getElementById('modalExercises');
    exercisesContainer.innerHTML = '<p>Loading exercises...</p>';

    // Pobierz ćwiczenia dla treningu
    fetch(`/getExercises/${workoutId}`)
        .then(response => response.json())
        .then(exercises => {
            console.log('Exercises from server:', exercises); // Logowanie odpowiedzi
            exercisesContainer.innerHTML = ''; // Wyczyść poprzednią zawartość

            if (exercises.length > 0) {
                exercises.forEach(exercise => {
                    const exerciseItem = document.createElement('div');
                    exerciseItem.className = 'exercise-item';

                    const exerciseId = exercise.id; // Przypisanie id ćwiczenia
                    console.log('Exercise ID:', exerciseId); // Logowanie ID ćwiczenia

                    exerciseItem.innerHTML = `
                        <h4>${exercise.name}</h4>
                        <p>Sets: ${exercise.sets}</p>
                        <p>Reps: ${exercise.reps}</p>
                        <p>Rest Time: ${exercise.rest_time} sec</p>
                        <p>Current weight: ${exercise.kg_result} kg</p>
                        <input type="number" id="kgInput-${exerciseId}" placeholder="Enter kg">
                        <button onclick="saveKgResult(${exerciseId})">Save</button>
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
    modal.addEventListener('click', (event) => {
        if (event.target === modal) { // Sprawdza, czy kliknięto w tło (nie w modal-content)
            closeModal();
        }
    });
}


function closeModal() {
    const modal = document.getElementById('workoutModal');
    modal.style.display = 'none';
}


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
                // Jeśli jest błąd, cofnij zmiany w UI
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




