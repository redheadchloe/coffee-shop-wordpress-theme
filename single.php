<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="single-blog section width part">
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <div class="grid-side">
                <?php get_template_part('template-parts/sidebar'); ?>
                <main <?php post_class('texe-center'); ?>>
                    <small><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></small>
                    <h3 class="article_title my-2"><?php the_title(); ?></h3>
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                        <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                    <?php endif; ?>
                    <div class="content my-2">
                        <?php the_content(); ?>
                    </div>
                </main>
            <?php endwhile; ?>
        <?php endif; ?>
            </div>
            <div class="pager">
                <ul class="flex-center">
                    <li><?php previous_post_link('%link', '<i class="fa-solid fa-chevron-left"></i> %title '); ?></li>
                    <li><?php next_post_link('%link', '%title <i class="fa-solid fa-chevron-right"></i>'); ?></li>
                </ul>
            </div>
        </section>




        </div>

        <?php get_footer(); ?>