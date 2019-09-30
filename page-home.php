<?php get_header(); /* Template Name: Home Template */ ?>
  <div id="page-home">

  	<div class="container">

  		<h1>David J. Hanus</h1>
  		<div class="subtitle">Creative Professional</div>

  		<div class="button"><a href="#">Résumé</a></div>
  	</div>

  	<div class="placeholder">
  		Intro / Resume / Top Overview

  		<p>paragraph...</p>
  	</div>

  	<div class="placeholder">
  		Core Skills (3 columns)
  	</div>

  	<div class="placeholder">
  		Other Skills, Strengths
  	</div>

  	<div class="placeholder">
  		Previous Work / Clients
  	</div>

  	<div class="placeholder">
  		Github, code section
  	</div>

  	<div class="placeholder">
  		Selected Photography Highlights
  	</div>

  	<div class="placeholder">
  		Contact - Email, Instagram, Github
  	</div>
     
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
          endwhile; else: ?>
      <?php endif; ?>
    </div> <!-- /.container -->
  
  </div>  <!-- / #page-home -->
<?php get_footer(); ?>