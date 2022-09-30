<footer>
    <div class="flex">
        <div class="footer-left">
            <h1>Coffee & co.</h1>
            <p class="my-2">「飲みたいコーヒーと出逢う」</p>
            <ul class="icons">
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-line"></i></a></li>
            </ul>
        </div>
        <div class="footer-middle">
            <ul>
                <li>Coffee & co.について</li>
                <li><a href="<?php echo home_url('/about/'); ?>">ー　ストーリー</a></li>
                <li><a href="<?php echo home_url('/menu/'); ?>">ー　メニュー</a></li>
                <li><a href="<?php echo home_url('/blog/'); ?>">ー　記事一覧</a></li>
                <li><a href="<?php echo home_url('/contact/'); ?>">ー　お問い合せ</a></li>
                <li><a>ー　プライバシーポリシー</a></li>
            </ul>
        </div>
        <div class="footer-right">
            <ul>
                <li>店舗情報</li>
                <li><i class="fa-solid fa-square-phone-flip"></i>0422.22.2244</li>
                <li><i class="fa-solid fa-square-envelope"></i>coffee&co@contact.com</li>
                <li><i class="fa-solid fa-location-dot"></i>〒101-0063<br>東京都千代田区 神田淡路町1-1-1</li>
            </ul>
        </div>
    </div>

    <small>&copy; <span id="date"></span> Coffee & co. All rights reserved. </small>
</footer>

<button id="top">TOP</button>

<!-- <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script> -->
<?php
wp_enqueue_script('script', get_template_directory_uri() . '/script.js'); ?>
<?php wp_footer(); ?>
</body>

</html>