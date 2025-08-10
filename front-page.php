<?php
    get_header();
?>

<div class="lg:pt-6 xl:pr-14 bg-gradient-light-blue-10">
<?php
    get_template_part("/partials/header");
    get_template_part("/partials/front-page/banner");
?>
</div>
<?php 
    get_template_part("/partials/front-page/middle1");
    get_template_part("/partials/front-page/middle2");
    get_template_part("/partials/front-page/main");
    get_template_part("/partials/front-page/bottom1");
    get_template_part("/partials/front-page/bottom2");
    get_template_part("/partials/front-page/bottom3");
    get_footer();
?>