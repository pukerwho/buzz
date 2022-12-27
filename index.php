<?php get_header(); ?>

<div class="top-block mb-16">
  <div class="container mx-auto">
    <h1 class="text-4xl lg:text-6xl text-center mb-4"><?php _e("Рейтинг сайтів", "catalog-wp"); ?></h1>
    <div class="w-full lg:w-10/12 text-gray-600 text-center mx-auto font-light">
      <?php _e("Великий каталог сайтів. SEO-аналіз веб сайтів з перевіреними показниками.", "catalog-wp"); ?>
    </div>
  </div>
</div>

<div class="container">
  <div class="flex flex-wrap lg:-mx-4 mb-8">
    <!-- popular sites -->
    <div class="w-full lg:w-1/4 lg:px-4 mb-8">
      <div class="rounded-lg shadow-lg">
        <h2 class="text-lg text-center bg-blue-200 rounded-t-lg p-3">🔥 <?php _e("Популярні сайти", "catalog-wp"); ?></h2>
        <div class="bg-white rounded-b-lg p-3">
          <?php 
            $top_sites = new WP_Query( array( 
              'post_type' => 'sites', 
              'posts_per_page' => 10,
              'orderby' => 'rand',
            ) );
            if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
          ?>
            <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>

    <!-- new sites -->
    <div class="w-full lg:w-1/4 lg:px-4 mb-8">
      <div class="rounded-lg shadow-lg">
        <h2 class="text-lg text-center bg-green-200 rounded-t-lg p-3">🆕 <?php _e("Нові сайти", "catalog-wp"); ?></h2>
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

    <!-- see sites -->
    <div class="w-full lg:w-1/4 lg:px-4 mb-8">
      <div class="rounded-lg shadow-lg">
        <h2 class="text-lg text-center bg-yellow-200 rounded-t-lg p-3">👀 <?php _e("Зараз дивляться", "catalog-wp"); ?></h2>
        <div class="bg-white rounded-b-lg p-3">
          <?php 
            $top_sites = new WP_Query( array( 
              'post_type' => 'sites', 
              'posts_per_page' => 10,
              'orderby' => 'rand',
            ) );
            if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
          ?>
            <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>

    <!-- our sites -->
    <div class="w-full lg:w-1/4 lg:px-4 mb-8">
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
  </div>

  <!-- Price -->
  <div class="mb-16">
    <h2 class="text-4xl mb-6">🌟 <?php _e("Сайти з високим рейтингом", "catalog-wp"); ?></h2>
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
            $popular_places_query = new WP_Query( array(
              'post_type' => 'sites',
              'posts_per_page' => 10,
              'orderby' => 'rand',
              'meta_query' => array(
                'relation' => 'AND',
                array(
                  'key' => 'site_main_rating',
                  'value' => '80',
                  'compare' => '>',
                ),
              ),
            ));
            if ($popular_places_query->have_posts()) : while ($popular_places_query->have_posts()) : $popular_places_query->the_post(); ?>
              <?php get_template_part('template-parts/site-item-table'); ?>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Money -->
  <div class="mb-16">
    <h2 class="text-4xl mb-6">💰 <?php _e("Сайти з високою вартістю", "catalog-wp"); ?></h2>
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
            $popular_places_query = new WP_Query( array(
              'post_type' => 'sites',
              'posts_per_page' => 10,
              'orderby' => 'rand',
              'meta_query' => array(
                'relation' => 'AND',
                array(
                  'key' => 'site_price',
                  'value' => '399',
                  'compare' => '>',
                ),
              ),
            ));
            if ($popular_places_query->have_posts()) : while ($popular_places_query->have_posts()) : $popular_places_query->the_post(); ?>
              <?php get_template_part('template-parts/site-item-table'); ?>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="flex flex-wrap lg:-mx-4">
    <!-- wordpress -->
    <div class="w-full lg:w-1/4 lg:px-4 mb-8">
      <div class="rounded-lg shadow-lg mb-6">
        <h2 class="text-gray-200 text-lg text-center bg-theme-dark rounded-t-lg p-3"><?php _e("Сайти на CMS", "catalog-wp"); ?> WordPress</h2>
        <div class="bg-white rounded-b-lg p-3">
          <?php 
            $top_sites = new WP_Query( array( 
              'post_type' => 'sites', 
              'posts_per_page' => 5,
              'orderby' => 'rand',
              'meta_query' => array(
                'relation' => 'AND',
                array(
                  'key' => 'check_site_cms_meta',
                  'value' => 'wordpress',
                  'compare' => 'IN',
                ),
              ),
            ) );
            if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
          ?>
            <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>

    <!-- prestashop -->
    <div class="w-full lg:w-1/4 lg:px-4 mb-8">
      <div class="rounded-lg shadow-lg mb-6">
        <h2 class="text-gray-200 text-lg text-center bg-theme-dark rounded-t-lg p-3"><?php _e("Сайти на CMS", "catalog-wp"); ?> PrestaShop</h2>
        <div class="bg-white rounded-b-lg p-3">
          <?php 
            $top_sites = new WP_Query( array( 
              'post_type' => 'sites', 
              'posts_per_page' => 5,
              'orderby' => 'rand',
              'meta_query' => array(
                array(
                  'key' => 'check_site_cms_meta',
                  'value' => 'prestashop',
                  'compare' => 'IN',
                ),
              ),
            ) );
            if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
          ?>
            <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>

    <!-- opencart -->
    <div class="w-full lg:w-1/4 lg:px-4 mb-8">
      <div class="rounded-lg shadow-lg mb-6">
        <h2 class="text-gray-200 text-lg text-center bg-theme-dark rounded-t-lg p-3"><?php _e("Сайти на CMS", "catalog-wp"); ?> OpenCart</h2>
        <div class="bg-white rounded-b-lg p-3">
          <?php 
            $top_sites = new WP_Query( array( 
              'post_type' => 'sites', 
              'posts_per_page' => 5,
              'orderby' => 'rand',
              'meta_query' => array(
                array(
                  'key' => 'check_site_cms_meta',
                  'value' => 'opencart',
                  'compare' => 'IN',
                ),
              ),
            ) );
            if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
          ?>
            <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>

    <!-- prom -->
    <div class="w-full lg:w-1/4 lg:px-4 mb-8">
      <div class="rounded-lg shadow-lg mb-6">
        <h2 class="text-gray-200 text-lg text-center bg-theme-dark rounded-t-lg p-3"><?php _e("Сайти на CMS", "catalog-wp"); ?> Prom</h2>
        <div class="bg-white rounded-b-lg p-3">
          <?php 
            $top_sites = new WP_Query( array( 
              'post_type' => 'sites', 
              'posts_per_page' => 5,
              'orderby' => 'rand',
              'meta_query' => array(
                array(
                  'key' => 'check_site_cms_meta',
                  'value' => 'prom',
                  'compare' => 'IN',
                ),
              ),
            ) );
            if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
          ?>
            <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>

  </div>

</div>

<?php get_footer(); ?>