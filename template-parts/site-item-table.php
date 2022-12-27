<!-- Row -->
<tr class="border-b border-gray-300 last:border-transparent">
  <td class="whitespace-nowrap px-2 py-3">
    <div class="hover:text-blue-500"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  </td>
  <td class="whitespace-nowrap flex items-center px-2 py-3">
    <div class="w-full relative">
      <div class="flex items-center text-center border bg-gray-300 rounded-xl py-2">
        <div class="relative z-1" style="width:<?php echo common_rating(get_the_ID()); ?>%">
          <span><?php echo common_rating(get_the_ID()); ?> / 100</span>
        </div>
        <div class="h-full absolute left-0 top-0 bg-green-300 rounded-xl text-center" style="width:<?php echo common_rating(get_the_ID()); ?>%"></div>
      </div>
    </div>
    
  </td>
  <td class="max-w-xs whitespace-nowrap overflow-hidden px-2 py-3">
    <div class="text-gray-500 font-light"><?php echo get_post_meta(get_the_ID(), 'check_site_cms_meta', true) ?></div>
  </td>
  <td class="whitespace-nowrap px-2 py-3">
    <?php echo get_post_meta(get_the_ID(), 'site_price', true) ?>$
  </td>
  <td class="whitespace-nowrap flex items-center px-2 py-3">
    <div class="mr-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="#ffaa46" viewBox="0 0 24 24" stroke="transparent">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
      </svg>
    </div>
    <div class="text-gray-500"><span class="font-medium"><?php echo get_post_meta(get_the_ID(), 'site_main_rating', true) ?></span></div>
  </td>
</tr>
