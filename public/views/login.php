<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link href="../../public/styles/styles.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php include("public/views/navigation/navigation.php"); ?>
    <div class = "main-content Minions-background">
        <div class="Container_column">
            <div class="LogoContainer" style="height: 200px">
                <img src="public/images/logo.png" alt="Logo firmy" class="Logo Logo-big" width="450px">
            </div>

            <form action="/login" method="POST">

                <div class="form-section">
                    <input class="form-input" type="text" name="email"  id="emael" autocomplete='off' required >
                    <label class="input-label" for="emali">
                        <span class="label-name">Name</span>
                    </label>
                </div>

                <div class="form-section">
                    <input class="form-input" type="password" name="password" autocomplete='off' required >
                    <label class="input-label" for="password">
                        <span class="label-name">Password</span>
                    </label>
                </div>

                <form action="/dashboard" method="POST">
                <button type="submit" class="Confirm-button">Zaloguj sie</button>
                </form>
            </form>
        </div>
    </div>

    <script src="../../public/javascript/add_article_form.js"></script>
    <script src="../../public/javascript/dropdownMenuHamburger.js"></script>

</body>
</html>