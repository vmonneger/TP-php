<h1>La vue de users index</h1>
<?php foreach($users as $user): ?>
  <h2><?= $user['firstname']?></h2>
  <p><?= $user['lastname'] ?></p>
  <p><?= $user['id'] ?></p>
<?php endforeach; ?>