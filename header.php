<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="preloader">
    </div>
    <div class="bg mb-10">
        <nav class="flex global-nav">
            <a href="<?php echo home_url('/'); ?>">Coffee & co.</a>
            <ul class="mobile-menu flex">
                <li style="--i:1;"><a href="<?php echo home_url('/about/'); ?>" class="links">About</a></li>
                <li style="--i:2;"><a href="<?php echo home_url('/menu/'); ?>" class="links">Menu</a></li>
                <li style="--i:3;"><a href="<?php echo home_url('/blog/'); ?>" class="links">Blog</a></li>
                <li style="--i:4;"><a href="<?php echo home_url('/contact/'); ?>" class="links">Contact</a></li>
                <!-- <?php
                        $args = [
                            'menu' => 'menu',
                            'menu_class' => 'mobile-menu flex',
                            'container' => false,
                        ];
                        wp_nav_menu($args);
                        ?> -->
                <li style="--i:5;">
                    <?php get_search_form(); ?>
                </li>
                <li style="--i:6;"><a href="" class="icons"><i class="fa-brands fa-instagram"></i></a></li>
                <li style="--i:7;"><a href="" class="icons"><i class="fa-brands fa-facebook"></i></a></li>
                <li style="--i:8;"><a href="" class="icons"><i class="fa-brands fa-line"></i></a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>