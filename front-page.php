<?php get_header(); ?>


<div class="key text-center">
    <h1 style="--i:1;" class="mb-2">飲みたいコーヒーと出逢う</h1>
    <p style="--i:2;">Coffee & co. なら、あなたのコーヒーが必ず見つかります</p>
    <div class="btn my-2" style="--i:3;">
        <a href="<?php echo home_url('/menu/'); ?>">メニューを見る</a>
    </div>
</div>
<div class="info flex width">
    <ul class="address">
        <li><i class="fa-solid fa-phone mr-1"></i>0422.22.2244</li>
        <li><i class="fa-solid fa-square-envelope mr-1"></i>coffee&co@contact.com</li>
        <li>
            <i class="fa-solid fa-location-dot mr-1"></i>
            <address>〒101-0063 東京都千代田区 神田淡路町1-1-1</address>
        </li>
    </ul>
    <ul class="hours">
        <li><i class="fa-regular fa-clock mr-1"></i>営業時間</li>
        <li>平日：6：00〜19：00</li>
        <li>週末：6：00〜20：00</li>
        <li><i class="fa-solid fa-wifi mr-1"></i><i class="fa-solid fa-ban-smoking mr-1"></i><i class="fa-solid fa-square-parking mr-1"></i><i class="fa-solid fa-restroom"></i></li>
    </ul>
</div>
</div>

<section class="section width">
    <div class="about-wrapper grid">
        <div class="about-left text-center">
            <h2>Coffee & co. について</h2>
            <p class="mb-2">自分にぴったりのコーヒー、Coffee & co. で見つかる。</p>
            <a href=<?php echo home_url('/about/'); ?> class="page-link">もっと見る</a>
        </div>
        <div class="about-right grid">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/img1.jpeg">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/img4.jpeg">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/img3.jpeg">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/img2.jpeg">
        </div>
    </div>
    </div>
</section>

<div class="section sub flex-center">
    <h1>Coffee & co. の楽しみ方</h1>
</div>


<section class="section menus width text-center">
    <h2>メニュー</h2>
    <div class="menu grid-4">
        <figure>
            <figcaption>コーヒー</figcaption>
        </figure>
        <figure>
            <figcaption>サンドイッチ</figcaption>
        </figure>
        <figure>
            <figcaption>デザート</figcaption>
        </figure>
        <figure>
            <figcaption>コーヒー豆</figcaption>
        </figure>
    </div>
    <a class="my-2 page-link" href="<?php echo home_url('/menu/'); ?>">メニューを見る</a>
</section>


<section class=" section news width">
    <h2>季節の新商品</h2>
    <div class="new flex">
        <figure class="slides fade">
            <img src="<?php echo get_template_directory_uri(); ?>/img/new/01.jpeg">
            <figcaption>アーモンドミルクラテ</figcaption>
        </figure>
        <figure class="slides fade">
            <img src="<?php echo get_template_directory_uri(); ?>/img/new/02.png">
            <figcaption>ほうじ茶ラテ</figcaption>
        </figure>
        <figure class="slides fade">
            <img src="<?php echo get_template_directory_uri(); ?>/img/new/03.jpeg">
            <figcaption>手作りのアップルパイ</figcaption>
        </figure>
        <div class="btn">
            <button><i class="fa-solid fa-circle-chevron-left"></i></button>
            <button><i class="fa-solid fa-circle-chevron-right"></i></button>
        </div>
    </div>
</section>


<section class="section features width-fit">
    <h2>Coffee & co. のこだわり</h2>
    <div class="feature grid">
        <div class="feature-item" data-text="世界各国の産地から選ぶ"><i class="fa-solid fa-earth-africa"></i></div>
        <div class="feature-item" data-text="飲み比で新たなコーヒーと出逢う"><i class="fa-regular fa-face-smile"></i></div>
        <div class="feature-item" data-text="コーヒーに合う心地よい空間作り"><i class="fa-solid fa-couch"></i></div>
        <div class="feature-item" data-text="メニューを１から開発"><i class="fa-solid fa-mug-hot"></i></div>
    </div>
</section>

<section class="promo flex">
    <div class="promo-left">
        <h2>コーヒー豆全商品20％オフキャンペーン中</h2>
        <a href="" class="page-link">もっと見る</a>
    </div>
    <div class="promo-right">
        <h2>デザート全商品10％オフキャンペーン中</h2>
        <a href="" class="page-link">もっと見る</a>
    </div>
</section>


<section class="section voices width">
    <h2>お客様の声</h2>
    <div class="user flex-center my-2">
        <img data-user="1" src="<?php echo get_template_directory_uri(); ?>/img/voice/user01.png">
        <img data-user="2" src="<?php echo get_template_directory_uri(); ?>/img/voice/user02.jpeg">
        <img data-user="3" src="<?php echo get_template_directory_uri(); ?>/img/voice/user03.jpeg">
        <img data-user="4" src="<?php echo get_template_directory_uri(); ?>/img/voice/user04.jpeg">
        <img data-user="5" src="<?php echo get_template_directory_uri(); ?>/img/voice/user05.jpeg">
    </div>
    <div class="voice">
    </div>
</section>

<section class="section blogs width">
    <p class="text-center">コーヒーをもっと楽しむ</p>
    <h2>Coffee & co. の記事</h2>
    <div class="blog">
        <?php
        $blog_query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 5,
        ]);
        ?>
        <div class="grid-3 width-fit">
            <?php if ($blog_query->have_posts()) : ?>
                <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <?php get_template_part('template-parts/loop', 'post'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="text-center"><a href="<?php echo home_url('/blog/'); ?>" class="my-2 page-link">もっと見る</a></div>
    </div>
</section>

<section class="anns section width">
    <h2>Coffee & co. からのお知らせ</h2>
    <div class="ann text-center">
        <?php
        $news = get_terms(['taxonomy' => 'news']); ?>
        <?php
        $news_query = new WP_Query([
            'post_type' => 'news',
            'posts_per_page' => 5,
        ]);
        ?>
        <div class="ann-wrapper">

            <?php if ($news_query->have_posts()) : ?>
                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <?php get_template_part('template-parts/loop', 'news'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <a href="" class="my-2 page-link">もっと見る</a>
    </div>
</section>

<?php get_footer(); ?>