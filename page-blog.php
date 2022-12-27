<?php
/*
Template Name: БЛОГ
*/
?>
<?php get_header(); ?>

<div class="container py-10">
  <div class="flex justify-center">
    <h1 class="inline-block bg-theme-dark text-2xl text-gray-200 uppercase rounded-lg -rotate-2 px-4 py-2 mb-10"><?php _e("Все публикации", "treba-wp"); ?></h1>
  </div>
  <div class="flex flex-wrap lg:-mx-6 mb-6">
    <?php 
      global $wp_query, $wp_rewrite;  
      $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
      $all_posts = new WP_Query( array( 
        'post_type' => 'post', 
        'paged' => $current,
        'posts_per_page' => 12,
      ) );
      if ($all_posts->have_posts()) : while ($all_posts->have_posts()) : $all_posts->the_post(); 
    ?>
      <div class="w-full lg:w-1/3 lg:px-6 mb-6">
        <?php get_template_part('template-parts/post-item'); ?>
      </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
  <div class="b_pagination text-center mb-12">
    <?php 
      $big = 9999999991; // уникальное число
      echo paginate_links( array(
        'format' => '?page=%#%',
        'total' => $all_posts->max_num_pages,
        'current' => $current,
        'prev_next' => true,
        'next_text' => (''),
        'prev_text' => (''),
      )); 
    ?>
  </div>

</div>

<?php get_footer(); ?>