<h1>La vue de users index</h1>
<?php foreach($articles as $article): ?>
  <h2><?= $article['id']?></h2>
  <p><?= $article['title'] ?></p>
  <p><?= $article['content'] ?></p>
  <p><?= $article['user_id'] ?></p>
<?php endforeach; ?>