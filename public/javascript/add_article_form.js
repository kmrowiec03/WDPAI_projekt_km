
const modal = document.getElementById('modal');
const openModalButton = document.getElementById('openModal');
const closeModalButton = document.getElementById('closeModal');
const messageModal = document.getElementById('message-modal');
const closeMessageModalButton = document.getElementById('closeMessageModal');
const modalMessage = document.getElementById('modal-message');
const form = document.getElementById('article-form');
// otwieranie okienka z mozliwoscia dodania artykulu
openModalButton.addEventListener('click', function() {
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
});

// zamykanie okienka
closeModalButton.addEventListener('click', function() {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
});

// zamykanie okienka
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
    e.preventDefault();

    const formData = new FormData(this);

    try {
        const response = await fetch("/add_article", {
            method: "POST",
            body: formData,
        });

        const result = await response.json();


        if (result.status === "success") {
            // Show success message and reset the form
            modalMessage.textContent = result.message;
            form.reset(); // Clear the form
        } else {
            // Show error message
            modalMessage.textContent = result.message;
        }

        messageModal.style.display = "flex";
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