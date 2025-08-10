<footer>
  <div class="relative lg:mt-38 main-box bg-[#EFF0F8] lg:py-0 py-10">
    <div class="relative wrapper lg:pt-73 lg:pb-20">
      <div class="rounded-tr-[10px] rounded-bl-[10px] lg:absolute -top-38 left-0 lg:px-30 lg:py-25 px-5 py-10 bg-blue lg:flex items-center gap-5 justify-between w-full text-center lg:text-left before:w-4 before:h-4 before:2xl:w-8 before:2xl:h-8 before:bg-red before:absolute before:top-0 before:2xl:-left-13 before:-left-5 before:rounded-bl before:2xl:rounded-bl-[10px] after:w-4 after:h-4 after:2xl:w-8 after:2xl:h-8 after:bg-blue after:absolute after:bottom-0 after:2xl:-right-13 after:-right-5 after:rounded-br after:2xl:rounded-br-[10px]">
          <h2 class="text-white lg:max-w-[461px] lg:text-h2 md:text-h4 text-h5">Get started with Finsweet today</h2>
          <a href="<?php echo site_url('/pricing') ?>" class="button-red block max-w-max mx-auto lg:mx-0 lg:mt-0 mt-10">View Pricing</a>
      </div>      
    
      <div class="lg:mt-0 mt-10 lg:flex gap-5 justify-between">
        <div class="flex flex-col justify-between pb-7">
          <div class="flex gap-5">
            <a href="#" target="_blank" class="hover:opacity-78 w-4 h-4 display flex items-center justify-center">
              <?php echo inline_svg('/assets/images/facebook.svg'); ?>
            </a>

            <a href="#" target="_blank" class="hover:opacity-78 w-4 h-4 display flex items-center justify-center">
              <?php echo inline_svg('/assets/images/instagram.svg'); ?>
            </a>

            <a href="#" target="_blank" class="hover:opacity-78 w-4 h-4 display flex items-center justify-center">
              <?php echo inline_svg('/assets/images/twitter.svg'); ?>
            </a>
          </div>

          <address class="lg:mt-0 mt-5 not-italic text-h5 leading-[1.41] -tracking-[0.72]">398 11th St, San Francisco</address>
        </div>

        <div>
          <div class="lg:max-w-[645px] xl:max-w-[845px] w-full flex flex-col sm:flex-row gap-10 sm:gap-5 justify-between">
            <div>
              <span class="text-[22px] font-medium leading-[28px] text-black">Company</span>
              <ul class="mt-5 sm:mt-12">
                <li>
                  <a class="hover:underline <?php echo is_page('product') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/product'); ?>">Product</a>
                </li>
                <li class="mt-6">
                  <a class="hover:underline <?php echo is_page('pricing') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/pricing'); ?>">Pricing</a>
                </li>
                <li class="mt-6">
                  <a class="hover:underline <?php echo is_page('about-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                </li>
              </ul>
            </div>

            <div>
              <span class="text-[22px] font-medium leading-[28px] text-black">Legal</span>
              <ul class="mt-5 sm:mt-12">
                <li>
                  <a class="hover:underline <?php echo is_page('privacy-policy') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a>
                </li>
                <li class="mt-6">
                  <a class="hover:underline <?php echo is_page('404') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/404'); ?>">404</a>
                </li>
                <li class="mt-6">
                  <a class="hover:underline <?php echo is_page('protected-page') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/protected-page'); ?>">Protected Page</a>
                </li>
              </ul>
            </div>

            <div>
              <span class="text-[22px] font-medium leading-[28px] text-black">Reach Us</span>
              <ul class="mt-5 sm:mt-12">
                <li>
                  <a class="hover:underline <?php echo is_page('contact') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact'); ?>">Contact Us</a>
                </li>
                <li class="mt-6">
                  <a href="mailto:fs@finsweet.com" target="_blank" class="block hover:underline max-w-max">fs@finsweet.com</a>
                </li>
                <li class="mt-6">
                  <a href="tel:+18080808" target="_blank" class="block hover:underline max-w-max">+1808 08 08</a>
                </li>
              </ul>
            </div>
          </div>
          <form method="POST" id="newsletter-form" class="mt-20 lg:mt-40 w-full lg:max-w-[645px] xl:max-w-[845px]">
            <div class="mx-auto lg:mx-0 flex lg:flex-row flex-col items-center gap-5 w-full relative">
              <input type="email" name="email" placeholder="Enter your email" class="bg-white w-full border-white/15 border-1 rounded-[5px] leading-[89px] lg:pl-5 lg:pr-[357px] px-5" />
              <button type="submit" class="py-5 px-9 max-w-[325px] cursor-pointer lg:absolute lg:right-3 button-red w-full">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="copyright" class="p-5 text-white bg-blue text-center leading-[1.41] -tracking-[0.54]">
      &copy; Copyright <a class="hover:underline <?php echo is_page('contact') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact'); ?>" href="<?php echo site_url('/') ?>"><?php echo get_bloginfo(); ?></a> <?php echo date('Y')?>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
