<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <link href="public/styles/styles.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php include("public/views/navigation/navigation.php"); ?>
    <div class="main-content">
    <div class="profile-container">
        <!-- Sekcja danych użytkownika -->
        <div class="user-details">
            <h2>Profil użytkownika</h2>
            <form id="profileForm">
                <label for="firstName">Imię:</label>
                <input type="text" id="firstName" value="John" readonly>

                <label for="lastName">Nazwisko:</label>
                <input type="text" id="lastName" value="Doe" readonly>

                <label for="email">Email:</label>
                <input type="email" id="email" value="john.doe@example.com" readonly>

                <label for="phone">Numer telefonu:</label>
                <input type="text" id="phone" value="123-456-789" readonly>

                <label for="dob">Data urodzenia:</label>
                <input type="date" id="dob" value="1990-01-01" readonly>

                <button type="button" id="editProfile">Edytuj</button>
                <button type="submit" id="saveProfile" style="display: none;">Zapisz</button>
            </form>
        </div>

        <!-- Sekcja wykresów -->
        <div class="progress-charts">
            <h2>Postęp w treningu</h2>
            <div class="chart" id="chart1">
                <canvas id="progressChart1"></canvas>
            </div>
            <div class="chart" id="chart2">
                <canvas id="progressChart2"></canvas>
            </div>
        </div>
    </div>

    </div>

    <script src="../../public/javascript/add_article_form.js"></script>
    <script src="../../public/javascript/dropdownMenuHamburger.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="change_profile_information.js"></script>

</body>
</html>