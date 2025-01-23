<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artykuly</title>
    <link href="public/styles/styles.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php include("public/views/navigation/navigation.php"); ?>

<div class="Container_for_many_window">
    <?php if (isset($articles) && !empty($articles)): ?>
        <?php foreach ($articles as $article): ?>
                <a href="articles/<?php echo $article['id']; ?>" class="Container_for_window article-link">
                <img src="<?php echo htmlspecialchars($article['image_path']); ?>" alt="Image for <?php echo htmlspecialchars($article['title']); ?>" loading="lazy">
                    <p class="title_in_window">
                        <?php
                        echo $article['title'];
                        ?>
                    </p>
                    <p class="text_in_window">
                        <?php
                        // first five words
                        echo implode(' ', array_slice(explode(' ', strip_tags($article['content'])), 0, 10)) . '...';
                        // strip tags - delete all html and PHP tags (ex. <p>tekst</p>)
                        // explode - divide text to words, create table
                        // array_slice - take 5 index from 0 from table(first arg)
                        // explode - link words together
                        ?>
                    </p>
                    <?php if ($_SESSION['user']['role'] === 'admin'): ?>
                        <label>
                            <input
                                    type="checkbox"
                                    class="publish-checkbox"
                                    data-article-id="<?php echo $article['id']; ?>"
                                <?php echo $article['published'] ? 'checked' : ''; ?>
                            >
                            Published
                        </label>
                    <?php endif; ?>
                </a>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No articles found.</p>
    <?php endif; ?>
</div>

<?php if (isset($_SESSION['user'])): ?>
    <div class="Circle-button " id="openModal">
        <i class="fa-solid fa-plus " style="font-size: 25px" ></i>
    </div>
<?php endif; ?>


<div id="modal" class="modal">
    <div class="modal-content">
        <span id="closeModal" class="close-button"><i class="fa-solid fa-xmark"></i></span>
        <h2>Add New Article</h2>
        <form id="article-form" enctype="multipart/form-data">
            <label for="image">Wybierz zdjęcie:</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>

            <label for="content">Content</label>
            <textarea id="content" name="content" required></textarea><br><br>

            <button type="submit">Add Article</button>
        </form>
    </div>
</div>
<div id="message-modal" class="modal">
    <div class="modal-content-message">
        <span id="closeMessageModal" class="close-button">
            <i class="fa-solid fa-xmark"></i>
        </span>
        <p id="modal-message"></p>
    </div>
</div>


<script src="../../public/javascript/change_article_status.js"></script>
<script src="../../public/javascript/add_article_form.js"></script>
<script src="../../public/javascript/dropdownMenuHamburger.js"></script>
</body>
</html>