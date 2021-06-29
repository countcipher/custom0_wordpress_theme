<?php get_header() ?>

<section class="hero">  
    <h1>Blog</h1>
</section>

<section class="regular-container">
    <?php if(have_posts()) : ?>

        <?php while(have_posts()) : the_post(); ?>
            <div class="blog-roll-entry">
                <?php if(has_post_thumbnail()) : ?>

                    <?php the_post_thumbnail(); ?>

                <?php endif; ?>

                <h1><?php the_title(); ?></h1>

                <?php the_excerpt(); ?>

                    <button class="read-more">
                        <a href="<?php the_permalink(); ?>">
                            Read More
                        </a>
                    </button>

                <hr>

            </div>
        <?php endwhile; ?>

    <?php endif; ?>
</section>

<?php get_footer(); ?>