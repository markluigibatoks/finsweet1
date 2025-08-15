<?php 
get_header();
?>

<div class="min-h-screen min-w-screen lg:pt-6 xl:px-14 bg-gradient-light-blue-10">
<?php
    get_template_part("/partials/header");
?>

  <main class="lg:pt-48 pt-20 max-w-[378px] w-full text-center mx-auto">
    <div class="flex items-center justify-center">
      <?php echo file_get_contents(get_template_directory() . '/assets/images/404/icon1.svg'); ?>
    </div>
    <span class="mt-8 block text-blue">404</span>
    <h1 class="my-6 xl:text-h1 lg:text-h2 md:text-h4 text-h5 text-primary">Page Not Found</h1>
    <p>The page you are looking for doesn't exist or has been moved</p>
    <a href="<?php echo site_url("/") ?>" class="mt-8 button-red mx-auto max-w-max block">Back to Home</a>
</main>
</div>

<?php wp_footer(); ?>
</body>
</html>