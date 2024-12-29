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
        <div class="left-part" style="width: 10%">
        </div>
        <div class="center-part" style="width: 80%">
            <div class="Container_profile">
                <div class="container50percentages" style="width: 35%">
                    <div class="photo_container">
                        <img src="public/images/profilowe.png" alt="zdjecie profilowe">
                    </div>
                    <div class="text_profile_information">
                        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>
                            <p><?php echo $_SESSION['user']['email']; ?></p>
                        <?php else: ?>
                            <p>Nie jesteś zalogowany</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="container50percentages" style="width: 65%; flex-direction: row">
                    <div class="container50percentages" >
                        <div class="information_container" style="margin-top: 100px">More Information</div>
                        <div class="information_container"></div>
                        <div class="information_container"></div>
                    </div>
                    <div class="container50percentages">
                        <div class="information_container" style="margin-top: 100px">Friends</div>
                        <div class="information_container">Transactions</div>
                        <div class="information_container">Settings</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-part" style="width: 10%">
        </div>


    </div>
</body>
</html>