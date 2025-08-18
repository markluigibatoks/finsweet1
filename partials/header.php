<header class="relative z-50">
  <div class="relative z-10 main-box">
    <div class="wrapper">
      <div class="py-3 lg:py-0 flex items-center lg:gap-10 xl:gap-16">
        <a href="<?php echo site_url('/')?>">
          <div class="pr-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo" />
          </div>
        </a>

        <nav class="hidden lg:block">
            <ul class="flex lg:gap-8 xl:gap-12">
                <li>
                  <a class="leading-15 text-nav-link hover:text-blue <?php echo is_front_page() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Home</a>
                </li>
                <li>
                  <a class="leading-15 text-nav-link hover:text-blue <?php echo is_page('product') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/product'); ?>">Product</a>
                </li>
                <li>
                  <a class="leading-15 text-nav-link hover:text-blue <?php echo is_page('pricing') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/pricing'); ?>">Pricing</a>
                </li>
                <li>
                  <a class="leading-15 text-nav-link hover:text-blue <?php echo is_page('about-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                </li>
                <li>
                  <a class="leading-15 text-nav-link hover:text-blue <?php echo is_page('contact') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact'); ?>">Contact</a>
                </li>
                <li>
                  <a class="leading-15 text-nav-link hover:text-blue <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
                </li>
            </ul>
        </nav>

        <a href="https://github.com/markluigibatoks/finsweet1" target="_blank" class="ml-auto button-nav-link">Clone Project</a>
        <?php get_template_part('/partials/drawer-toggle') ?>
      </div>
    </div>
  </div>

  <?php get_template_part('/partials/drawer') ?>
</header>