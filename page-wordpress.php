<?php 
/*
Template Name: Wordpress
*/
get_header(); 
?>

<div class="top-block mb-16">
  <div class="container mx-auto">
    <h1 class="text-4xl lg:text-6xl"><?php _e("Сайти на CMS", "catalog-wp"); ?> WordPress</h1>
  </div>
</div>

<div class="container mb-16">
  <div class="flex flex-wrap lg:-mx-6 mb-12 lg:mb-0">
    <div class="w-full lg:w-8/12 lg:px-6 mb-6 lg:mb-0">
      <div class="overflow-x-auto bg-white rounded-lg mb-10">
        <table class="w-full table-auto">
          <thead class="bg-theme-dark text-gray-200 border border-gray-200 uppercase">
            <tr>
              <th class="text-left whitespace-nowrap px-2 py-3">
                <div class="text-left font-bold"><?php _e("Сайт", "catalog-wp"); ?></div>
              </th>
              <th class="text-left whitespace-nowrap px-2 py-3">
                <div class="text-left font-bold"><?php _e("Оцінка оптимізації", "catalog-wp"); ?></div>
              </th>
              <th class="text-left whitespace-nowrap px-2 py-3">
                <div class="text-left font-bold"><?php _e("CMS", "catalog-wp"); ?></div>
              </th>
              <th class="text-left whitespace-nowrap px-2 py-3">
                <div class="text-left font-bold"><?php _e("Вартість", "catalog-wp"); ?></div>
              </th>
              <th class="text-left whitespace-nowrap px-2 py-3">
                <div class="text-left font-bold"><?php _e("Рейтинг", "catalog-wp"); ?></div>
              </th>
            </tr>
          </thead>
          <tbody class="text-sm">
            <?php 
            global $wp_query, $wp_rewrite;  
            $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
            $all_sites = new WP_Query( array(
              'post_type' => 'sites',
              'orderby' => 'date',
              'posts_per_page' => 10,
              'paged' => $current, 
              'meta_query' => array(
                array(
                  'key' => 'check_site_cms_meta',
                  'value' => 'wordpress',
                  'compare' => 'IN',
                ),
              ),
            ));
            if ($all_sites->have_posts()) : while ($all_sites->have_posts()) : $all_sites->the_post(); ?>
              <?php get_template_part('template-parts/site-item-table'); ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </tbody>
        </table>
      </div>
      <div class="b_pagination text-center mb-12">
        <?php 
          $big = 9999999991; // уникальное число
          echo paginate_links( array(
            'format' => '?paged=%#%',
            'total' => $all_sites->max_num_pages,
            'current' => $current,
            'prev_next' => true,
            'next_text' => (''),
            'prev_text' => (''),
          )); 
        ?>
      </div>
    </div>
    <div class="w-full lg:w-4/12 lg:px-6">
      <?php get_template_part('template-parts/sidebar'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>