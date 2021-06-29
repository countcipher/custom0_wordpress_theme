<?php get_header() ?>

<section class="hero">  
    <h1><?php the_title(); ?></h1>
</section>

<section class="regular-container">
    <?php if(has_post_thumbnail()) : ?>

        <?php the_post_thumbnail(); ?>

    <?php endif; ?>

    <div class="content-div">
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>