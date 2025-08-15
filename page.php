<?php 
  get_header();
  get_template_part("/partials/header");
?>

<main class="lg:mt-35 mt-10 main-box">
  <div class="prose max-[934px] mx-auto">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div>
          <h1 class="lg:mb-6 mb-5 xl:text-h1 lg:text-h2 md:text-h4 text-h5"><?php echo get_the_title();?></h1>
          <?php the_content(); ?>
        </div>
      <?php }
    } ?>
  </div>
</main>

<?php get_footer();