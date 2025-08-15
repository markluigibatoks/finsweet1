<?php 
get_header();
?>

<div class="lg:pt-6 xl:px-14 bg-gradient-light-blue-10">
<?php
    get_template_part("/partials/header");
?>
  <main class="main-box lg:pt-24 lg:pb-30 py-10">
    <div class="wrapper">
      <div class="flex flex-col lg:flex-row justify-between lg:gap-5 gap-10 items-center">
        <div class="lg:max-w-[671px] w-full text-center lg:text-left">
            <span class="text-sm leading-[1.71] tracking-normal text-blue block"><?php echo get_the_date();?></span>
            <h2 class="mt-4 lg:mb-6 mb-5 xl:text-h1 lg:text-h2 md:text-h4 text-h5 text-primary font-semibold"><?php echo get_the_title();?></h2>
            <p><?php echo wp_trim_words(get_the_excerpt(), 13);?></p>
        </div>

        <div class="relative max-w-max mx-auto before:xl:w-6 before:xl:h-6 before:h-4 before:w-4 before:bg-blue before:absolute before:top-0 before:xl:-left-12 before:-left-5 before:xl:rounded-br-lg before:rounded-br after:w-4 after:h-4 after:xl:w-10 after:xl:h-10 after:bg-red after:absolute after:bottom-0 after:xl:-right-14 after:-right-5 after:xl:rounded-tl-xl after:rounded-tl-lg">
          <img class="rounded-2xl object-cover w-full" src="<?php echo get_template_directory_uri();?>/assets/images/home/banner.jpg" alt="a portrait on the notebook"/>
        </div>
      </div>
</main>
</div>

</div>

<div class="main-box lg:py-16 py-10">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div class="lg:mt-16 mt-10 prose max-w-7xl mx-auto">
          <?php the_content(); ?>
        </div>
      <?php }
    } ?>
</div>

<?php get_footer(); ?>