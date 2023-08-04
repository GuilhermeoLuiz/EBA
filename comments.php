<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ($comments_number === 1) {
                printf(__('One comment', 'textdomain'));
            } else {
                printf(
                    _x('%s comments', 'number of comments', 'textdomain'),
                    number_format_i18n($comments_number)
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
            ));
            ?>
        </ol>

        <?php the_comments_pagination(array(
            'prev_text' => __('Previous', 'textdomain'),
            'next_text' => __('Next', 'textdomain'),
        )); ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
    $comment_form_args = array(
        'title_reply' => __('Leave a Comment', 'textdomain'),
    );
    comment_form($comment_form_args);
    ?>

</div><!-- #comments -->
