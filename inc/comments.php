<?php 

function vintage_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <?php if ($comment->comment_approved == '0') : ?>
       <em><?php _e('Your comment is awaiting moderation.') ?></em>
    <?php endif;
 
    // Comments markup code here, e.g. functions like comment_text(); 
    ?>


    <div id="comment-<?php comment_ID() ?>" class="comment-body cf">
        <?php echo get_avatar( $comment, 32 );?>
        <div class="comment-author vcard"><?php echo get_comment_author();?></div>
        <div class="comment-meta commentmetadata"> <span class="comment-date"><?php echo vintage_get_comment_time();?> </span> 
            <span class="comment-reply-link-wrap"><?php comment_reply_link( array_merge($args, array(
                'reply_text' => __('Reply', 'textdomain'),
                'depth'      => $depth,
                'max_depth'  => $args['max_depth']
                )
            )); ?></span> 
        </div>
        <div class="comment-inner">
            <?php comment_text(); ?>
        </div>
    </div>

    <?php 
 
 }


/**
 * Change comments fields order
 */

add_filter( 'comment_form_fields', 'vintage_move_comment_field' );
function vintage_move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    $cookies_field = $fields['cookies'];
    //var_dump($fields);
    unset( $fields['cookies'] );
    unset( $fields['comment'] );
    
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    $fields['extra'] = '<p class="form-allowed-tags">You may use these <abbr>HTML</abbr> tags and attributes: <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>';

    return $fields;
}