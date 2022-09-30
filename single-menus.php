<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <h2 class="article_title"><?php the_title(); ?></h2>
        <div class="content">
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>