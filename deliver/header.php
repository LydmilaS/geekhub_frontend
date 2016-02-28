<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<header>
    <div class="container">
        <div class="row">
            <div class="logo text-left col-xs-4 col-md-3">
                <a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a>
            </div>
            <div class="soc-links text-right col-md-offset-7 col-md-2">
                <ul>
                    <li><a href="#" class="fa fa-twitter"></a> </li>
                    <li><a href="#" class="fa fa-facebook"></a> </li>
                    <li><a href="#" class="fa fa-rss"></a> </li>
                </ul>
            </div>
        </div>
        <div class="row navigation">
            <nav class="navbar col-md-10">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navbar-left" id="myNavbar" >
                        <?php
                        $args = array (
                            'theme_location' => 'primary'
                        );
                        ?>
                        <?php wp_nav_menu( $args);?>
                </div>
            </nav>
            <div class="col-md-2">
                
            </div>
            </div>
        
    </div>
</header>
