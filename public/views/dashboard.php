<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="public/styles/styles.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include("public/views/navigation/navigation.php"); ?>
<!-- Nagłówek -->
<header class="header-main-page">
    <div class="rectangle-container" >
        <h1 class="title">Zbuduj swój plan treningowy i śledź postępy</h1>
        <p class="subtitle">Personalizowane plany, analizy wyników, motywacja i współzawodnictwo</p>

    </div>
</header>

<!-- Korzyści -->
<section class="benefits">
    <div class="rectangle-container">
        <h2>Co oferujemy?</h2>
        <div class="benefits-container">
            <div class="benefit-item">
                <h3>Spersonalizowane plany treningowe</h3>
                <p>Dopasowane do Twoich celów i poziomu zaawansowania.</p>
            </div>
            <div class="benefit-item">
                <h3>Analiza postępów</h3>
                <p>Śledź swoje wyniki i poprawiaj swoje czasy!</p>
            </div>
            <div class="benefit-item">
                <h3>Tablica rekordów</h3>
                <p>Porównuj swoje wyniki z innymi biegaczami.</p>
            </div>
        </div>
    </div>
</section>

<!-- Społeczność -->
<section class="community">
    <div class="rectangle-container" >
        <h2>Dołącz do naszej społeczności</h2>
        <p>Rywalizuj ze znajomymi,rodzina a co najwazniejsze ze samym soba</p>
        <div class="container-for-buttons">
            <a href="\register" class="btn-primary">Zarejestruj się teraz</a>
            <a href="\login" class="btn-secondary">Zaloguj się</a>
        </div>
    </div>
</section>

<!-- Sekcja z rekordami -->
<section class="records">
    <div class="rectangle-container" >
        <h2>Top rekordy</h2>
        <div class="records-list">
            <div class="record">
                <p><strong>Jan Kowalski</strong> - 5 km w 18:45</p>
            </div>
            <div class="record">
                <p><strong>Kasia Nowak</strong> - 10 km w 39:20</p>
            </div>
            <div class="record">
                <p><strong>Marek Zieliński</strong> - Maraton w 2:50:05</p>
            </div>
        </div>
        <a href="#records" class="btn-secondary">Zobacz wszystkie rekordy</a>
    </div>
</section>

<!-- Stopka -->
<footer class="footer">
    <div class="rectangle-container" >
        <p>&copy; 2025 Platforma Treningowa. Wszystkie prawa zastrzeżone.</p>
    </div>
</footer>
</body>
</html>
