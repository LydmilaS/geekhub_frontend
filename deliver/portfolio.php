<?php
/*
Template Name: Portfolio
*/
 get_header(); ?>

<div class="content">
    <div class="container">
            <div class="page">
                <h2 class="text-left"><?php the_title(); ?></h2>
                <h3>Nothing but the best for our Portfolio</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
                     <?php 
                       $args = array(
                            'child_of' => $post->ID,
                            'title_li' => ''
                        );
                    ?>
                    <ul class="child-nav text-left"><?php wp_list_pages($args);?></ul>
                <div class="row portfolio-post-items">
                    <?php
                        $args = array(
                           'post_type' => 'portfolio',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_status' => 'publish',
                            'posts_per_page' => 12,
                            'paged' => $paged
                        );
                        query_posts($args);
                    ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                                <div class="portfolio-post-item col-md-4">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                    <?php the_content(); ?>
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail();?>
                                    </a>
                                </div>
                        <?php endwhile; ?>
                    <?php endif; ?> 
                </div>   
            </div>
            <div class="row get-quote">
            <h3>Do you need a Website?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
            <a href="#">Get a Free Quote</a>
        </div>
    </div>
</div>
        

<?php get_footer(); ?>
