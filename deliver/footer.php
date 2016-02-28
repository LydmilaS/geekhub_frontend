<footer>
    <div class="container">
    <div class="row">
    <div class="col-md-4">
        <div class="logo pull-left">
             <a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a>
        </div>
        <ul class="soc-links">
            <li><a href="#" class="fa fa-twitter"></a> </li>
            <li><a href="#" class="fa fa-facebook"></a> </li>
            <li><a href="#" class="fa fa-rss"></a> </li>
        </ul>  
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida quam quis nunc rutrum placerat. Proin eu mi vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.
        </p>  
    </div>
    <div class="col-md-2">
        <h3>Contact info</h3>
        <ul class="contact-info">
            <li>222 Ave C South</li>
            <li>Saskatoon, Saskatchewan </li>
            <li>Canada S7K 2N5</li>
            <li>info@deliver.ca</li>
            <li>1.306.222.3456</li>
        </ul>
    </div>
    <div class="quick-menu col-md-2">
        <h3>Qiuck menu</h3>
        <?php
            $args = array (
                'theme_location' => 'footer'
            );
        ?>
        <?php wp_nav_menu( $args);?>
    </div>
    <div class="newsletter col-md-3">
        <h3>Newsletter</h3>
        <p>Lorem ipsum dolor sit amet dolor consectetur adipiscing elit. </p>
        <form action="#">
            <input type="email" name="useremail" placeholder="Email" />
            <input type="submit" name="submit" value="Ok" />
        </form>
    </div>
    </div>
    <div class="bottom-footer">
       <p class="pull-left">Copyright 2013  <a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.</p> 
       <ul>
           <li>About</li>
           <li>Privacy Policy</li>
           <li>Contact</li>
       </ul>
    </div>  
    </div>
</footer>
    <?php wp_footer();?>
    </body>
</html>