<h2>Displaying all Notes</h2>
<?php if($currentUser): ?>
<?php echo $this->html->link('Create a Note', array('controller' => 'notes', 'action' => 'add')) ?>
<?php else: ?>
<p><em>Register to create Notes</em></p>
<?php endif ?>
<hr />
<?php if(count($notes)): ?>
<?php foreach($notes as $note): ?>
    <h3><?php echo $note->title ?></h3>
    <p><em>Posted by <?php echo $note->name ?></em></p>
    <p><?php echo $note->description ?></p>
<?php endforeach ?>
<?php else: ?>
<p>There are no notes that match your criteria...</p>
<?php endif ?>