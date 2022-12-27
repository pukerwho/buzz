<?php get_header(); ?>

<div class="container">
  <?php 
  $domain_array = array(
    "google.com",
    "priazovka.com"
    
  );

  
  
  ?>
  <?php foreach ($domain_array as $link): ?>
    <div>
      <?php echo get_page_title($link); ?>
    </div>
  <?php endforeach; ?>
</div>

<?php get_footer(); ?>