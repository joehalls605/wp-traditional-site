<?php get_header(); ?> <!-- Includes the header.php file, which contains the site's header section. -->
<main class="main-content">
    <?php get_template_part( 'templates/home' );?>
    <?php get_template_part( 'templates/parts/product-highlights' ); ?>
    <?php get_template_part( 'templates/parts/certified-experience' ); ?>
    <?php get_template_part( 'templates/parts/cta-section' ); ?>
</main>
<?php get_footer(); ?>
<!-- Includes the footer.php file, which contains the site's footer section. -->
