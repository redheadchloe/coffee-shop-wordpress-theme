<?php get_header(); ?>
<section class="section width category-page part">
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <?php if (is_month()) : ?>
        <h2 class="text-center"><?php the_time('Y年m月'); ?></h2>
    <?php else : ?>
        <h2 class="text-center"><?php echo the_category(); ?></h2>
    <?php endif; ?>
    <div class="grid-side">
        <?php get_template_part('template-parts/sidebar'); ?>
        <div class="grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="blog-item">
                        <a href="<?php echo the_permalink(); ?>">
                            <small><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></small>
                            <h3 class="article_title"><?php the_title(); ?></h3>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                            <?php endif; ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="pagination text-center">
        <?php the_posts_pagination([
            'screen_reader_text' => '&nbsp;',
            'prev_text' => __('前へ', 'textdomain'),
            'next_text' => __('次へ', 'textdomain'),
        ]); ?>
    </div>
</section>




</div>

<?php get_footer(); ?>