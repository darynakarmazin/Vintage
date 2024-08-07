<?php get_header(); 

the_post();

$tags = get_the_tags();
$content = get_the_content();
$title = get_the_title();

$imgURL = get_the_post_thumbnail_url();

$firstName = get_the_author_meta('first_name');
$lastName = get_the_author_meta('last_name');
$authorName = '';

$authorID = get_the_author_meta('ID');
$authorURL = get_author_posts_url( $authorID );

if ($firstName && $lastName) :
  $authorName = $firstName . ' ' . $lastName;
else :
  $authorName = get_the_author();
endif;

// echo 'authorID' . ' ' . $authorID . '</br>';
// echo 'authorURL' . ' ' . $authorURL .'</br>';
?>



<div style="display:flex; flex-wrap: wrap; justify-content: space-between;">
    <!-- posts list -->
    <div id="posts-list" class="cf">
      <article>
        <div class="feature-image">

            <?php if ($imgURL): ?>
            <img src="<?php echo $imgURL; ?>" alt="">
            <?php endif; ?>

        <div class="entry-date">
            <div class="month"><?php the_time('M'); ?></div>
            <div class="number"><?php the_time('d'); ?></div>
        </div>

        </div>
        <div class="excerpt"> <div class="post-heading"><?php echo $title; ?></div>
          <p><?php if ($content) : echo $content; endif; ?></p>
        </div>
        <div class="meta"> 
            <span class="user">
                <a href="<?php echo $authorURL; ?>">By <?php echo $authorName; ?>,</a>
            </span> 
            <span class="comments"><?php echo get_comments_number(); ?> comments</span> 

            <?php if ($tags) : ?>
              <span class="tags"> 
                <?php foreach($tags as $tag): ?>
                  <a href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name; ?></a>,
                <?php endforeach; ?>
              </span> 
            <?php endif; ?>
        </div>
        <i class="tape"></i> </article>
      
      <!-- comments list -->
      <?php comments_template(''); ?>
      <!-- ENDS comments list -->
      
      <!-- Respond -->

      <!-- ENDS Respond -->
    </div>
    <!-- ENDS posts list -->

    <!-- sidebar -->
    <aside id="sidebar">
      <ul>
      <?php 

      $sponsors = get_field('sponsors_list', 'option');

      if($sponsors)  : ?>

        <li class="block">
          <h4 class="heading">Sponsors</h4>
          <div class="ads cf"> 
            <?php foreach ($sponsors as $sponsor):
              $i++;            
              $image = $sponsor['sponsor_image'];
              $url = $sponsor['sponsor_url'];

              if ($i % 2 == 0):
                $class = "last";
              else:
                $class = "";
              endif;
              ?>

              <a class="<?php echo $class; ?>" href="<?php echo $url; ?>">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
              </a>
            <?php endforeach; ?>
          </div>
        </li>

        <?php endif; ?>

        <?php 
        $textWidgetTitle = get_field('widget_title', get_option('page_for_posts'));
        $textWidgetContent = get_field('widget_content', get_option('page_for_posts'));
        if($textWidgetContent) :
        ?>     
        <li class="block">
          <?php if($textWidgetTitle ) : ?>
          <h4 class="heading"><?php echo $textWidgetTitle; ?></h4>
          <?php endif; ?>
          <?php echo $textWidgetContent; ?>
        </li>
        <?php endif; ?>

        <?php 
            $args = array(
                'taxonomy' => 'category',
                'hide_empty' => true,
                'exclude' => array('1')
            );
            $terms = get_categories($args);
            if ($terms) : ?>
            <li class="block">
                <h4 class="heading">Categories</h4>
                <ul>
                    <?php foreach ($terms as $term) : 
                        $termid = $term->term_id; ?>
                        <li class="cat-item">
                            <a href="<?php echo get_term_link($term) ;?>">
                                <?php echo $term->name;?>
                                <span class="post-counter"> (<?php echo $term->count;?>)</span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endif; ?>
      </ul>
    </aside>
    <!-- ENDS sidebar -->
</div>

<?php get_footer();?>