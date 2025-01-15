// Get modal and button
const modal = document.getElementById('modal');
const openModalButton = document.getElementById('openModal');
const closeModalButton = document.getElementById('closeModal');
const messageModal = document.getElementById('message-modal');
const closeMessageModalButton = document.getElementById('closeMessageModal');
const modalMessage = document.getElementById('modal-message');
const form = document.getElementById('article-form');
// Open the modal when clicking the plus button
openModalButton.addEventListener('click', function() {
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
});

// Close the modal when clicking the close button (×)
closeModalButton.addEventListener('click', function() {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
});

// Close the modal if the user clicks outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    } else if (event.target === messageModal) {
        messageModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
});


form.addEventListener("submit", async function (e) {
    e.preventDefault(); // Prevent page reload

    const formData = new FormData(this);

    try {
        const response = await fetch("/add_article", {
            method: "POST",
            body: formData,
        });

        // Sprawdzamy, czy odpowiedź jest poprawna
        const result = await response.json();

        console.log(result); // Dodać logowanie odpowiedzi serwera w konsoli

        if (result.status === "success") {
            // Show success message and reset the form
            modalMessage.textContent = result.message;
            form.reset(); // Clear the form
        } else {
            // Show error message
            modalMessage.textContent = result.message;
        }

        // Display the message modal
        messageModal.style.display = "flex";

        // Close the add article modal
        modal.style.display = "none";
    } catch (error) {
        console.error("Error submitting the form:", error);
        modalMessage.textContent = "Wystąpił błąd przy dodawaniu artykułu.";
        messageModal.style.display = "flex";
        modal.style.display = "none";
    }
});
closeMessageModalButton.addEventListener("click", function() {
    messageModal.style.display = 'none';
});