<h2>Displaying all Posts</h2>
<?php if(count($posts)): ?>
<?php foreach($posts as $post): ?>
    <h3><?= $post->title ?></h3>
<?php endforeach ?>
<?php else: ?>
<p>There are no posts that match your criteria...</p>
<?php endif ?>