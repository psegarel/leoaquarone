<section id="header">
	<header id="navbar" role="banner" class="navbar navbar-fixed-top">
		<div class="container">
			<!-- Header -->
			<div class="contact-info span12">
				<a href="/"><img src="/sites/default/files/images/PAMlogo.jpg" /></a>
				<p>Manager of the Globersel Pactum Natural Resources Fund</p>
			</div>
		</div>
	</header>
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
	</div>
</section>
<section id="footer">
	  <footer class="footer container">
	    <?php print render($page['footer']); ?>
	  </footer>
</section>


	

