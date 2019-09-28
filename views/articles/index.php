<?php foreach($articles as $article): ?>

<h2><a href="/articles/lire/<?= $article['slug'] ?>"><?= $article['titre'] ?></a></h2>

<p><?= $article['contenu'] ?></p>

<?php endforeach ?>