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
	<?php echo $this->html->script(array('jquery-1.7', 'popup', 'togglefunctions')); ?>
	<?php echo $this->html->style(array('noteslide','testlogin', 'fonts')); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="app">
	<div id="container">
        <div class="topmenu">
            <span id="ns">
                <?php echo $this->html->image('ns.png'); ?>
            </span>
            <span id="search"><form method="POST" name="searchform" id="topsearchform"><input name="search" id="topsearchbox" /></form></span>
            <span id="loginarea">
					<a href="user/useridorname">FIRSTNAME LASTNAME</a> <a href="#" id="loginlink">Login</a>
            </span>
        </div>
        <div class="subcontainer">
		<div class="content">
		<div class="intro">
			<div class="toptear"></div>
			<div class="introtext">
				<h1>Welcome to NoteSlide</h1>
				<h3>Choose your Uni to Browse notes, or Register to add notes</h3>
				<ul id="postselector">
					<li id="listall">List All</li>
					<li id="bygroup"><a href="#" onClick="toggleGroups()">By Group</a></li>
					<ul id="groups">
						<li id="g1">Group 1</li>
						<li id="g2">Group 2</li>
						<li id="g3">Group 3</li>
					</ul>
					<li id="bylocation" onclick="toggleLocations()">By Location</li>
					<ul id="locations">
						<li id="l1">Location 1</li>
						<li id="l2">Location 2</li>
						<li id="l3">Location 3</li>
					</ul>
					
				</ul>
			</div>
			<div class="bottomtear"></div>
		</div>
		<div class="posts">
	            <?php echo $this->flashMessage->output() ?>
				<?php echo $this->content(); ?>
		</div>
	</div>

<div id="loginbox">  
        <a id="loginboxClose">x</a>  
       
      
    </div>  
    <div id="overlay"></div> 
</body>
</html>
