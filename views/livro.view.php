<div class="p-2 rounded border-stone-800 border-2 bg-stone-900 flex flex-col justify-between mt-5">
  <div class="flex">
    <div class="w-1/3">imagem</div>
    <div>
      <a href="/bookwise/livro?id=<?php echo $livro['id']; ?>" class="font-semibold"><?php echo $livro['titulo']; ?></a>
      <div class="text-xs italic"><?php echo $livro['autor']; ?></div>
      <div class="text-xs italic">Avaliacoes</div>
    </div>
  </div>
  <div class="text-sm mt-5"><?php echo $livro['descricao']; ?></div>
</div>