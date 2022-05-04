<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title><?php echo carbon_get_theme_option('site_header')?></title>
<?php wp_head();?>
</head>
<body>

   <header class="lock-padding header">

      <div class="header__top header-top">
         <div class="container">
            <div class="header-top__contacts">
               <a href="tel:<?php echo $GLOBALS['okna_data']['phone_digits']?>" class="header-top__contacts-phone"><?php echo $GLOBALS['okna_data']['phone']?></a>
               <p class="header-top__contacts-text">Бесплатная консультация</p>
            </div>
            <a href="#form-popup" class="popup-link header-top__btn">Вызвать замерщика</a>
         </div>
      </div>
      <div class="header__bottom header-bottom">
         <div class="container">
         <a href="<?php echo get_home_url();?>" class="header__logo">

            <picture>
               <source srcset="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo'));?>" type="image/webp">
               <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo'));?>" alt="logo in header">
            </picture>
         </a>

         <?php
            wp_nav_menu( [
               'theme_location'  => 'menu_main_header',
               'container'       => 'nav', 
               'container_class' => 'header__menu', 
               'menu_class'      => 'header__list', 

            ] );
         ?>
         <a data-da=".header__list, 767, last" href="<?php echo $GLOBALS['okna_data']['doors_link']?>" class="header-bottom__link">
            Входные<br> межкомнатные<br> двери
            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M1.25 7.75L3.75 4.25L1.25 0.75" stroke="#479DCB" stroke-width="1.5" />
            </svg>

         </a>
         <div class="header__burger">
            <span></span>
         </div>
      </div>
      </div>
   </header>