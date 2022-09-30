<?php get_header(); ?>
<section class="section contact width-fit">
    <h1 class="text-center">お問い合せ</h1>
    <p class="text-center my-2">Coffee & co.にご関心を寄せていただきありがとうございます。<br>
        お問い合わせにつきましては、以下のフォームをご送付いただいた後、弊店の担当者からご連絡差し上げます。</p>
    <div class="form grid my-2 part">
        <img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpeg">
        <form action="">
            <div class=" form-control">
                <label for="lname">姓：</label>
                <input type="text" name="lastname" id="lname" placeholder="例：田中" required>
            </div>
            <div class="form-control">
                <label for="fname">名：</label>
                <input type="text" name="firstname" id="fname" placeholder="例：太郎" required>
            </div>
            <div class="form-control">
                <label for="email">メールアドレス：</label>
                <input type="text" name="email" id="email" placeholder="例：example@email.com" required>
            </div>
            <div class="form-control">
                <label for="subject">内容：</label>
                <select id="subject" name="subject">
                    <option value="products">商品について</option>
                    <option value="shop">お店について</option>
                    <option value="others">その他</option>
                </select>
            </div>
            <div class="form-control">
                <label for="comment">メッセージ：</label>
                <textarea name="comment" id="comment" required>こちらにお問い合せ内容をご入力ください。</textarea>
            </div>
            <input type="submit" value="確認画面へ">
        </form>
    </div>
</section>
</div>




<?php get_footer(); ?>