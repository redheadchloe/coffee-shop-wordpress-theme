<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="width section part">
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <h2 class="my-2"><?php the_title(); ?></h2>
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
            <?php endif; ?>
            <div class="content">
                <?php echo the_content(); ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>