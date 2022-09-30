<?php get_header(); ?>

<section class="section width blog-page part">
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <h2 class="text-center mb-2">記事一覧</h2>
    <p class="text-center my-2">新たなコーヒーとの出逢いを求めて、コーヒーにまつわる豆知識やお役立ち情報をお届け。</p>

    <div class="container grid-side">
        <?php get_template_part('template-parts/sidebar'); ?>

        <main class="blog-wrapper">
            <div class="grid">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="blog-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) { ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php } else { ?>
                                    <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                                <?php } ?>
                                <small><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></small>
                                <h4 class="title"><?php the_title(); ?></h4>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </main>
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