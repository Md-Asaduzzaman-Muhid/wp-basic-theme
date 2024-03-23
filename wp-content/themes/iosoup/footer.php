<footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Join our mailing list to receive the news &amp; latest trends</h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <?php echo do_shortcode('[contact-form-7 id="d4cfb11" title="Subscribe"]'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Contact Us</h4>
            <p><?php echo get_option('address_line1'); ?></p>
			<p><?php echo get_option('address_line2'); ?></p>
            <p><a href="mailto:<?php echo get_option('e-mail') ?>" title="email"><?php echo get_option('e-mail'); ?></a></p>
            <p><a href="tel:<?php echo get_option('phone') ?>" title="telephone"><?php echo get_option('phone'); ?></a></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About Us</h4>
            <ul>
              <li><a href="<?php echo home_url(); ?>/" title="home">Home</a></li>
              <li><a href="<?php echo home_url(); ?>/about" title="about link">About</a></li>
              <li><a href="<?php echo home_url(); ?>/services" title="services link">Services</a></li>
              <li><a href="<?php echo home_url(); ?>/blogs" title="blogs link">Blogs</a></li>
              <li><a href="<?php echo home_url(); ?>/contact" title="contact link">Contact</a></li>
            </ul>
          
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="<?php echo home_url(); ?>/contact" title="contact link">Contact</a></li>
              <li><a href="<?php echo home_url(); ?>/career" title="career link">Career</a></li>
              <li><a href="<?php echo home_url(); ?>/get-a-quote" title="quote link">Get a Quote</a></li>
              <li><a href="<?php echo home_url(); ?>/portfolio" title="portfolio link">Portfolio</a></li>
              <li><a href="<?php echo home_url(); ?>/about" title="about us link">About Team</a></li>
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
