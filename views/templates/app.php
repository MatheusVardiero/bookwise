<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./dist/output.css" rel="stylesheet">
  <link href="./src/main.css" rel="stylesheet">
  <title>Bookwise</title>
</head>

<body class="bg-stone-950 text-stone-400">
  <?php require('header.php'); ?>

  <main class="mx-auto max-w-screen-lg space-y-4">
    <?php require "views/{$view}.view.php"; ?>
  </main>
</body>

</html>