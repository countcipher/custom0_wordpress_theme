<?php
/*
Template Name:  Custom Post Type
*/
?>

<?php get_header() ?>

<section class="hero">  
    <h1><?php the_title(); ?></h1>
</section>

<?php
//LOGIC FOR GETTING THE CUSOTM POST TYPE NAMED 'test'
?>
<section class="regular-container">
<?php $loop = new WP_Query(array(
        'post_type'   =>    'test',
        'order_by'    =>    'post_id',
        'order'       =>    'ASC'
      ));?>

      <?php while($loop->have_posts()) : $loop->the_post() ?>

        <h1><?php the_title(); ?></h1>

        <?php the_post_thumbnail(); ?>

        <?php the_content(); ?>

      <?php endwhile; ?>
</section>

<?php get_footer(); ?>