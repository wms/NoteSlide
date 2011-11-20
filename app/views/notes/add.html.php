<h2>Create a new Note</h2>
<?php echo $this->form->create($note) ?>
<?php echo $this->form->field('name') ?>
<?php echo $this->form->field('title') ?>
<?php echo $this->form->field('description', array(
    'type' => 'textarea'
)) ?>
<?php echo $this->form->submit('Create!') ?>
<?php echo $this->form->end() ?>
<?php echo $this->html->link('Cancel', '/') ?>