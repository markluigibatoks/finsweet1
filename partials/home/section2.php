<?php
  $recent_blog = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post_status' => 'publish'
  ]);

  $link = '#';

  if($recent_blog->have_posts()) {
    
    while($recent_blog->have_posts()) {
      $recent_blog->the_post();

      $link = get_the_permalink();
      wp_reset_postdata();
    }
  } 
?>

<div class="main-box bg-white lg:pb-32 pb-10">
    <div class="wrapper">
        <div class="w-full">
            <h2 class="lg:text-h2 md:text-h4 text-h5 text-primary">All Posts</h2>
        </div>

        <div class="lg:mt-20 mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-20">
          <div class="w-full">
            <div class="max-w-max">
              <img class="rounded-[10px] object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section2-img1.jpg" alt="a computer"/>
            </div>
            <h2 class="mt-10 lg:mb-6 mb-5 text-h5 text-primary">Top 8 Traits of high-growth websites.</h2>
            <p>Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. </p>
            <a href="<?php echo $link;?>" class="flex gap-3 mt-8 button-primary text-[#1A1A1A] hover:underline max-w-max">
                    Learn More

                    <div class="flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>
          </div>

          <div class="w-full">
            <div class="max-w-max">
              <img class="rounded-[10px] object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section2-img2.jpg" alt="a computer"/>
            </div>
            <h2 class="mt-10 lg:mb-6 mb-5 text-h5 text-primary">Top 8 Traits of high-growth websites.</h2>
            <p>Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. </p>
            <a href="<?php echo $link;?>" class="flex gap-3 mt-8 button-primary text-[#1A1A1A] hover:underline max-w-max">
                    Learn More

                    <div class="flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>
          </div>

          <div class="w-full">
            <div class="max-w-max">
              <img class="rounded-[10px] object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section2-img3.jpg" alt="a computer"/>
            </div>
            <h2 class="mt-10 lg:mb-6 mb-5 text-h5 text-primary">Top 8 Traits of high-growth websites.</h2>
            <p>Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. </p>
            <a href="<?php echo $link;?>" class="flex gap-3 mt-8 button-primary text-[#1A1A1A] hover:underline max-w-max">
                    Learn More

                    <div class="flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>
          </div>

          <div class="w-full">
            <div class="max-w-max">
              <img class="rounded-[10px] object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section2-img4.jpg" alt="a computer"/>
            </div>
            <h2 class="mt-10 lg:mb-6 mb-5 text-h5 text-primary">Top 8 Traits of high-growth websites.</h2>
            <p>Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. </p>
            <a href="<?php echo $link;?>" class="flex gap-3 mt-8 button-primary text-[#1A1A1A] hover:underline max-w-max">
                    Learn More

                    <div class="flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>
          </div>

          <div class="w-full">
            <div class="max-w-max">
              <img class="rounded-[10px] object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section2-img5.jpg" alt="a computer"/>
            </div>
            <h2 class="mt-10 lg:mb-6 mb-5 text-h5 text-primary">Top 8 Traits of high-growth websites.</h2>
            <p>Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. </p>
            <a href="<?php echo $link;?>" class="flex gap-3 mt-8 button-primary text-[#1A1A1A] hover:underline max-w-max">
                    Learn More

                    <div class="flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>
          </div>

          <div class="w-full">
            <div class="max-w-max">
              <img class="rounded-[10px] object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/section2-img6.jpg" alt="a computer"/>
            </div>
            <h2 class="mt-10 lg:mb-6 mb-5 text-h5 text-primary">Top 8 Traits of high-growth websites.</h2>
            <p>Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. </p>
            <a href="<?php echo $link;?>" class="flex gap-3 mt-8 button-primary text-[#1A1A1A] hover:underline max-w-max">
                    Learn More

                    <div class="flex items-center justify-center">
                        <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                    </div>
                </a>
          </div>
        </div>
    </div>
</div>