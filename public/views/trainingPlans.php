<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <link href="/public/styles/styles.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<?php include("public/views/navigation/navigation.php"); ?>

<div class="Container_for_many_window">
    <?php if (isset($plans) && !empty($plans)): ?>
        <?php foreach ($plans as $plan): ?>
            <a href="trainingPlans/<?php echo $plan->getId(); ?>" class="Container_for_window article-link">
                <img src="<?php echo htmlspecialchars("public/images/tło.jpg"); ?>" alt="Image for <?php echo htmlspecialchars($plan->getName()); ?>" loading="lazy">
                <p class="title_in_window">
                    <?php echo htmlspecialchars($plan->getName()); ?>
                </p>
                <p class="text_in_window">
                    <?php
                    echo implode(' ', array_slice(explode(' ', strip_tags($plan->getDescription())), 0, 10)) . '...';
                    ?>
                </p>
            </a>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No training plans found.</p>
    <?php endif; ?>
</div>

<?php if (isset($_SESSION['user'])): ?>
    <div class="Circle-button" id="openModal">
        <i class="fa-solid fa-plus" style="font-size: 25px"></i>
    </div>
<?php endif; ?>

<!-- Modal z formularzem -->
<div id="trainingModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Wybierz części ciała do ćwiczenia</h2>
        <form id="generate_plan" method="POST" action="/generate_plan">
            <label for="bodyParts">Części ciała:</label>
            <select name="bodyParts[]" id="bodyParts" multiple>
                <option value="chest">Klatka piersiowa</option>
                <option value="back">Plecy</option>
                <option value="legs">Nogi</option>
                <option value="waist">Talia</option>
                <option value="arms">Ramiona</option>
            </select>
            <button type="submit">Generuj plan</button>
        </form>
    </div>
</div>

<script src="../../public/javascript/generate_new_training_plan.js"></script>
<script src="../../public/javascript/show_training.js"></script>
<script src="../../public/javascript/dropdownMenuHamburger.js"></script>

</body>
</html>