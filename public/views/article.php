<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link href="/public/styles/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <?php include("public/views/navigation/navigation.php"); ?>

    <div class="main-content">
        <div class="left-part" style="width: 10%; display: flex; justify-content: flex-end">
            <a id="back_button" href="/articles">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        </div>
        <div class="center-part for-article" >
            <div class="container50percentages">
                <header class="article-header"><span class=""></span><h1 class="article-title"><?php echo htmlspecialchars($article['title']); ?></h1></header>
                <img src="/<?php echo htmlspecialchars($article['image_path']); ?>" alt="Image for <?php echo htmlspecialchars($article['title']); ?>" style="width: 100%">
            </div>
            <div class="container50percentages" style="padding-top: 25%;padding-left: 2%">
                <p><?php echo nl2br(htmlspecialchars($article['content'])); ?></p>
            </div>
        </div>
        <div class="right-part" style="width: 10%">

        </div>

    </div>
    <script src="../../public/javascript/add_article_form.js"></script>
    <script src="../../public/javascript/dropdownMenuHamburger.js"></script>

</body>
</html>