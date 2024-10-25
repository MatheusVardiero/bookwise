<?php
@require('dados.php');
?>

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
    <form class="w-full flex space-x-2 mt-6">
      <input type="text" placeholder="Pesquisar..." class="border-stone-800 bg-stone-900 border-2 rounded-md text-sm focus:outline-none px-2 py-1">
      <button type="submit">Pesquisar</button>
    </form>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php foreach ($livros as $livro) : ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900 flex flex-col justify-between">
          <div class="flex">
            <div class="w-1/3">imagem</div>
            <div>
              <a href="/bookwise/livro.php?id=<?php echo $livro['id']; ?>" class="font-semibold"><?php echo $livro['titulo']; ?></a>
              <div class="text-xs italic"><?php echo $livro['autor']; ?></div>
              <div class="text-xs italic">Avaliacoes</div>
            </div>
          </div>
          <div class="text-sm mt-5"><?php echo $livro['descricao']; ?></div>
        </div>
      <?php endforeach; ?>
    </section>
  </main>
</body>

</html>