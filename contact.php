<?php

/**
 * Template name: Contact
 */

get_header(); 

$content = get_field('content'); ?>


<div class="page-content">

    <h2 class="heading"><?php the_title();?></h2>

      <!-- GOOGLE MAPS -->
      <?php if( have_rows('locations') ): ?>
          <div class="acf-map" data-zoom="8">
              <?php while ( have_rows('locations') ) : the_row(); 

                 // Load sub field values.
                 $location = get_sub_field('location');
                 ?>
                 <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
                 </div>
         <?php endwhile; ?>
         </div>
      <?php endif; ?>
    
    <?php if ($content) : ?>

        <?php echo $content; ?>

    <?php endif; ?>
      
      <!-- ENDS GOOGLE MAPS -->
      <h2 class="heading">Contact Form</h2>
      <!-- form -->
      <form id="contactForm" action="#" method="post">
        <fieldset>
          <p>
            <label for="name" >Name</label>
            <input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name">
          </p>
          <p>
            <label for="email" >Email</label>
            <input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address">
          </p>
          <p>
            <label for="web">Website</label>
            <input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website">
          </p>
          <p>
            <label for="comments">Message</label>
            <textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
          </p>
          <p>
            <input type="button" value="Send" name="submit" id="submit">
            <span id="error" class="warning">Error Message</span></p>
        </fieldset>
      </form>
      <p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
      <!-- ENDS form -->
      <div class="c-1"></div>
      <div class="c-2"></div>
      <div class="c-3"></div>
      <div class="c-4"></div>
    </div>
    <!-- ENDS page-content -->

    <?php get_footer();?>