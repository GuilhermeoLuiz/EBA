<div class="sidebar">
<?php
$args = array(
    'title_reply' => 'Deixe um Comentário',
    'comment_notes_before' => '',
    'comment_notes_after' => '',
    'class_submit' => 'custom-submit-class',
    'label_submit' => 'Enviar Comentário',
    'fields' => array(
        'author' => '<input type="text" name="author" placeholder="Nome" required>',
        'email' => '<input type="email" name="email" placeholder="E-mail" required>',
        'url' => '<input type="url" name="url" placeholder="Website">',
    ),
);

comment_form($args);
?>


<?php
if (have_comments()) :
    foreach ($comments as $comment) :
        ?>
        <div class="comment">
            <div class="comment-author"><?php comment_author(); ?></div>
            <div class="comment-content"><?php comment_text(); ?></div>
            <div class="comment-date"><?php comment_date(); ?></div>
        </div>
        <?php
    endforeach;
endif;
?>
</div>