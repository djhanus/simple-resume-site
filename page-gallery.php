<?php get_header(); /* Template Name: Gallery */ ?>
  <div id="page-home">

    <div class="container photography-portfolio">

      <div class="container namecard">
        <h1>David J. Hanus</h1>
      </div>

      <h2>Selected Photography</h2>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
          endwhile; else: ?>
      <?php endif; ?>

    </div>  <!-- .photography-portfolio -->


    <h2>Contact</h2>
  	<div class="container contact">

      <a href="https://github.com/djhanus" target="_blank"><i class="fab fa-github" target="_blank"></i></a>

      <a href="https://www.instagram.com/david.onion/" target="_blank"><i class="fab fa-instagram"></i></a>

      <a href="mailto:davidjhanus@gmail.com"><i class="far fa-envelope"></i></a>
  	</div> <!-- /.contact -->
     
  </div>  <!-- / #page-home -->
<?php get_footer(); ?>