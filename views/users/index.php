<?php                 //VUE
?>

<div class="d-grid gap-3"><h1>Liste des utilisateurs</h1> 
  <div class="p-2 bg-light border">
  <?php foreach($users as $user) : ?>
    <h2><a class="text-decoration-none text-dark" href="/mvc/users/lire/<?= $user['id']?>"> <?= $user['nom'] ?></a></h2>
    <p><?= $user['nom'] ?></p>
    <p><?= $user['prenom'] ?></p>

<?php endforeach; ?>
  </div>
  
</div>
