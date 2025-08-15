<?php
  $recent_blog = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post_status' => 'publish'
  ]);
?>

<div class="main-box bg-white lg:py-32">
    <div class="wrapper">
        <div class="w-full">
            <h2 class="lg:text-h2 md:text-h4 text-h5 text-primary">Featured Posts</h2>
        </div>

        <div class="lg:mt-20 mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
          <div class="w-full">
            <div class="max-w-max">
              <img class="rounded-[10px] object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img1.jpg" alt="a computer"/>
            </div>
            <h2 class="mt-10 lg:mb-6 mb-5 text-h5 text-primary">Top 8 Traits of high-growth websites.</h2>
            <p>Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. </p>
            <a href="<?php echo site_url('/blog')?>" class="flex gap-3 mt-8 button-primary text-[#1A1A1A] hover:underline max-w-max">
                    Learn More

                    <div class="flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>
          </div>

          <div class="w-full">
            <div class="max-w-max">
              <img class="rounded-[10px] object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img2.jpg" alt="a computer"/>
            </div>
            <h2 class="mt-10 lg:mb-6 mb-5 text-h5 text-primary">Top 8 Traits of high-growth websites.</h2>
            <p>Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. </p>
            <a href="<?php echo site_url('/blog')?>" class="flex gap-3 mt-8 button-primary text-[#1A1A1A] hover:underline max-w-max">
                    Learn More

                    <div class="flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>
          </div>

          <div class="w-full">
            <div class="max-w-max">
              <img class="rounded-[10px] object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section1-img3.jpg" alt="a computer"/>
            </div>
            <h2 class="mt-10 lg:mb-6 mb-5 text-h5 text-primary">Top 8 Traits of high-growth websites.</h2>
            <p>Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. </p>
            <a href="<?php echo site_url('/blog')?>" class="flex gap-3 mt-8 button-primary text-[#1A1A1A] hover:underline max-w-max">
                    Learn More

                    <div class="flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>
          </div>
        </div>
    </div>
</div>

<div class="main-box lg:pt-54 pt-10">
    <div class="wrapper">
        <div class="w-full text-center">
          <span class="text-label-2 uppercase">Our Blog</span>
          <h2 class="lg:text-h2 md:text-h4 text-h5 uppercase">Most Recent Post</h2>
        </div>

        <?php
          if($recent_blog->have_posts()) {
            while($recent_blog->have_posts()) {
              $recent_blog->the_post();
        ?>
        
        <div class="bg-white lg:mt-16 mt-5 sm:p-14 p-3 grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-12 w-full">
            <div class="max-w-max mx-auto w-full">
              <img class="object-cover w-full h-full" src="<?php echo get_the_post_thumbnail_url(null, 'featured-image'); ?>" alt="featured image"/>
            </div>
            <div class="place-content-center">
              <div class="uppercase text-label-2 text-left flex flex-col md:flex-row justify-between md:items-center">
                <span><?php echo get_the_date('l j F, Y'); ?></span>
                <span>By <?php the_author(); ?></span>
              </div>
              <h2 class="md:text-h4 md:mt-3 mt-2 text-h5 uppercase"><?php the_title(); ?></h2>
              <p class="opacity-78"><?php echo wp_trim_words(get_the_excerpt(), 30) ?></p>
              <a href="<?php the_permalink(); ?>" class="button-primary max-w-max block mt-8">Read More</a>
            </div>
        </div>
        
        <?php
            }
            wp_reset_postdata();
          }
        ?>
    </div>
</div>