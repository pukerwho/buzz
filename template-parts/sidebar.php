<div>
  <?php if (is_singular('sites')): ?>
  <div class="mb-6">
    <div class="text-lg text-gray-600 border-b border-gray-300 pb-6 mb-6">✅ <?php _e("Сайт перевірен модератором", "catalog-wp"); ?></div>
    <div class="border-b border-gray-300 pb-6 mb-6">
      <div class="text-lg text-gray-600 mb-2">📣 <?php _e("Поділитись", "catalog-wp"); ?></div>
      <div>
        <?php do_action('show_social_share_buttons'); ?>
      </div>
    </div>
  </div>
  <!-- CMS -->
  <div class="rounded-lg shadow-lg mb-6">
    <h2 class="text-lg text-center bg-yellow-200 rounded-t-lg p-3">👀 <?php _e("Ще сайти на CMS", "catalog-wp"); ?> <?php echo $site_cms; ?></h2>
    <div class="bg-white rounded-b-lg p-3">
      <?php 
        $top_sites = new WP_Query( array( 
          'post_type' => 'sites', 
          'posts_per_page' => 10,
          'order' => 'DESC',
          
        ) );
        if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
      ?>
        <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
  <?php endif; ?>
  <!-- Now see -->
  <div class="rounded-lg shadow-lg mb-6">
    <h2 class="text-lg text-center bg-yellow-200 rounded-t-lg p-3">👀 <?php _e("Зараз дивляться", "catalog-wp"); ?></h2>
    <div class="bg-white rounded-b-lg p-3">
      <?php 
        $top_sites = new WP_Query( array( 
          'post_type' => 'sites', 
          'posts_per_page' => 10,
          'order' => 'DESC'
        ) );
        if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
      ?>
        <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>

  <!-- our -->
  <div class="rounded-lg shadow-lg">
    <h2 class="text-lg text-center bg-red-200 rounded-t-lg p-3">💙 <?php _e("Наш вибір", "catalog-wp"); ?></h2>
    <div class="bg-white rounded-b-lg p-3">
      <?php 
        $top_sites = new WP_Query( array( 
          'post_type' => 'sites', 
          'posts_per_page' => 10,
          'order' => 'DESC'
        ) );
        if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
      ?>
        <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</div>