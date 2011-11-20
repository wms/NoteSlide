<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2011, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Application &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->script(array('jquery-1.7', 'popup')); ?>
	<?php echo $this->html->style(array('noteslide','testlogin', 'fonts')); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="app">
	<div id="container">
        <div class="topmenu">
            <div id="ns">
                <?php echo $this->html->image('ns.png'); ?>
            </div>
            <div id="loginarea">
                <?php if($currentUser): ?>
                <?php echo $currentUser['name'] ?>
                <?php echo $this->html->link('Logout', array(
                    'controller' => 'users',
                    'action' => 'logout'
                )) ?>
                <?php else: ?>
                <a href="#" id="loginlink">Login or Register<?php echo $this->html->image("drop.png"); ?></a>
                <?php endif ?>
            </div>
        </div>
        <div class="subcontainer">
            <div class="content">
            <h1>Welcome to NoteSlide</h1>
            <h3>Choose your Uni to Browse notes, or Register to add notes</h3>
            <ul class="unilist">
                <li><a href="#">Cardiff University</a></li>
                <li><a href="#">Swansea University</a></li>
            </ul>
		<div id="content">
            <?php echo $this->flashMessage->output() ?>
			<?php echo $this->content(); ?>
		</div>
	</div>

    <?php if(!$currentUser): ?>
    <div id="loginbox">
        <a id="loginboxClose">x</a>
        <div id="loginheader">Login</div>
        <div id="loginspace">
            <?php echo $this->form->create(null, array(
                'url' => array(
                    'controller' => 'users',
                    'action' => 'login'
                )
            )) ?>
            <?php echo $this->form->field('email') ?>
            <?php echo $this->form->field('password', array(
                'type' => 'password'
            )) ?>
            <?php echo $this->form->submit('Login') ?>
            or <?php echo $this->html->link('Sign up!', array(
                'controller' => 'users',
                'action' => 'signup'
            )) ?>
            <?php echo $this->form->end() ?>
        </div>
    </div>
    <div id="overlay"></div>
    <?php endif ?>
</body>
</html>