<footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Join our mailing list to receive the news &amp; latest trends</h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="#" method="GET">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Contact Us</h4>
            <p><?php echo get_option('address_line1'); ?></p>
			<p><?php echo get_option('address_line2'); ?></p>
            <p><a href="mailto:<?php echo get_option('e-mail') ?>"><?php echo get_option('e-mail'); ?></a></p>
            <p><a href="tel:<?php echo get_option('phone') ?>"><?php echo get_option('phone'); ?></a></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About Us</h4>
            <ul>
              <li><a href="<?php echo home_url(); ?>/">Home</a></li>
              <li><a href="<?php echo home_url(); ?>/about">About</a></li>
              <li><a href="<?php echo home_url(); ?>/services">Services</a></li>
              <li><a href="<?php echo home_url(); ?>/blogs">Blogs</a></li>
              <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
            </ul>
          
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
              <li><a href="<?php echo home_url(); ?>/career">Career</a></li>
              <li><a href="<?php echo home_url(); ?>/get-a-quote">Get a Quote</a></li>
              <li><a href="<?php echo home_url(); ?>/portfolio">Portfolio</a></li>
              <li><a href="<?php echo home_url(); ?>/about">About Team</a></li>
            </ul>
      
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About ioSoup</h4>
            <div class="logo"> 
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" title="logo">
            </div>
            <p>With a presence spanning across two continents – Asia and Europe – our agency is dedicated to providing cutting-edge solutions tailored to meet your unique needs.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2024 ioSoup. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>


	<?php wp_footer();?>
</body>
</html>
