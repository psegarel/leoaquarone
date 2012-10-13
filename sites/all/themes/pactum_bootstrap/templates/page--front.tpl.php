<section id="top-nav">
<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
  	<div class="container">
  	  <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
  	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  	  </a>
  	  
  	  <?php if ($logo): ?>
    		<a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
    		  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    		</a>
  	  <?php endif; ?>

  	  <?php if ($site_name || $site_slogan): ?>
    		<hgroup id="site-name-slogan">
    		  <?php if ($site_name): ?>
    			<h1>
    			  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
    			</h1>
    		  <?php endif; ?>
    		</hgroup>
  	  <?php endif; ?>
  	  
  	  <div class="nav-collapse">
    	  <nav role="navigation">
			<ul class="nav">
				<li><a href="/"><i class="icon-home icon-black"></i> Home</a></li>
				<li class=""><a href="/disclaimer">Disclaimer</a></li>
				<li><a class="external link" target="_blank" href="http://www.pillar3.eu/pam1200203/">Public Compliance Disclosures</a></li>
				<li><a class="external link" target="_blank" href="mailto:leonard.aquarone@pactumam.com"><i class="icon-envelope icon-black"></i> Contact Us</a></li>
			</ul>
			
      		<?php if ($primary_nav): ?>
      		  <?php /* print $primary_nav; */ ?>
      		<?php endif; ?>
      	  
      		<?php if ($search): ?>
      		  <?php /* if ($search): print render($search); endif; */ ?>
      		<?php endif; ?>
      		
      		<?php if ($secondary_nav): ?>
      		  <?php /* print $secondary_nav; */ ?>
      		<?php endif; ?>
    		</nav>
  	  </div>         
  	</div>
  </div>
</header>
</section>

<section id="header">
	<div class="container">
		<!-- Header -->
		<div class="span12">
			<a href="/"><img src="/sites/default/files/images/PAMlogo.jpg" /></a>
			<p>Manager of the Globersel Pactum Natural Resources Fund</p>
		</div>
	</div>
</section>

<section id="main-content">
	<div class="container">
	  <header role="banner" id="page-header">
	    <?php if ( $site_slogan ): ?>
	      <p class="lead"><?php print $site_slogan; ?></p>
	    <?php endif; ?>
	
	    <?php print render($page['header']); ?>
	  </header> <!-- /#header -->
		
		<div class="row">
		  
	    <?php if ($page['sidebar_first']): ?>
	      <aside class="span3" role="complementary">
	        <?php print render($page['sidebar_first']); ?>
	      </aside>  <!-- /#sidebar-first -->
	    <?php endif; ?>  
		  
		  <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">  
	      <?php if ($page['highlighted']): ?>
	        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
	      <?php endif; ?>
	      <?php /* if ($breadcrumb): print $breadcrumb; endif; */?>
	      <a id="main-content"></a>
	      <?php print render($title_prefix); ?>
	      <?php if ($title): ?>
	        <h1 class="page-header"><?php print $title; ?></h1>
	      <?php endif; ?>
	      <?php print render($title_suffix); ?>
	      <?php print $messages; ?>
	      <?php if ($tabs): ?>
	        <?php print render($tabs); ?>
	      <?php endif; ?>
	      <?php if ($page['help']): ?> 
	        <div class="well"><?php print render($page['help']); ?></div>
	      <?php endif; ?>
	      <?php if ($action_links): ?>
	        <ul class="action-links"><?php print render($action_links); ?></ul>
	      <?php endif; ?>
	      <?php print render($page['content']); ?>
		  </section>
	
	    <?php if ($page['sidebar_second']): ?>
	      <aside class="span3" role="complementary">
	        <?php print render($page['sidebar_second']); ?>
	      </aside>  <!-- /#sidebar-second -->
	    <?php endif; ?>
	
	  </div>
	  <footer class="footer container">
	    <?php print render($page['footer']); ?>
	  </footer>
	</div>
</section>



	

