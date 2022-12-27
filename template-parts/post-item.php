<div class="relative">
  <div class="h-[250px] relative mb-6">
    <?php 
      $medium_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
      $large_thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
    ?>
    <img 
    class="w-full h-full object-cover rounded-t-lg xl:rounded-l-lg" 
    alt="<?php the_title(); ?>" 
    src="<?php echo $medium_thumb; ?>" 
    srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w" 
    loading="lazy" 
    data-src="<?php echo $medium_thumb; ?>" 
    data-srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w">
    <!-- categories -->
    <div class="absolute left-4 top-4">
      <div class="flex items-center mb-2 xl:mb-3">
        <?php
        $post_categories = get_the_terms( $new_posts->ID, 'category' );
        foreach ($post_categories as $post_category){ ?>
          <a href="<?php echo get_term_link($post_category->term_id, 'category') ?>" class="text-sm inline-block bg-yellow-100 text-black rounded px-2 py-1 mr-2 mb-2 lg:mb-0"><?php echo carbon_get_term_meta( $post_category->term_id, 'crb_category_emoji' ); ?> <?php echo $post_category->name; ?></a> 
        <?php } ?>
      </div>
    </div>
    <!-- end categories -->
  </div>
  <div class="mb-4"><a href="<?php the_permalink(); ?>" class="text-xl font-bold hover:text-blue-500"><?php the_title(); ?></a></div>
  <div class="text-sm text-gray-500 mb-2">
    <?php 
      $content_text = wp_strip_all_tags( get_the_content() );
      echo mb_strimwidth($content_text, 0, 200, '...');
    ?>
  </div>
  <div class="text-sm italic text-gray-500 opacity-75 mb-4">
    <?php echo get_the_modified_time('d.m.Y') ?>
  </div>
</div>