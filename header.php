<!DOCTYPE html>
<html lang="en">
<head>
<!-- open sans font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- font awesome : used for icons -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="maximum-scale=1">
<title>Mail DMI</title>
<!-- Bootstrap modified-->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--[if gte IE 9]
        <style type="text/css"> .gradient { filter: none; } </style>
	<![endif]-->

	 <?php wp_head(); ?> 
</head>
<body class="home">
<!-- start : top site navigation -->
<div class="top-nav navbar gradient" role="navigation">
	<div class="container">
		<div class="row">
			<?php /* Primary navigation */
					wp_nav_menu( array(
					'menu' => 'top-menu',
					'depth' => 1,
					'container' => false,
					'menu_class' => 'nav navbar-nav navbar-right',
					//Process nav menu using our custom nav walker
					'walker' => new wp_bootstrap_navwalker())
					);
					?>
		</div>
	</div>
</div>
<!-- start : site header and second navigation -->
<div class="main navbar navbar-default">
	<div class="container">
		<div class="row">
			<!-- start : logo -->
			<div class="col-lg-4"> <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php echo of_get_option('logo', 'Not Set' ); ?>" alt=""/></a> 

			
			</div>
			<div class="col-lg-8 main-nav-container">
				<div class="row">
					<!-- start : top phone in header -->
					<div class="col-lg-12 text-right"><a class="call-now" href="tel:<?php echo of_get_option('link_phone_number', 'Not Set' ); ?>"><?php echo of_get_option('phone_number', 'Not Set' ); ?></a></div>
				</div>
				<div class="row">
					<!-- start : second top navigation in header -->
					<?php /* Primary navigation */
					wp_nav_menu( array(
					'menu' => 'main-menu',
					'depth' => 2,
					'container' => false,
					'menu_class' => 'nav navbar-nav navbar-right',
					//Process nav menu using our custom nav walker
					'walker' => new wp_bootstrap_navwalker())
					);
					?>
				</div>
			</div>
		</div>
	</div>
</div>