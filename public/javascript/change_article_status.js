
//zmiana statusu artykulu
document.addEventListener("DOMContentLoaded", function() {
    const checkboxes = document.querySelectorAll('.publish-checkbox');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const articleId = this.getAttribute('data-article-id');
            const isPublished = this.checked ? 'true' : 'false'; // Przekazujemy wartość 'true' lub 'false'

            // Wywołanie fetch, aby zaktualizować status artykułu
            fetch('/updateArticleStatus', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    article_id: articleId,
                    published: isPublished
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Status artykułu został zaktualizowany!');
                    } else {
                        console.error('Błąd podczas aktualizacji statusu');
                    }
                })
                .catch(error => console.error('Wystąpił błąd: ', error));
        });
    });
});
