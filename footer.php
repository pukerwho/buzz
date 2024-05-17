</div>

<footer class="bg-theme-dark text-gray-200 py-20">
  <div class="container">
    <div class="flex flex-wrap lg:-mx-8">
      <div class="w-full lg:w-6/12 lg:px-8 mb-6 lg:mb-0">
        <div class="text-3xl text-gray-200 font-semibold mb-4">
          <a href="<?php echo get_home_url(); ?>"><span class="text-blue-500">Buzz</span><span class="text-red-500">my</span><span class="text-yellow-500">world</span></a>
        </div>
        <div class="font-light mb-6">
          <?php _e("Рейтинг сайтів. Порівняння вебсайтів. Ресурс буде цікавим тим, хто займається SEO, а також намагається заробити в інтернеті за допомогую сайтів", "catalog-wp"); ?>.
        </div>
        <div class="flex text-lg mb-6">
          <div class="font-semibold"><?php _e("Більш ніж", "catalog-wp"); ?> <span class="text-yellow-200">1000</span> <?php _e("сайтів", "catalog-wp"); ?></div>
        </div>
        <div>
          <a href="https://sviato.top/"><img src="https://buzzmyworld.com/wp-content/uploads/2024/05/sviato.jpeg" alt="Sviato.top" width="25"></a>
        </div>
      </div>

      <div class="w-full lg:w-3/12 lg:px-8 mb-6 lg:mb-0">
        <div class="text-lg text-gray-400 uppercase mb-4">
          <?php _e('CMS', 'treba-wp'); ?>
        </div>
        <div>
          <?php wp_nav_menu([
            'theme_location' => 'footer-cms',
            'container' => 'div',
            'menu_class' => 'flex flex-col'
          ]); ?> 
        </div>
      </div>

      <div class="w-full lg:w-3/12 lg:px-8">
        <div class="text-lg text-gray-400 uppercase mb-4">
          <?php _e('Контакти', 'treba-wp'); ?>
        </div>
        <div>
          Email: hello@buzzmyworld.com
        </div>
      </div>

    </div>
  </div>
</footer>

<div class="modal-bg hidden"></div>

<div class="modal" data-modal="menu">
  <div class="modal_content w-full h-screen">
    <div class="h-full bg-white rounded-xl">
      <div class="flex items-center justify-between bg-theme-dark text-white text-lg rounded-t-lg px-4 py-6 mb-4">
        <div class="logo font-extrabold">
          <a href="<?php echo get_home_url(); ?>"><span class="text-blue-500">Buzz</span><span class="text-red-500">my</span><span class="text-yellow-500">world</span></a>
        </div>
        <div class="modal-close-js">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>
      <div class="p-4">
        <div class="text-2xl font-title mb-6"><?php _e("Меню", "treba-wp"); ?></div>
        <div>
          <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'div',
            'menu_class' => 'flex flex-col'
          ]); ?> 
        </div>
      </div>
    </div>
  </div>  
</div>

<?php wp_footer(); ?>

</body>
</html>