<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarejestruj sie</title>
    <link href="public/styles/text.css" rel="stylesheet" >
    <link href="public/styles/component.css" rel="stylesheet" >
    <link href="public/styles/button.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("public/views/navigation/navigation.php"); ?>

    <form action="/register" method="GET">
        <button type="submit">ZAREJESTRUJ SIĘ</button>
    </form>
    <form action="/login" method="GET">
        <button type="submit">Zaloguj sie</button>
    </form>

  
</body>
</html>