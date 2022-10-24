<section class="comments">
    <?php
    $comment_form_args = [
        'title_reply' => 'コメント投稿フォーム',
        'comment_notes_before' => '* が付いてる欄は必須項目です。',
        'title_reply_to' => '返信',
        'cancel_reply_link' => 'キャセル',
        'label_submit' => 'コメントを送信',

    ];
    comment_form(($comment_form_args));
    if (have_comments()) :
    ?>
        <p class="my-2 text-center"><?php comments_number('コメントはありません。', 'コメントが1件あります。', 'コメントが % 件あります。'); ?></p>
        <ol class="commentlist">
            <?php
            $wp_list_comments_args = [
                'avatar_size' => '50'
            ];
            wp_list_comments($wp_list_comments_args);
            ?>
        </ol>
    <?php
        $paginate_comment_links_args = [
            'prev_text' => '<前のコメントページ',
            'next_text' => '次のコメントページ>',
        ];
        paginate_comments_links($paginate_comment_links_args);
    endif;
    ?>
</section>