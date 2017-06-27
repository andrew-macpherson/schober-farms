<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
    </head>
    <body>


<header>
	<div class="container">
		<a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/schober-farms-logo.png" /></a>
	</div>
</header>
<nav>
	<div class="container">
		<?php wp_nav_menu( array('menu' => 'main') ); ?>
		<div class="phoneNumber">
			<span>CALL (705) 322-PIGS (7447)</span>
		</div>
	</div>
</nav>