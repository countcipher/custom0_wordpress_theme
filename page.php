
<?php get_header(); ?>
    <section class="hero">
        <h1><?php echo get_the_title(); ?></h1>
    </section>

    <section class="main-content page">
        <?php the_content(); ?>
    </section>

    <?php get_footer(); ?>