<?php 
  get_header(); 
  $countNumber = tutCount(get_the_ID()); 
	$currentId = get_the_ID();
	getMeta($currentId);
	$current_term = wp_get_post_terms(  get_the_ID() , 'board', array( 'parent' => 0 ) );
?>

<div class="container py-10">
  <div class="flex flex-wrap lg:-mx-6">
    <div class="w-full lg:w-2/3 lg:px-6">
      <!-- BREADCRUMBS -->
      <div class="breadcrumbs text-sm text-gray-800 dark:text-gray-200 mb-6" itemprop="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <ul class="flex items-center flex-wrap -mr-4">
          <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem' class="breadcrumbs_item px-4 pl-8">
            <a itemprop="item" href="<?php echo home_url(); ?>" class="text-blue-500">
              <span itemprop="name"><?php _e( 'Главная', 'treba-wp' ); ?></span>
            </a>                        
            <meta itemprop="position" content="1">
          </li>
          <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class="breadcrumbs_item px-4">
            <a itemprop="item" href="<?php echo get_post_type_archive_link('items'); ?>" class="text-blue-500">
              <span itemprop="name"><?php _e( 'Объявления', 'treba-wp' ); ?></span>
            </a>                        
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item text-gray-600 px-4">
            <span itemprop="name"><?php the_title(); ?></span>
            <meta itemprop="position" content="3" />
          </li>
        </ul>
      </div>
      <!-- MAIN -->
      <div class="mb-12">
        <div class="flex flex-wrap lg:-mx-4 mb-6 lg:mb-12">
          <div class="w-full lg:w-1/3 lg:px-4 mb-6 lg:mb-0">
            <!-- IMG -->
            <?php if( has_post_thumbnail() ): ?>
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-full h-full xl:h-full object-cover">
            <?php else: ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no_photo.jpeg" class="w-full ">
            <?php endif; ?>
          </div>
          <div class="w-full lg:w-2/3 lg:px-4">
            <h1 class="text-2xl lg:text-3xl font-semibold mb-6"><?php the_title(); ?></h1>
            <?php if (carbon_get_the_post_meta('crb_items_price')): ?>
              <div class="mb-6">
                <span class="bg-green-500 text-gray-200 text-center font-bold rounded-lg px-4 py-2"><?php echo carbon_get_the_post_meta('crb_items_price'); ?> грн.</span>
              </div>
            <?php endif; ?>
            <div class="text-sm">
              <div class="mb-2"><span class="font-medium"><?php _e("Регион", "treba-wp"); ?></span>: <?php echo carbon_get_the_post_meta('crb_items_region'); ?></div>
              <div class="mb-2"><span class="font-medium"><?php _e("Город", "treba-wp"); ?></span>: <?php echo carbon_get_the_post_meta('crb_items_city'); ?></div>
              <div class="mb-2"><span class="font-medium"><?php _e("Адрес", "treba-wp"); ?></span>: <?php echo carbon_get_the_post_meta('crb_items_address'); ?></div>
            </div>
          </div>
        </div>
        <div class="mb-6">
          <h2 class="text-2xl font-semibold mb-4"><?php _e("Описание", "treba-wp"); ?></h2>
          <div class="content">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="text-sm mb-4">
          <div class="mb-2"><span class="font-medium"><?php _e("Добавлено", "treba-wp"); ?></span>: <?php echo get_post_time('d.m.Y') ?></div>
          <div class="mb-2"><span class="font-medium"><?php _e("Просмотров", "treba-wp"); ?></span>: <?php echo $countNumber; ?></div>
          <div class="mb-2"><span class="font-medium"><?php _e("Номер объявления", "treba-wp"); ?></span>: <?php echo carbon_get_the_post_meta('crb_items_number'); ?></div>
        </div>
        <div class="mb-6">
          <span class="font-medium"><?php _e("Автор", "treba-wp"); ?></span>: <?php echo carbon_get_the_post_meta('crb_items_author'); ?>
        </div>
        <div class="single-item-success">
          <?php 
            $meta_success_item = 'success_item_'.$currentId;
            $rating_personal_front = get_post_meta( $currentId, $meta_success_item, true );
          ?>
          👍🏻 Успешных сделок: <?php echo $rating_personal_front; ?>
        </div>
        <div class="single-item-rating">
          <?php 
            $meta_rating_item = 'rating_item_'.$currentId;
            $rating_item_front = get_post_meta( $currentId, $meta_rating_item, true );
          ?>
          ⭐ Рейтинг объявления: <?php echo $rating_item_front; ?>
        </div>
      </div>
      <!-- COMMENTS --> 
      <div class="flex justify-center mb-4">
        <div class="inline-block bg-blue-500 text-2xl text-gray-200 uppercase rounded-lg -rotate-2 px-4 py-2"><?php _e("Комментарии", "treba-wp"); ?></div>
      </div>
      <div class="content mb-10">
        <?php comments_template(); ?>
      </div>
    </div>
    <div class="w-full lg:w-1/3 lg:px-6">
      <?php get_template_part('template-parts/sidebar'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>