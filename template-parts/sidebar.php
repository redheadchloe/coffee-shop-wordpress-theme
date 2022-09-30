<aside>
    <h3 class="category-title">カテゴリ一覧</h3>
    <ul class="category-list">
        <?php
        $args = [
            'title_li' => '', // to remove the name
            'show_count' => 'true',
        ];
        wp_list_categories($args);
        ?>
    </ul>

    <h3 class="archive_title">月別アーカイブ</h3>
    <ul class="archive_list">
        <?php
        $args = [
            'type' => 'monthly',
            'show_post_count' => 'true',
        ];
        wp_get_archives($args);
        ?>
    </ul>
    <?php
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 5,
        'post__not_in' => [$post->ID],
    ];
    $the_query = new WP_query($args);
    if ($the_query->have_posts()) : ?>
        <h3 class="archive_title">最新記事</h3>
        <ul class="archive_list">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    <?php endif; ?>
</aside>