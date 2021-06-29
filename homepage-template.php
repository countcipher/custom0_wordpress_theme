<?php

/*
Template Name: Homepage
*/

?>

<?php get_header(); ?>
    <section class="hero">
        <h1><?php echo get_theme_mod('banner_heading', 'Banner Heading'); ?></h1>

        <h2><?php echo get_theme_mod('banner_tagline', 'Tagline goes here'); ?></h2>

        <button>Click Me!</button>
    </section>

    <section class="showcase">
        <div class="box box1">
            <h1>Title</h1>

            <h3>Subtitle</h3>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam ipsa provident nemo repudiandae ipsum corrupti, rem neque maxime aliquid quaerat. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam ipsa provident nemo repudiandae ipsum corrupti, rem neque maxime aliquid quaerat.</p>
        </div>

        <div class="box box2">
            <h1>Title</h1>

            <h3>Subtitle</h3>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam ipsa provident nemo repudiandae ipsum corrupti, rem neque maxime aliquid quaerat.</p>
        </div>

        <div class="box box3">
            <h1>Title</h1>

            <h3>Subtitle</h3>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam ipsa provident nemo repudiandae ipsum corrupti, rem neque maxime aliquid quaerat.</p>
        </div>
    </section>

    <section class="main-content">
    <div class="front-page-content">
        <?php the_content(); ?>
    </div>
    
        <!-- <div class="image">
            <img src="https://cdn.pixabay.com/photo/2016/01/19/14/56/office-work-1149087_960_720.jpg" alt="">
        </div> -->
        

        <!-- <div class="text">
            <h1>Title</h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sapiente ducimus vero dolorum, velit at quos molestiae excepturi a repudiandae eaque consequuntur sunt animi quisquam.</p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, magnam? Esse accusantium unde reprehenderit fugiat consectetur sint aliquam doloribus non ipsum atque alias placeat nemo, nam iste libero, ullam dignissimos. Corporis mollitia dicta atque dolore quod quas cumque ullam neque ipsum. Cumque odit repellat et.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sapiente ducimus vero dolorum, velit at quos molestiae excepturi a repudiandae eaque consequuntur sunt animi quisquam.</p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, magnam? Esse accusantium unde reprehenderit fugiat consectetur sint aliquam doloribus non ipsum atque alias placeat nemo, nam iste libero, ullam dignissimos. Corporis mollitia dicta atque dolore quod quas cumque ullam neque ipsum. Cumque odit repellat et.</p>
        </div> -->
    </section>

    <?php get_footer(); ?>