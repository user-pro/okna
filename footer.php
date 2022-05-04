   <footer class="footer">
      <div class="container">
         <div class="footer__top footer-top">


            <?php
            wp_nav_menu( [
               'theme_location'  => 'footer_menu',
               'container'       => 'nav', 
               'container_class' => 'footer__menu', 
               'menu_class'      => 'footer__links', 

            ] );
         ?>
            <div class="footer__contacts">
               <div class="footer__contact footer__email  footer-email">
                  <p class="footer-email__text footer__contacts-text">Наша почта:</p>
                  <a href="mailto:<?php echo $GLOBALS['okna_data']['email']?>"
                     class="footer__contacts-link footer-email__link"><?php echo $GLOBALS['okna_data']['email']?></a>
               </div>
               <div class="footer__contact footer__phone  footer-phone">
                  <p class="footer-phone__text footer__contacts-text">Бесплатный звонок:</p>
                  <a href="tel:<?php echo $GLOBALS['okna_data']['phone_digits']?>" class="footer__contacts-link footer-phone__link"><?php echo $GLOBALS['okna_data']['phone']?></a>
               </div>
            </div>
            <div class="footer__logo-block footer-logo-block">
               <a href="<?php echo $GLOBALS['okna_data']['doors_link']?>" class="footer-logo-block__link">
                  Входные<br> межкомнатные<br> двери
                  <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M1.25 7.75L3.75 4.25L1.25 0.75" stroke="#479DCB" stroke-width="1.5" />
                  </svg>
               </a>
               <a href="index.html" class="footer-logo-block__logo">
                  <picture>
                  <source srcset="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo'));?>" type="image/webp">
                  <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo'));?>" alt="logo on footer">
                  </picture>
               </a>
            </div>
         </div>
      </div>
      <div class="footer__bottom footer-bottom">
         <div class="container">
            <p class="footer__copyright">
               <?php echo carbon_get_theme_option('footer_text')?>
            </p>
         </div>
      </div>
   </footer>
   <script> 
      let siteUrl = '<?php echo get_template_directory_uri()?>';
      let ajaxUrl = '<?php echo admin_url('admin-ajax.php');?>';
   </script>
   <?php wp_footer();?>
</body>

</html>