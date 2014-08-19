<div class="row">
<div class="col-lg-12">

<form role="search" method="get" class="searchform" action="<?php bloginfo('url'); ?>/">

	<div class="input-group">

	  <input type="text" class="form-control" placeholder="search here" name="s" id="s" value="<?php the_search_query(); ?>" />

	  <span class="input-group-btn">

	    <button class="btn" type="submit">

	    	<i class="fa fa-chevron-right"></i>

	    </button>

	  </span>

	</div><!-- /input-group -->

</form>

</div>
</div>