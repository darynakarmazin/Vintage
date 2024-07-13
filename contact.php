<?php

/**
 * Template name: Contact
 */

 get_header(); ?>

     <!-- page-content -->
    <div class="page-content">

      <h2 class="heading"><?php the_title() ;?></h2>
      <div id="map_canvas"></div>
      <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet.</p>
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

      <!-- GOOGLE MAPS -->
      <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
      <script>
      function initialize() {
          var latlng = new google.maps.LatLng(-34.397, 150.644);
          var myOptions = {
              zoom: 8,
              center: latlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map(document.getElementById("map_canvas"),
          myOptions);
      }

      initialize();
      </script>

    <?php get_footer();?>