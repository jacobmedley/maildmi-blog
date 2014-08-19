<!-- start : footer -->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 address">
			<strong><?php echo of_get_option('company_name', 'Not Set' ); ?></strong> <?php echo of_get_option('address', 'Not Set' ); ?>
			</div>
			<div class="col-lg-3 shipping">
				<img src="<?php bloginfo('template_url'); ?>/images/shipping-logo.png">
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="col-lg-8"> 
				<div class="row">
					<div class="col-lg-12">
										<?php /* Primary navigation */
					wp_nav_menu( array(
					'menu' => 'main-menu',
					'depth' => 1,
					'container' => false,
					'menu_class' => 'nav navbar-nav footer-nav navbar-left',
					//Process nav menu using our custom nav walker
					'walker' => new wp_bootstrap_navwalker())
					);
					?>
					</div>
				</div>
				<div class="row footer-left">
					<div class="col-lg-3">
						<img src="<?php echo of_get_option('badge', 'Not Set' ); ?>">
					</div>
					<div class="col-lg-9">
						<h4><?php echo of_get_option('phone_headline', 'Not Set' ); ?></h4>
						<h3><?php echo of_get_option('phone_number', 'Not Set' ); ?></h3>
						<ul class="nav navbar-nav social-nav navbar-left">
						<li>
							<a href="<?php echo of_get_option('facebook_url', 'Not Set' ); ?>">
								<i class="<?php echo of_get_option('facebook_icon', 'Not Set' ); ?>"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo of_get_option('linkedin_url', 'Not Set' ); ?>">
								<i class="<?php echo of_get_option('linkedin_icon', 'Not Set' ); ?>"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo of_get_option('twitter_url', 'Not Set' ); ?>">
								<i class="<?php echo of_get_option('twitter_icon', 'Not Set' ); ?>"></i>
							</a>
						</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 footer-right">
				 <h3>Sign-Up For Our Newsletter</h3>
				<form name="news-letter" role="form" class="news-letter">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="name" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="email" required>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/placeholder.js" type="text/javascript"></script>

<script>
$(document).ready(function() {
$('#carousel-hero.carousel').carousel({
  interval: 5000,
  pause: "false"
});
$('#carousel-brand.carousel').carousel({
  interval: 8000,
  pause: "false"
});
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});
});
</script>
<script type="text/javascript">
    $('input[type=text], textarea').placeholder();
</script>

 <?php wp_footer(); ?> 

</body>
</html>