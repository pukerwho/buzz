<?php 
  get_header(); 
  $current_id = get_the_ID();
  $current_title = get_the_title();
  $countNumber = tutCount($current_id);
  //GET HTML
  // $html = file_get_html('http://'.$current_title);
  //META TAGS
  // $get_meta = getUrlData('http://'.$current_title);
  //title
  $site_title = get_site_title($current_title, $current_id);
  $site_title_count = mb_strlen($site_title, 'UTF-8');
  //description
  $site_description = get_site_description($current_title, $current_id);
  $site_description_count = mb_strlen($site_description, 'UTF-8');
  
  //lang
  $site_lang = get_site_lang($current_title, $current_id);
  //site_name
  $site_name = get_site_name($current_title, $current_id);
  //cms
  $site_cms = get_site_cms($current_title, $current_id);
?>

<div class="top-block mb-16">
  <div class="container mx-auto">
    <!-- breadcrumbs -->
    <div class="breadcrumbs text-sm text-gray-800 dark:text-gray-200 mb-6" itemprop="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <ul class="flex items-center flex-wrap -mr-4">
        <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem' class="breadcrumbs_item px-4 pl-8">
          <a itemprop="item" href="<?php echo home_url(); ?>" class="text-blue-500">
            <span itemprop="name"><?php _e( 'Головна', 'catalog-wp' ); ?></span>
          </a>                        
          <meta itemprop="position" content="1">
        </li>
        <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class="breadcrumbs_item px-4">
          <a itemprop="item" href="<?php echo get_post_type_archive_link('sites'); ?>" class="text-blue-500">
            <span itemprop="name"><?php _e( 'Сайти', 'catalog-wp' ); ?></span>
          </a>                        
          <meta itemprop="position" content="2">
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item text-gray-500 px-4">
          <span itemprop="name"><?php the_title(); ?></span>
          <meta itemprop="position" content="3" />
        </li>
      </ul>
    </div>
    <h1 class="text-4xl lg:text-6xl mb-4"><?php _e("Аналіз сайту", "catalog-wp"); ?> <?php the_title(); ?></h1>
    <div class="flex items-center text-gray-600 mx-auto font-light">
      <div class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
        </svg>
      </div>
      <?php _e("Інформація оновлена", "catalog-wp"); ?> <?php echo get_the_modified_time('j.n.Y'); ?>
    </div>
  </div>
</div>

