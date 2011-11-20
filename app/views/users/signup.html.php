<h2>Signup for NoteSlide now!</h2>
<p>It's free and quick!</p>

<?php echo $this->form->create($user, array(
    'url' => array(
        'controller' => 'users',
        'action' => 'signup'
    )
)) ?>
<?php echo $this->form->field('name', array(
    'label' => 'Your name'
)) ?>
<?php echo $this->form->field('email', array(
    'label' => 'Your email address'
)) ?>
<?php echo $this->form->field('password', array(
    'type' => 'password'
)) ?>
<?php echo $this->form->submit('Submit') ?>
<?php echo $this->form->end() ?>