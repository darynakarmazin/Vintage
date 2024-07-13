<?php get_header(); ?>

<div style="display:flex; flex-wrap: wrap; justify-content: space-between;">
    
    <?php if(have_posts()) : ?>
    <!-- posts list -->
    <div id="posts-list" class="cf">

      <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part("template-parts/post/post-card"); ?>
      <?php endwhile; ?>

      <!-- page-navigation -->
      <div class="page-navigation cf">
        <div class="nav-next"><a href="#">Older Entries</a></div>
        <div class="nav-previous"><a href="#">Newer Entries</a></div>
      </div>
      <!--ENDS page-navigation -->
    </div>
    <?php else : ?>

    <div id="posts-list" class="cf">
      <div class="page-content">
        <!-- entry content -->
        <div class="entry-conyeny cf">
          <h2 class="heading">nothing was found.</h2>
        </div>
      </div>
    </div> 

    <?php endif; ?>
    <!-- ENDS posts list -->
    <!-- sidebar -->
    <aside id="sidebar">
      <ul>
        <li class="block">
          <h4 class="heading">Sponsors</h4>
          <div class="ads cf"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/dummies/themeforest.gif" alt=""></a> <a href="#" class="last"><img src="<?php echo get_template_directory_uri(); ?>/img/dummies/mojo.jpeg" alt=""></a> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/dummies/themeforest.gif" alt=""></a> <a href="#" class="last"><img src="<?php echo get_template_directory_uri(); ?>/img/dummies/mojo.jpeg" alt=""></a> </div>
        </li>

        <?php 
        $textWidgetTitle = get_field('text_widget', get_option('page_for_posts'));
        $textWidgetContent = get_field('text_widget_content', get_option('page_for_posts'));
        if($textWidgetContent) :
        ?>       
        <li class="block">
          <?php if($textWidgetTitle ) : ?>
          <h4 class="heading"><?php echo $textWidgetTitle; ?></h4>
          <?php endif; ?>
          <?php echo $textWidgetContent; ?>
        </li>
        <?php endif; ?>

        <li class="block">
          <h4 class="heading">Categories</h4>
          <ul>
            <li class="cat-item"><a href="#">Film and video<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Print<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Photo and lomo<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Habitant morbi<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Film and video<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Print<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Photo and lomo<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Habitant morbi<span class="post-counter"> (2)</span></a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <!-- ENDS sidebar -->
</div>

<?php get_footer(); ?>