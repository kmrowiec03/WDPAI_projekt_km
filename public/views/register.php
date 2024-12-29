<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarejestruj sie</title>

    <link href="public/styles/styles.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php include("public/views/navigation/navigation.php"); ?>
    <div class = "main-content Minions-background">
            <div class="Container_column">
                <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>
                    <p>Zalogowano jako: <?php echo $_SESSION['user']['email']; ?></p>
                <?php else: ?>
                    <p>Nie jesteś zalogowany</p>
                <?php endif; ?>
                <div class="LogoContainer">
                    <img src="public/images/logo.png" alt="Logo firmy" class="Logo Logo-big" width="450px">
                </div>

                <form action="/register" method="POST" class="form-container">

                    <div class="form-section">
                        <input class="form-input" type="text" name="email" id="email" autocomplete='off' required >
                        <label class="input-label" for="email">
                            <span class="label-name">Email</span>
                        </label>
                    </div>

                    <div class="form-section">
                        <input class="form-input" type="password" name="password1"  id="password1" autocomplete='off' required >
                        <label class="input-label" for="password1">
                            <span class="label-name">Password</span>
                        </label>
                    </div>

                    <div class="form-section">
                        <input class="form-input" type="password" name="password2" id="password2" autocomplete='off' required >
                        <label class="input-label" for="password1">
                            <span class="label-name">Repeat Password</span>
                        </label>
                    </div>

                    <?php if (isset($error)): ?>
                        <div class="error-message" style="color: red;">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form action="/dashboard" method="POST">
                    <button type="submit" class="Confirm-button">Register Now</button>
                    </form>
                </form>
            </div>
    </div>
</body>
</html>