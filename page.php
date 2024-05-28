<?php get_header();  ?>

<div class="top-block mb-16">
  <div class="container mx-auto">
    <h1 class="text-4xl lg:text-6xl"><?php the_title(); ?></h1>
  </div>
</div>

<div class="container mb-16">
  <div class="flex flex-wrap lg:-mx-6 mb-12 lg:mb-0">
    <div class="w-full lg:w-8/12 lg:px-6 mb-6 lg:mb-0">
      <div class="content bg-white rounded-lg p-4 mb-10">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="w-full lg:w-4/12 lg:px-6">
      <?php get_template_part('template-parts/sidebar'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>