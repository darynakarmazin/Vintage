<div id="comments-wrap">

    <?php

    $commentsCount = get_comments_number();

    if ($commentsCount > 0) : ?>

        <h4 class="heading"><?php echo $commentsCount;?> <?php _e('Comments','Vintage');?></h4>
    
    <?php else : ?>

        <h4 class="heading"><?php _e('No comments yet','Vintage');?></h4>

    <?php endif;?>


    <?php if ($commentsCount > 0) : ?>
        <ol class="commentlist">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'avatar_size' => 74,
                    'callback'    => 'vintage_comments'
                ) );
            ?>
        </ol>

    <?php endif;?>

    <?php echo comment_form();?>

</div>