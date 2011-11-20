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
                <?php echo $currentUser->forename ?>
                <?php echo $currentUser->surname ?>
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

<div id="loginbox">  
        <a id="loginboxClose">x</a>  
       <div id="loginheader">Login </div>
<div id="loginspace"><form>
<label>Username: </label>
<input type="text" class="form1" name="username" style="text-align: center"/><br />
<label>Password: </label>
<input type="password" class="form1" name="password" style="text-align: center"/> <br> <br>
<a href="#">Forgot your password?</a>  |  <a href="#">Sign up!</a>
<input type="submit" style="float: right"class="submitbutton" value="Submit"  />

</form> </div>
      
     </div>  
    <div id="overlay"></div> 
</body>
</html>
