<h2>Displaying all Notes</h2>
<?php if(count($notes)): ?>
<?php foreach($notes as $note): ?>
    <h3><?= $note->title ?></h3>
<?php endforeach ?>
<?php else: ?>
<p>There are no notes that match your criteria...</p>
<?php endif ?>