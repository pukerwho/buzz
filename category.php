<?php get_header(); ?>

<div class="container py-10">
  <div class="flex justify-center">
    <h1 class="inline-block bg-theme-dark text-2xl text-gray-200 uppercase rounded-lg -rotate-2 px-4 py-2 mb-10"><?php the_archive_title(); ?></h1>
  </div>
  <div class="flex flex-wrap lg:-mx-6 mb-6">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="w-full lg:w-1/3 lg:px-6 mb-6">
        <?php get_template_part('template-parts/post-item'); ?>
      </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
  
  <div class="flex justify-between items-center prose-a:inline-block prose-a:bg-indigo-500 prose-a:text-gray-200 prose-a:rounded prose-a:px-6 prose-a:py-3">
    <?php posts_nav_link(); ?>	
  </div>

</div>

<?php get_footer(); ?>