<?php 
/*  Template Name: Contact Us Page
    Template Post Type: page
*/
  get_header();
?>


<div class="lg:pt-6 xl:px-14">
<?php
  get_template_part("/partials/header");
?>
</div>

<div class="lg:flex flex-col lg:gap-33 lg:pb-32 lg:pt-31 pb-10">
<?php
  get_template_part("/partials/contact/section1");
  get_template_part("/partials/contact/section2");
?>
</div>

<?php
  get_footer();
?>