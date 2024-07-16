  <?php get_header(); ?>

    <!-- SLIDER -->
    <?php if (have_rows('slider')) : ?>

    <div class="slider-wrapper theme-default theme-project theme-home">
      <div class="ribbon"></div>
      <div id="slider" class="nivoSlider">

        <?php while (have_rows('slider')) : the_row();

          $img = get_sub_field('image');
          $link = get_sub_field('link');

          if ($img) :
        
        ?>

        

        <a href="<?php echo $link['url']; ?>">
          <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
        </a>
          
          <?php endif; ?>
        <?php endwhile; ?>

      </div>
    </div>

    <?php endif; ?>
    <!-- ENDS SLIDER -->
  

    <!-- headline -->
    <div class="headline"> I'm a Retro style HTML template and completely FREE! </div>
    <!-- ENDS headline -->
    <!-- Feature -->
    <ul id="filter-container-feature" class="feature">
      <li> <a href="single.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/dummies/430x500a.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
      <li> <a href="single.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/dummies/430x500b.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
      <li> <a href="single.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/dummies/430x500c.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
      <li> <a href="single.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/dummies/430x500d.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
      <li> <a href="single.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/dummies/430x500e.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
      <li> <a href="single.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/dummies/430x500f.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
    </ul>
    <!-- ENDS feature -->
    <?php get_footer(); ?>