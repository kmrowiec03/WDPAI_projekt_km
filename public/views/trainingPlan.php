<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Plan</title>
    <link href="/public/styles/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php include("public/views/navigation/navigation.php"); ?>

<div class="main-content">
    <div class="left-part" style="width: 10%; display: flex; justify-content: flex-end">
        <a id="back_button" href="/trainingPlans">
            <i class="fa-solid fa-chevron-left"></i>
        </a>
    </div>
    <div class="center-part" style="width: 80%; align-items: flex-start">
        <div class="Container_for_many_window">
            <?php if (isset($workouts) && !empty($workouts)): ?>
                <?php foreach ($workouts as $workout): ?>
                    <?php
                    $isCompleted = false;
                    foreach ($completedWorkouts as $completedWorkout) {
                        if ($completedWorkout['workout_id'] == $workout['id']) {
                            $isCompleted = true;
                            break;
                        }
                    }
                    ?>
                    <div class="Container_for_window <?php echo $isCompleted ? 'completed' : ''; ?>" data-id="<?php echo $workout['id']; ?>" style="display: flex; flex-direction: column">
                        <div  onclick="openWorkoutModal(<?php echo $workout['id']; ?>, '<?php echo htmlspecialchars($workout['name']); ?>', '<?php echo htmlspecialchars($workout['description']); ?>')">
                            <p class="title_in_window"> Dzien: <?php echo htmlspecialchars($workout['day_of_week']); ?></p>
                            <p class="text_in_window">
                                <?php echo htmlspecialchars($workout['description']); ?>
                            </p>
                        </div>
                        <label>
                            <input type="checkbox" id="completed-<?php echo $workout['id']; ?>" <?php echo $isCompleted ? 'checked' : ''; ?> onclick="markWorkoutAsCompleted(<?php echo $workout['id']; ?>)">
                            Completed
                        </label>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No workouts found for this plan.</p>
            <?php endif; ?>
        </div>
        <div id="workoutModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2 id="modalWorkoutTitle"></h2>
                <p id="modalWorkoutDescription"></p>
                <div id="modalExercises"></div>
            </div>
        </div>

    </div>
    <div class="right-part" style="width: 10%"></div>
</div>



<script src="../../public/javascript/show_training.js"></script>
<script src="../../public/javascript/add_article_form.js"></script>
<script src="../../public/javascript/dropdownMenuHamburger.js"></script>

</body>
</html>
