<?php
$the_post_id = get_the_ID();
$news_terms = wp_get_post_terms($the_post_id, ['news']);
// print_r($news_terms);
?>
<?php foreach ($news_terms as $key => $news_term) {
?>
    <ul class="ann-item grid-4">
        <li>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        </li>
        <li>
            <small data-case="<?php echo $news_term->slug; ?>"><?php echo $news_term->name; ?></small>
        </li>
        <li><?php the_title(); ?></li>
        <li><i class="fa-solid fa-angle-right"></i></li>
    </ul>
    <ul class="content py-1">
        <li>
            <small><?php the_content(); ?></small>
        </li>
    </ul>
<?php } ?>