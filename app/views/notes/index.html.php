<?php if(isset($group)): ?>
<h2>Displaying all Notes in group '<?php echo $group->title ?>'</h2>
<?php else: ?>
<h2>Displaying all Notes</h2>
<?php endif ?>
<?php if($currentUser): ?>
<?php echo $this->html->link('Create a Note', array('controller' => 'notes', 'action' => 'add')) ?>
<?php else: ?>
<p><em>Register to create Notes</em></p>
<?php endif ?>
<hr />
<?php if(count($notes)): ?>
<?php $i = 1;?>
<?php foreach($notes as $note): ?>
	<dl class="note" id="<?php #note id to be echoed here ?>">
    <dt><a href="#"><?php echo $note->title ?></a><br /><em>Posted By <a href="user/usernameorid"><?php echo $note->name ?></a></em></dt>
    <dd><?php echo $note->description ?></dd>
    <div class="actions"><a href="report/noteid">report</a> | <a href="#" id="<?php echo $i ?>"  onclick="note(<?php echo $i ?>)">note</a></div>
    </dl>
    <?php $i++ ?>
<?php endforeach ?>
<?php else: ?>
<p>There are no notes that match your criteria...</p>
<?php endif ?>