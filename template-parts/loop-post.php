<div class="blog-item">
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('medium'); ?>
        <?php } else { ?>
            <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
        <?php } ?></a>
    <small><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></small>
    <h4 class="title"><?php the_title(); ?></h4>
</div>