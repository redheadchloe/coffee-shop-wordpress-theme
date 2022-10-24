<?php get_header(); ?>
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>

<main class="main width part section">
    <div class="container">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <h2 class="my-2">「<?php the_search_query(); ?>」の検索結果 (<?php echo $wp_query->found_posts; ?>)</h2>
        <?php if (have_posts()) : ?>
            <div class="grid-4">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/loop', 'post'); ?>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div class="my-2 text-center">
                <p>検索結果はありませんでした。</p>
            </div>
        <?php endif; ?>







    </div>
    <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
    } ?>
    </div>

</main>

<?php get_footer(); ?>