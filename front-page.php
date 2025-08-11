<?php
    get_header();
?>

<div class="lg:pt-6 xl:px-14 bg-gradient-light-blue-10">
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
?>
<div class="lg:flex flex-col lg:gap-32 lg:pb-22">
<?php
    get_template_part("/partials/pricing/section2");
    get_template_part("/partials/pricing/section1");
?>
</div>
<?php
    get_footer();
?>