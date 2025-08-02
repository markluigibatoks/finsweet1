<div id="drawer" class="absolute top-0 bg-gradient-light-blue-10 w-full text-grey h-0 overflow-hidden transition-all ease-in-out duration-700">
    <div class="main-box overflow-auto h-full">    
        <div class="wrapper">
            <nav class="pt-30">
                <ul class="flex flex-col gap-12">
                    <li>
                        <a class="text-h5 tracking-tigher hover:text-blue <?php echo is_front_page() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Home</a>
                    </li>
                    <li>
                        <a class="text-h5 tracking-tigher hover:text-blue <?php echo is_page('product') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/product'); ?>">Product</a>
                    </li>
                    <li>
                        <a class="text-h5 tracking-tigher hover:text-blue <?php echo is_page('pricing') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/pricing'); ?>">Pricing</a>
                    </li>
                    <li>
                        <a class="text-h5 tracking-tigher hover:text-blue <?php echo is_page('about-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                    </li>
                    <li>
                        <a class="text-h5 tracking-tigher hover:text-blue <?php echo is_page('contact') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact'); ?>">Contact</a>
                    </li>
                    <li>
                        <a class="text-h5 tracking-tigher hover:text-blue <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>