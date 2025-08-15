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

<main class="main-box lg:pt-24 lg:pb-30 py-10">
    <div class="wrapper">
        <div class="flex flex-col lg:flex-row justify-between lg:gap-5 gap-10 items-center">
          <div class="lg:max-w-[671px] w-full text-center lg:text-left">
              <span class="text-sm leading-[1.71] tracking-normal text-blue block">29 May 2021</span>
              <h2 class="mt-4 lg:mb-6 mb-5 xl:text-h1 lg:text-h2 md:text-h4 text-h5 text-primary font-semibold">Brand Positioning that you can&apos;t ignore in 2021</h2>
              <p>Lorem ipsum dolor sit amet, consectetur dipiscing elit. Vestibulum vitae nunc vitae neque .</p>
              <a href="<?php echo $link;?>" class="mt-8 text-[#1a1a1a] hover:underline mx-auto lg:mx-0 flex gap-3 items-center max-w-max">
                Learn More
                <span class="flex items-center justify-center">
                  <?php echo file_get_contents(get_template_directory() . '/assets/images/arrow.svg'); ?>
                </span>
              </a>
          </div>

          <div class="relative max-w-max mx-auto before:xl:w-6 before:xl:h-6 before:h-4 before:w-4 before:bg-blue before:absolute before:top-0 before:xl:-left-12 before:-left-5 before:xl:rounded-br-lg before:rounded-br after:w-4 after:h-4 after:xl:w-10 after:xl:h-10 after:bg-red after:absolute after:bottom-0 after:xl:-right-14 after:-right-5 after:xl:rounded-tl-xl after:rounded-tl-lg">
            <img class="rounded-2xl object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/banner.jpg" alt="a portrait on the notebook"/>
          </div>
        </div>
    </div>
</main>