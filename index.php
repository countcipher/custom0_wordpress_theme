<?php get_header() ?>

<section class="regular-container">
    <?php if(have_posts()) : ?>

        <?php while(have_posts()) : the_post(); ?>
            <div class="blog-roll-entry">
                <?php if(has_post_thumbnail()) : ?>

                    <?php the_post_thumbnail(); ?>

                <?php endif; ?>

                <h1><?php the_title(); ?></h1>

                <?php the_excerpt(); ?>

                <a href="<?php the_permalink(); ?>">
                    <button class="read-more">Read More</button>
                </a>
            </div>
        <?php endwhile; ?>

    <?php endif; ?>
</section>

<?php get_footer(); ?>