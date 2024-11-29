<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2><?= $name ?></h2>
    <h2><?= isset($email) ? $email : "" ?></h2>
  <h2>
  <?php if (isset($password)): ?>
    <h2><?= $password ?></h2>
      <?php endif; ?>
</h2>
</body>
</html>