<?php                 //VUE
?>

<div class="d-grid gap-3"><h1>Liste des articles</h1> 
  <div class="p-2 bg-light border">
  <?php foreach($articles as $article) : ?>
    <h2><a class="text-decoration-none text-dark" href="/mvc/articles/lire/<?= $article['slug']?>"> <?= $article['titre'] ?></a></h2>
    <p><?= $article['contenu'] ?></p>

<?php endforeach; ?>
  </div>
  
</div>

