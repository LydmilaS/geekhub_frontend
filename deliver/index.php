<?php get_header(); ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="post-content">
                    <ul>
                        <?php
                        if  (have_posts()):
                            while (have_posts()): the_post();?>
                                <li> 
                                <?php the_post_thumbnail();?>
                                <h2><?php the_title(); ?></h2>

                                    <?php the_content();?>
                                </li>
                            <?php endwhile;

                        else :
                            echo '<p>Not found content</p>';
                        endif;
                        ?>
                    </ul>
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