<?php 
/*  Template Name: Product Page
    Template Post Type: page
*/

get_header();
?>

<div class="lg:pt-6 xl:px-14 bg-gradient-light-blue-10">
<?php
    get_template_part("/partials/header");
    get_template_part("/partials/product/banner");
?>
</div>

<?php
  get_template_part("/partials/product/section1");
  get_template_part("/partials/product/section2");
  get_template_part("/partials/product/section3");
  
  get_footer();
?>