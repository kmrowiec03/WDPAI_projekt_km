<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link href="public/styles/text.css" rel="stylesheet" >
    <link href="public/styles/logo.css" rel="stylesheet" >
    <link href="public/styles/button.css" rel="stylesheet" >
    <link href="public/styles/register_login.css" rel="stylesheet" >
    <link href="public/styles/containers.css" rel="stylesheet" >
    <link href="public/styles/background.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("public/views/navigation/navigation.php"); ?>
    <div class = "main-content Minions-background">
        <div class="Container_column">
            <div class="LogoContainer">
                <img src="public/images/logo.png" alt="Logo firmy" class="Logo Logo-big" width="450px">
            </div>

            <form action="/register" method="POST">

                <div class="form-section">
                    <input class="form-input" type="text" name="nick" autocomplete='off' required >
                    <label class="input-label" for="name">
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
                <button type="submit">Zaloguj sie</button>
                </form>
            </form>
        </div>
    </div>
</body>
</html>