<div class="container mb-16">
  <div class="flex flex-wrap lg:-mx-6 mb-12 lg:mb-0">
    <div class="w-full lg:w-8/12 lg:px-6 mb-6 lg:mb-0">
      <!-- Rating -->
      <h2 class="text-2xl uppercase mb-4"><?php _e("Загальний рейтинг", "catalog-wp"); ?>:</h2>
      <?php 
        $rating_site = main_rating($current_id);
      ?>
      <div class="rating-row relative font-semibold mb-6">
        <div class="flex items-center text-center border bg-gray-300 rounded-xl py-2">
          <div class="relative z-1" style="width:<?php echo $rating_site; ?>%">
            <span><?php echo $rating_site ?> / 100</span>
          </div>

          <div class="h-full absolute left-0 top-0 bg-green-300 rounded-xl text-center" style="width:<?php echo $rating_site; ?>%"></div>
        </div>
      </div>

      <!-- Common -->
      <h2 class="text-xl mb-4"><?php _e("Інформація про сайт", "catalog-wp"); ?>:</h2>
      <div class="flex flex-col mb-6">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full bg-white rounded-lg">
                <tbody>

                  <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900"><?php _e("Назва сайту", "catalog-wp"); ?></td>
                    <?php if ($site_name): ?>
                      <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $site_name; ?></td>
                    <?php else: ?>
                      <td class="text-red-500 font-light px-6 py-4 whitespace-nowrap"><?php _e("Не заповнено", "catalog-wp"); ?></td>
                    <?php endif; ?>
                  </tr>
                  
                  <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900"><?php _e("Мова", "catalog-wp"); ?></td>
                    <?php if ($site_lang): ?>
                    <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo __($site_lang, "catalog-wp"); ?></td>
                    <?php else: ?>
                      <td class="text-red-500 font-light px-6 py-4 whitespace-nowrap"><?php _e("Не заповнено", "catalog-wp"); ?></td>
                    <?php endif; ?>
                  </tr>

                  <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900"><?php _e("Орієнтована вартість", "catalog-wp"); ?></td>
                    <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      <?php $site_price = site_price($current_id); echo $site_price; ?>$
                    </td>
                  </tr>

                  <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900"><?php _e("CMS", "catalog-wp"); ?></td>
                    <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      <?php echo $site_cms; ?>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- whois -->
      <div class="bg-white rounded-lg mb-8">
        <div class="bg-theme-dark text-gray-200 text-xl text-center rounded-t-lg py-3 px-2"><?php _e("Whois", "catalog-wp"); ?></div>
        <div class="px-4 py-4">
          <div class="mb-2">
            <span class="font-bold">Статус:</span>
            <?php 
              $site_whois_status = carbon_get_the_post_meta('crb_site_whois_status'); 
              echo __($site_whois_status, "catalog-wp"); 
            ?>
          </div>
          <div class="mb-2">
            <span class="font-bold"><?php _e("Дата реестрації", "catalog-wp"); ?>:</span>
            <?php 
              $site_whois_status = carbon_get_the_post_meta('crb_site_whois_start'); 
              echo __($site_whois_status, "catalog-wp"); 
            ?>
          </div>
          <div class="mb-2">
            <span class="font-bold"><?php _e("Дата закінчення", "catalog-wp"); ?>:</span>
            <?php 
              $site_whois_status = carbon_get_the_post_meta('crb_site_whois_end'); 
              echo __($site_whois_status, "catalog-wp"); 
            ?>
          </div>
          <div class="mb-2">
            <span class="font-bold"><?php _e("Вік", "catalog-wp"); ?>:</span>
            <?php 
              $site_whois_status = carbon_get_the_post_meta('crb_site_whois_age'); 
              echo __($site_whois_status, "catalog-wp"); 
            ?>
          </div>
          <div class="mb-2">
            <span class="font-bold"><?php _e("Реестратор", "catalog-wp"); ?>:</span>
            <?php 
              $site_whois_status = carbon_get_the_post_meta('crb_site_whois_registrator'); 
              echo __($site_whois_status, "catalog-wp"); 
            ?>
          </div>
        </div>
      </div>

      <!-- meta tags -->
      <div class="bg-white rounded-lg mb-8">
        <div class="bg-theme-dark text-gray-200 text-xl text-center rounded-t-lg py-3 px-2"><?php _e("Мета-теги", "catalog-wp"); ?></div>
        <div class="px-4 py-4">
          <div class="border-b pb-4 mb-4">
            <div class="mb-2"><span class="font-bold">Title:</span> <?php echo $site_title; ?></div>
            <div><span class="italic"><?php _e("Кількість символів", "catalog-wp"); ?>: </span><?php echo $site_title_count; ?></div>
          </div>

          <div class="">
            <div class="mb-2"><span class="font-bold">Description:</span> <?php echo $site_description; ?></div>
            <div><span class="italic"><?php _e("Кількість символів", "catalog-wp"); ?>: </span><?php echo $site_description_count; ?></div>
          </div>
        </div>
      </div>

      <!-- analytics -->
      <div class="bg-white rounded-lg mb-8">
        <div class="bg-theme-dark text-gray-200 text-xl text-center rounded-t-lg py-3 px-2"><?php _e("Аналітика на сайті", "catalog-wp"); ?></div>
        <div class="px-4 py-4">
          <div class="">
            <div class="flex items-center border-b pb-4 mb-4 -mx-2">
              <div class="w-1/2 px-2">
                <span class="font-bold">Google Analytics:</span>
              </div>
              <div class="w-1/2 px-2">
                <?php 
                  $check_ga = check_google_analytics($current_title, $current_id);
                  if ($check_ga === 'yes'): 
                ?>
                  <div>🟢 <?php _e("Є на сайті", "catalog-wp"); ?></div>
                <?php else: ?>
                  <div>🔴 <?php _e("Немає", "catalog-wp"); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="flex items-center border-b pb-4 mb-4 -mx-2">
              <div class="w-1/2 px-2">
                <span class="font-bold">Facebook Pixel:</span>
              </div>
              <div class="w-1/2 px-2">
                <?php 
                  $check_ga = check_facebook_pixel($current_title, $current_id);
                  if ($check_ga === 'yes'): 
                ?>
                  <div>🟢 <?php _e("Є на сайті", "catalog-wp"); ?></div>
                <?php else: ?>
                  <div>🔴 <?php _e("Немає", "catalog-wp"); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="flex items-center -mx-2">
              <div class="w-1/2 px-2">
                <span class="font-bold">Yandex Metrika:</span>
              </div>
              <div class="w-1/2 px-2">
                <?php 
                  $check_ga = check_yandex_metrika($current_title, $current_id);
                  if ($check_ga === 'yes'): 
                ?>
                  <div>🟢 <?php _e("Є на сайті", "catalog-wp"); ?></div>
                <?php else: ?>
                  <div>🔴 <?php _e("Немає", "catalog-wp"); ?></div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg">
        <div class="bg-theme-dark text-gray-200 text-xl text-center rounded-t-lg py-3 px-2"><?php _e("SEO оцінки", "catalog-wp"); ?></div>
        <div class="overflow-hidden">
          <table class="min-w-full bg-white rounded-lg">
            <tbody>

              <tr class="border-b">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">🧑‍💻 <?php _e("Технічна оптимізація", "catalog-wp"); ?></td>
                <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <div class="rating-row relative font-semibold">
                    <div class="flex items-center text-center border bg-gray-300 rounded-xl py-2">
                      <div class="relative z-1" style="width:<?php echo tech_rating($current_id); ?>%">
                        <span><?php echo tech_rating($current_id); ?> / 100</span>
                      </div>

                      <div class="h-full absolute left-0 top-0 bg-green-300 rounded-xl text-center" style="width:<?php echo tech_rating($current_id); ?>%"></div>
                    </div>
                  </div>
                </td>
              </tr>
              
              <tr class="border-b">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">📋 <?php _e("Внутрішня оптимізація", "catalog-wp"); ?></td>
                <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <div class="rating-row relative font-semibold">
                    <div class="flex items-center text-center border bg-gray-300 rounded-xl py-2">
                      <div class="relative z-1" style="width:<?php echo inner_rating($current_id); ?>%">
                        <span><?php echo inner_rating($current_id); ?> / 100</span>
                      </div>

                      <div class="h-full absolute left-0 top-0 bg-green-300 rounded-xl text-center" style="width:<?php echo inner_rating($current_id); ?>%"></div>
                    </div>
                  </div>
                </td>
              </tr>

              <tr class="border-b">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">📈 <?php _e("Зовнішня оптимізація", "catalog-wp"); ?></td>
                <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <div class="rating-row relative font-semibold">
                    <div class="flex items-center text-center border bg-gray-300 rounded-xl py-2">
                      <div class="relative z-1" style="width:<?php echo out_rating($current_id); ?>%">
                        <span><?php echo out_rating($current_id); ?> / 100</span>
                      </div>

                      <div class="h-full absolute left-0 top-0 bg-green-300 rounded-xl text-center" style="width:<?php echo out_rating($current_id); ?>%"></div>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">🚀 <?php _e("Загальна оптимізація", "catalog-wp"); ?></td>
                <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <div class="rating-row relative font-semibold">
                    <div class="flex items-center text-center border bg-gray-300 rounded-xl py-2">
                      <div class="relative z-1" style="width:<?php echo common_rating($current_id); ?>%">
                        <span><?php echo common_rating($current_id); ?> / 100</span>
                      </div>

                      <div class="h-full absolute left-0 top-0 bg-green-300 rounded-xl text-center" style="width:<?php echo common_rating($current_id); ?>%"></div>
                    </div>
                  </div>
                  
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-4/12 lg:px-6">
      <div>
        <?php if (is_singular('sites')): ?>
          <div class="mb-6">
            <div class="text-lg text-gray-600">✅ <?php _e("Сайт перевірений модератором", "catalog-wp"); ?></div>
            <div class="text-lg text-gray-600 border-b border-gray-300 pb-6 mb-6">👁️ <?php _e("Переглядів", "catalog-wp"); ?>: <?php echo $countNumber; ?></div>
            <div class="border-b border-gray-300 pb-6 mb-6">
              <div class="text-lg text-gray-600 mb-2">📣 <?php _e("Поділитись", "catalog-wp"); ?></div>
              <div>
                <?php do_action('show_social_share_buttons'); ?>
              </div>
            </div>
          </div>
          <!-- CMS -->
          <?php if ($site_cms): ?>
            <?php if ($site_cms != '🤷‍♂️'): ?>
              <div class="rounded-lg shadow-lg mb-6">
                <h2 class="text-gray-200 text-lg text-center bg-theme-dark rounded-t-lg p-3"><?php _e("Ще сайти на CMS", "catalog-wp"); ?> <?php echo $site_cms; ?></h2>
                <div class="bg-white rounded-b-lg p-3">
                  <?php 
                    $top_sites = new WP_Query( array( 
                      'post_type' => 'sites', 
                      'posts_per_page' => 10,
                      'order' => 'DESC',
                      'meta_query' => array(
                        'relation' => 'AND',
                        array(
                          'key' => 'check_site_cms_meta',
                          'value' => $site_cms,
                          'compare' => 'IN',
                        ),
                        array(
                          'orderby'   => 'rand',
                        ),
                      ),
                    ) );
                    if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
                  ?>
                    <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
                  <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        <?php endif; ?>
        <!-- Now see -->
        <div class="rounded-lg shadow-lg mb-6">
          <h2 class="text-lg text-center bg-yellow-200 rounded-t-lg p-3">👀 <?php _e("Зараз дивляться", "catalog-wp"); ?></h2>
          <div class="bg-white rounded-b-lg p-3">
            <?php 
              $top_sites = new WP_Query( array( 
                'post_type' => 'sites', 
                'posts_per_page' => 10,
                'orderby' => 'rand'
              ) );
              if ($top_sites->have_posts()) : while ($top_sites->have_posts()) : $top_sites->the_post(); 
            ?>
              <div class="border-b border-gray-200 last-of-type:border-transparent mb-2 last-of-type:mb-0 pb-2 last-of-type:pb-0"><a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-blue-500"><?php the_title(); ?></a></div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </div>
        </div>

        <!-- our -->
        <div class="rounded-lg shadow-lg mb-6">
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

        <!-- links -->
        <div class="super-links rounded-lg shadow-lg">
          <h2 class="text-lg text-center bg-indigo-200 rounded-t-lg p-3">👍🏻 <?php _e("Корисні посилання", "catalog-wp"); ?></h2>
          <div class="bg-white rounded-b-lg p-3">
            <?php 
              $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              $super_links = super_links($current_url);
              // shuffle($super_links);
              foreach ($super_links as $super_link):
            ?>
              <?php echo $super_link->top_links; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

<?php get_footer(); ?>