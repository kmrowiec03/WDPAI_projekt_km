<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
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

      <div class="Container_for_many_window">
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsfdfsdfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsdsfdsfdsfdfsdfdsfdfdsfdfdsfdfsddsfdsfdsfdfsdfdsfdfdsfdfdsfdfsdfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsfdsfdsfdfsdfdsfdfdsfdfdsfdfsddsfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsfdsfdsfdfsdfdsfdfdsfdfdsfdfsddsfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsfdsfdsfdfsdfdsfdfdsfdfdsfdfsddsfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsfdfsdfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsfdfsdfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsfdfsdfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsfdfsdfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <div class="Container_for_window">
            <img src="public/images/gym.jpg" alt="zdjecie siłowni">
            <p class="text_in_window">fdsfdsfdsfdfsdfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfddsfdsfdfsdfdsfdfdsfdfdsfdfsdfsd</p>
          </div>
          <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>
              <p>Zalogowano jako: <?php echo $_SESSION['user']['email']; ?></p>
          <?php else: ?>
              <p>Nie jesteś zalogowany</p>
          <?php endif; ?>
      </div>
    
</body>
</html>