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
    <script src="../../public/javascript/dropdownMenuHamburger.js"></script>
</body>
</html>