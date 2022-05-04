<?php
/*
   Template Name: Остекление балконов 
*/
?>
<? $page_id = get_the_ID();?>
<?php get_header();?>
   <section class="gb-first-screen">

      <div class="container">
         <div class="gb-first-screen__text">
            <h1 class="gb-first-screen__title"><?php echo carbon_get_post_meta( $page_id, 'glasses_first_srceen_title' );?></h1>
            <h2 class="gb-first-screen__subtitle"><?php echo carbon_get_post_meta( $page_id, 'glasses_first_srceen_subtitle' );?></h2>
            <a href="#form-popup" type="submit" class="popup-link gb-first-screen__btn default-btn"><?php echo carbon_get_post_meta( $page_id, 'glasses_first_srceen_btn_text' );?></a>

         </div>
         <div data-da=".gb-first-screen__text, 767, 2" class="gb-first-screen__image">
            <picture>
               <source class="lazy" data-srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'glasses_first_srceen_image'), 'full'))?>" type="image/webp">
               <img data-src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'glasses_first_srceen_image'), 'full')?>" class="lazy"  alt="first-screen-image">
            </picture>
         </div>
      </div>
   </section>
   <section class="advantages">
      <div class="container">
         <div class="advantage">
            <svg class="advantage__img" width="33" height="33" viewBox="0 0 33 33" fill="none"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M14.9634 23.0333L23.3017 31.3717C23.99 32.06 25.1067 32.06 25.795 31.3717L30.3734 26.7933C31.0617 26.105 31.0617 24.9883 30.3734 24.3L22.035 15.9617"
                  stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               <path d="M27.1167 10.8665L22.1167 5.86646" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
               <path
                  d="M17.0333 10.9631L8.69831 2.62807C8.00998 1.93973 6.89331 1.93973 6.20498 2.62807L1.62831 7.20473C0.939977 7.89307 0.939977 9.00973 1.62831 9.69806L9.96331 18.0331"
                  stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               <path
                  d="M1.51324 29.3832L2.70824 25.7882C2.87158 25.2966 3.14824 24.8482 3.51491 24.4816L25.6532 2.34324C26.3049 1.69158 27.3599 1.69158 28.0099 2.34324L30.6532 4.98658C31.3049 5.63824 31.3049 6.69324 30.6532 7.34324L8.51158 29.4849C8.14658 29.8499 7.70158 30.1249 7.21158 30.2899L3.62324 31.4899C2.32158 31.9249 1.07991 30.6866 1.51324 29.3832V29.3832Z"
                  stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <p class="advantage__text">Бесплатный замер</p>
         </div>
         <div class="advantage">
            <svg class="advantage__img" width="40" height="40" viewBox="0 0 40 40" fill="none"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M25 13.3333H32.205C32.8867 13.3333 33.5 13.7483 33.7517 14.3816L36.4283 21.0716C36.585 21.4649 36.6667 21.8849 36.6667 22.3083V32.2216C36.6667 33.1416 35.92 33.8882 35 33.8882H31.9483"
                  stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               <path d="M26.6664 34.0332H13.6165" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
               <path d="M36.6667 24.9999H30V18.3333H35.3333" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
               <path d="M20.9266 10H23.3333C24.2533 10 24.9999 10.7467 24.9999 11.6667V26.6667H3.33325" stroke="#3399CC"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               <path
                  d="M12.8984 3.41671C9.98002 3.86337 7.59335 6.25004 7.14669 9.16837C6.43002 13.8517 10.4067 17.8284 15.09 17.1117C18.0084 16.665 20.395 14.2784 20.8417 11.36C21.56 6.6767 17.5817 2.70004 12.8984 3.41671V3.41671Z"
                  stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               <path
                  d="M31.1733 32.16C32.2042 33.1909 32.2042 34.8625 31.1733 35.8935C30.1423 36.9245 28.4707 36.9245 27.4397 35.8935C26.4088 34.8625 26.4088 33.1909 27.4397 32.16C28.4707 31.129 30.1423 31.129 31.1733 32.16Z"
                  stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               <path
                  d="M12.84 32.16C13.871 33.1909 13.871 34.8625 12.84 35.8935C11.809 36.9245 10.1375 36.9245 9.10649 35.8935C8.07551 34.8625 8.07551 33.1909 9.10649 32.16C10.1375 31.129 11.809 31.129 12.84 32.16Z"
                  stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               <path
                  d="M8.33325 34.0267H4.99992C4.07992 34.0267 3.33325 33.28 3.33325 32.36V11.6667C3.33325 10.7467 4.07992 10 4.99992 10H7.06325"
                  stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               <path d="M16.6666 9.99997H13.3333V6.93164" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
            </svg>

            <p class="advantage__text">Гарантия сроков доставки</p>
         </div>
         <div class="advantage">
            <svg class="advantage__img" width="40" height="40" viewBox="0 0 40 40" fill="none"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M23.3317 34.9986H9.99837C8.15671 34.9986 6.66504 33.507 6.66504 31.6653V14.9986C6.66504 13.157 8.15671 11.6653 9.99837 11.6653H23.3317C25.1734 11.6653 26.665 13.157 26.665 14.9986V31.6653C26.665 33.507 25.1734 34.9986 23.3317 34.9986Z"
                  stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               <path
                  d="M26.6634 28.3333H29.9967C31.8384 28.3333 33.3301 26.8417 33.3301 25V8.33333C33.3301 6.49167 31.8384 5 29.9967 5H16.6634C14.8217 5 13.3301 6.49167 13.3301 8.33333V11.6667"
                  stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               <path d="M11.665 23.3347L14.9984 26.6681" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
               <path d="M15 26.6653L21.6667 19.9986" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
            </svg>

            <p class="advantage__text">Гарантия до 50 лет</p>
         </div>
         <div class="advantage">
            <svg class="advantage__img" width="40" height="40" viewBox="0 0 40 40" fill="none"
               xmlns="http://www.w3.org/2000/svg">
               <g clip-path="url(#clip0)">
                  <path d="M34.9998 6.66659C34.9998 4.82492 33.5082 3.33325 31.6665 3.33325" stroke="#3399CC"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M8.33333 3.33325C6.49167 3.33325 5 4.82492 5 6.66659" stroke="#3399CC" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M21.3883 11.6665H17.2217V15.8332" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
                  <path
                     d="M17.2217 12.3184C20.4783 13.6017 22.7767 16.7017 22.7767 20.3284C22.7767 23.955 20.4767 27.05 17.2217 28.3317"
                     stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                     d="M11.6667 20H8.33333C6.49167 20 5 21.4917 5 23.3333V33.3333C5 35.175 6.49167 36.6667 8.33333 36.6667H31.6667C33.5083 36.6667 35 35.175 35 33.3333V23.3333C35 21.4917 33.5083 20 31.6667 20H28.3333"
                     stroke="#3399CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M17.2166 3.33325H13.8833" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
                  <path d="M26.1165 3.33325H22.7832" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
                  <path d="M5 12.2166V15.5499" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
                  <path d="M35 12.2166V15.5499" stroke="#3399CC" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" />
               </g>
               <defs>
                  <clipPath id="clip0">
                     <rect width="40" height="40" fill="white" />
                  </clipPath>
               </defs>
            </svg>

            <p class="advantage__text">Монтаж по правилам REHAU</p>
         </div>
      </div>
   </section>
   <section id="gb-cold-glassing-id" class="gb-cold-glassing">
      <div class="container">
         <div class="gb-cold-glassing__content">
            <div class="gb-cold-glassing__text-block">

               <p class="gb-cold-glassing__undertitle"><?php echo carbon_get_post_meta($page_id, 'cold_glassing_undertitle')?></p>
               <h2 class="section-title gb-cold-glassing__title"><?php echo carbon_get_post_meta($page_id, 'cold_glassing_title')?></h2>
               <p class="gb-cold-glassing__text"><?php echo carbon_get_post_meta($page_id, 'cold_glassing_text')?>
               </p>
               <div class="gb-cold-glassing__advantages gb-cold-glassing__advantages">
                  <div class="gb-cold-glassing-advantage">
                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M19.8158 22.5552H4.97576C3.58393 22.5552 2.5631 21.2473 2.90026 19.8975L6.1086 7.06416C6.3466 6.11216 7.20176 5.44482 8.1841 5.44482H23.0241C24.4159 5.44482 25.4368 6.75266 25.0996 8.10249L21.8913 20.9358C21.6533 21.8878 20.7969 22.5552 19.8158 22.5552Z"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                     Легкая
                     конструкция

                  </div>
                  <div class="gb-cold-glassing-advantage">
                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 24.5H17.5" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path
                           d="M17.4988 20.0188V21.2625H10.4988V20.0188C10.4988 18.7857 9.92709 17.6342 8.97626 16.8478C7.33009 15.484 6.24742 13.4657 6.13426 11.1883C5.91842 6.82384 9.50592 2.98667 13.8751 2.92017C18.2816 2.85134 21.8749 6.40151 21.8749 10.7917C21.8749 13.244 20.7514 15.4303 18.9921 16.8723C18.0483 17.6458 17.4988 18.7985 17.4988 20.0188Z"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.96338 18.0249H18.025" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                     </svg>

                     Максимум света

                  </div>
                  <div class="gb-cold-glassing-advantage">
                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5 4.66675V23.3334" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M24.5 4.66675V23.3334" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M18.6665 16.3334L20.9998 14.0001L18.6665 11.6667" stroke="#3399CC" stroke-width="1.5"
                           stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.33333 16.3334L7 14.0001L9.33333 11.6667" stroke="#3399CC" stroke-width="1.5"
                           stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 14H21" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                     </svg>

                     Экономия пространства

                  </div>
                  <div class="gb-cold-glassing-advantage">
                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M15.4791 10.302C16.6181 11.4411 16.6181 13.2878 15.4791 14.4268C14.34 15.5658 12.4933 15.5658 11.3543 14.4268C10.2152 13.2878 10.2152 11.4411 11.3543 10.302C12.4933 9.163 14.34 9.163 15.4791 10.302Z"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                           d="M24.5002 16.3123V7.11434C24.5002 5.82517 23.456 4.78101 22.1668 4.78101H4.66683C3.37766 4.78101 2.3335 5.82517 2.3335 7.11434V17.6143C2.3335 18.9035 3.37766 19.9477 4.66683 19.9477H14.3047"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.8335 16.45H8.16683" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M18.6665 8.28345H20.9998" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path
                           d="M17.9363 17.4521C15.7535 17.5186 14 19.299 14 21.4993C14 23.7405 15.8177 25.5581 18.0588 25.5581C19.6887 25.5581 21.084 24.5921 21.7292 23.2061"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                           d="M21.6077 23.219C19.3665 23.219 17.5488 21.4013 17.5488 19.1602C17.5488 16.919 19.3665 15.1013 21.6077 15.1013C23.85 15.1013 25.6665 16.919 25.6665 19.1602C25.6665 21.4013 23.85 23.219 21.6077 23.219Z"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>

                     Недорогой вариант

                  </div>
               </div>
               <div class="gb-cold-glassing__actions">
                  <a href="#form-popup-glassing" type="submit" class="popup-link gb-cold-glassing__btn default-btn-2"><?php echo carbon_get_post_meta($page_id, 'cold_glassing_btn_text')?></a>

                  <p class="gb-cold-glassing__price">
                     <span>Цена</span>
                     <?php echo carbon_get_post_meta($page_id, 'cold_glassing_price')?>
                  </p>
               </div>
            </div>
            <div class="gb-cold-glassing__image">
               <picture>
                  <source class="lazy" data-srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'cold_glassing_image'), 'full'))?>" type="image/webp">
                  <img data-src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'cold_glassing_image'), 'full')?>" class="lazy" alt="cold glassing image">
               </picture>
            </div>
         </div>
      </div>
   </section>
   <section class="gb-cost">
      <div class="container">
         <h2 class="section-title gb-cost__title"><? echo carbon_get_post_meta($page_id, 'cold_glassing_price_title')?></h2>
         <div class="gb-cost__content">

            <?php foreach(carbon_get_post_meta($page_id, 'cold_glassing_prices') as $cold_glassing_price) : ?>
               <div class="gb-cost__block gb-cost-block">
                  <div class="gb-cost-block__inf gb-cost-block-inf">
                     <p class="gb-cost-block-inf__price">
                     <?php echo $cold_glassing_price[cold_glassing_prices_title]?>
                        <span><?php echo $cold_glassing_price[cold_glassing_prices_price]?></span>
                     </p>
                     <a href="#" class="gb-cost-block-inf__link">Выбрать</a>
                  </div>
                  <div class="gb-cost-block__image">
                     <picture>
                        <source class="lazy" data-data-srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url($cold_glassing_price[cold_glassing_prices_image], 'full'));?>" type="image/webp">
                        <img data-src="<?php echo wp_get_attachment_image_url($cold_glassing_price[cold_glassing_prices_image], 'full');?>" class="lazy"  alt="balcon glass image">
                     </picture>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
         <div class="gb-cost__actions">
            <a href="#form-popup-glassing" class="popup-link default-btn-2 gb-cost__btn cold-glassing-btn"><? echo carbon_get_post_meta($page_id, 'cold_glassing_price_btn_text')?></a>
         </div>
      </div>
   </section>
   <section id="gb-warm-glassing-id" class="gb-warm-glassing">
      <div class="container">
         <div class="gb-warm-glassing__content">
            <div class="gb-warm-glassing__text-block">

               <p class="gb-warm-glassing__undertitle"><?php echo carbon_get_post_meta($page_id, 'warm_glassing_undertitle')?></p>
               <h2 class="section-title gb-warm-glassing__title"><?php echo carbon_get_post_meta($page_id, 'warm_glassing_title')?></h2>
               <p class="gb-warm-glassing__text"><?php echo carbon_get_post_meta($page_id, 'warm_glassing_text')?>
               </p>
               <div class="gb-warm-glassing__advantages gb-warm-glassing__advantages">
                  <div class="gb-warm-glassing-advantage">
                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 9.33362V16.3336" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path
                           d="M15.6498 17.017C16.561 17.9283 16.561 19.4056 15.6498 20.3169C14.7385 21.2281 13.2611 21.2281 12.3499 20.3169C11.4387 19.4056 11.4387 17.9283 12.3499 17.017C13.2611 16.1058 14.7385 16.1058 15.6498 17.017"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                           d="M10.4998 14.0271V7.00024C10.4998 5.06708 12.0667 3.50024 13.9998 3.50024C15.933 3.50024 17.4998 5.06708 17.4998 7.00024V14.0271C18.9092 15.0922 19.8332 16.7652 19.8332 18.6669C19.8332 21.8881 17.221 24.5002 13.9998 24.5002C10.7787 24.5002 8.1665 21.8881 8.1665 18.6669C8.1665 16.7652 9.0905 15.0911 10.4998 14.0271Z"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>

                     Максимальное тепло

                  </div>
                  <div class="gb-warm-glassing-advantage">
                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M19.5708 10.5002H4.92917C4.13933 10.5002 3.5 9.86091 3.5 9.07108V4.92941C3.5 4.13958 4.13933 3.50024 4.92917 3.50024H19.572C20.3607 3.50024 21 4.13958 21 4.92941V9.07224C21 9.86091 20.3607 10.5002 19.5708 10.5002V10.5002Z"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                           d="M14 25.6669H11.6667C11.0227 25.6669 10.5 25.1442 10.5 24.5002V18.6669C10.5 18.0229 11.0227 17.5002 11.6667 17.5002H14C14.644 17.5002 15.1667 18.0229 15.1667 18.6669V24.5002C15.1667 25.1442 14.644 25.6669 14 25.6669Z"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                           d="M12.8335 17.5002V15.1669C12.8335 14.5229 13.3562 14.0002 14.0002 14.0002H23.3335C23.9775 14.0002 24.5002 13.4776 24.5002 12.8336V8.16691C24.5002 7.52291 23.9775 7.00024 23.3335 7.00024H21.0002"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>


                     Уютный интерьер

                  </div>
                  <div class="gb-warm-glassing-advantage">
                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M9.9165 15.1669V11.6669V11.0836C9.9165 8.82841 11.7447 7.00024 13.9998 7.00024C16.255 7.00024 18.0832 8.82841 18.0832 11.0836V11.6669"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                           d="M9.9165 12.8336H12.1087C13.476 12.8336 14.5832 13.942 14.5832 15.3081C14.5832 15.965 14.323 16.5938 13.8587 17.0581L12.2498 18.667"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                           d="M6.4165 11.6669V19.9141C6.4165 22.4469 8.46984 24.5002 11.0027 24.5002C13.1073 24.5002 14.9413 23.0676 15.4523 21.0271C15.646 20.2536 16.0882 19.5641 16.7112 19.0659L18.8508 17.3532C20.5775 15.9719 21.5832 13.8789 21.5832 11.6669V11.0836C21.5832 6.89524 18.1882 3.50024 13.9998 3.50024C9.8115 3.50024 6.4165 6.89524 6.4165 11.0836V11.6669Z"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>


                     Лучшая шумоизоляция

                  </div>
                  <div class="gb-warm-glassing-advantage">
                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5 5.83362H8.16667" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M5.8335 3.50024V8.16691" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M7 19.8336V23.3336" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M8.75 21.5836H5.25" stroke="#3399CC" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path
                           d="M24.4998 14.0003L20.0782 12.2223C19.1938 11.8665 18.4927 11.1665 18.1368 10.2821L16.346 5.83362L14.5552 10.2821C14.1993 11.1665 13.4982 11.8676 12.6138 12.2223L8.19217 14.0003H8.1665L12.5882 15.7783C13.4725 16.1341 14.1737 16.8341 14.5295 17.7185L16.3203 22.167L18.1112 17.7185C18.467 16.8341 19.1682 16.133 20.0525 15.7783L24.4742 14.0003"
                           stroke="#3399CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>


                     Элегантный внешний вид

                  </div>
               </div>
               <div class="gb-warm-glassing__actions">

                     <a href="#form-popup-glassing" class="popup-link gb-warm-glassing__btn default-btn-2"><?php echo carbon_get_post_meta($page_id, 'warm_glassing_btn_text')?></a>

                  
                  <p class="gb-warm-glassing__price">
                     <span>Цена</span>
                     <?php echo carbon_get_post_meta($page_id, 'warm_glassing_price')?>
                  </p>
               </div>
            </div>
            <div class="gb-warm-glassing__image">
               <picture>
                  <source class="lazy" data-srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'warm_glassing_image'), 'full'))?>" type="image/webp">
                  <img data-src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'warm_glassing_image'), 'full')?>" class="lazy"  alt="warm glassing image">
               </picture>
            </div>
         </div>
      </div>
   </section>
   <section class="gb-cost">
      <div class="container">
         <h2 class="section-title gb-cost__title"><? echo carbon_get_post_meta($page_id, 'warm_glassing_price_title')?></h2>
         <div class="gb-cost__content">
            <?php foreach(carbon_get_post_meta($page_id, 'warm_glassing_prices') as $warm_glassing_price) : ?>
               <div class="gb-cost__block gb-cost-block">
                  <div class="gb-cost-block__inf gb-cost-block-inf">
                     <p class="gb-cost-block-inf__price">
                     <?php echo $warm_glassing_price[warm_glassing_prices_title]?>
                        <span><?php echo $warm_glassing_price[warm_glassing_prices_price]?></span>
                     </p>
                     <a href="#" class="gb-cost-block-inf__link">Выбрать</a>
                  </div>
                  <div class="gb-cost-block__image">
                     <picture>
                        <source class="lazy" data-srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url($warm_glassing_price[warm_glassing_prices_image], 'full'));?>" type="image/webp">
                        <img data-src="<?php echo wp_get_attachment_image_url($warm_glassing_price[warm_glassing_prices_image], 'full');?>" class="lazy"  alt="balcon glass image">
                     </picture>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
         <div class="gb-cost__actions">
            <a href="#form-popup-glassing" class="popup-link default-btn-2 gb-cost__btn warm-glassing-btn"><? echo carbon_get_post_meta($page_id, 'warm_glassing_price_btn_text')?></a>
         </div>
      </div>
   </section>
   <section class="gb-services">
      <div class="container">
         <h2 class="section-title gb-services__title"><?php echo carbon_get_post_meta($page_id, 'balcon_services_title')?></h2>
         <div class="gb-services__content">

            <?php foreach(carbon_get_post_meta($page_id, 'balcon_services') as $balcon_service) : ?>
               <div class="gb-service">
                  <div class="gb-service__inf gb-service-inf">
                     <h3 class="gb-service-inf__title"><?php echo $balcon_service[balcon_service_title]?></h3>
                     <p class="gb-service-inf__text"><?php echo $balcon_service[balcon_service_text]?></p>
                     <a href="<?php echo $balcon_service[balcon_service_link_url]?>" class="gb-service-inf__link">Подробнее</a>
                     <p class="gb-service-inf__price">
                        <span>Цена</span>
                        <?php echo $balcon_service[balcon_service_price]?>
                     </p>
                     <a href="#form-popup" class="popup-link default-btn-2 gb-service-inf__btn"><?php echo carbon_get_post_meta($page_id, 'balcon_services_btn_text')?></a>
                  </div>
                  <div class="gb-service__image">
                     <picture>
                        <source class="lazy" data-srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url($balcon_service[balcon_service_image], 'full'));?>" type="image/webp">
                        <img data-src="<?php echo wp_get_attachment_image_url($balcon_service[balcon_service_image], 'full');?>" class="lazy" alt="service image">
                     </picture>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
   <section class="gallery">
      <div class="container">
         <h2 class="section-title gallery__title "><?php echo carbon_get_post_meta($page_id, 'gallery_title')?></h2>
         <div class="gallery__content">
            <div class="swiper-container gallery-slider">
               <div class="swiper-wrapper">

                  <?php  foreach(carbon_get_post_meta($page_id, 'gallery') as $gallery_item) : 
                     $img_src_webp = convertToWebpSrc(wp_get_attachment_image_url($gallery_item, 'full'));  
                     $img_src = wp_get_attachment_image_url($gallery_item, 'full');  

                  ?>
                     <div class="swiper-slide gallery__slide">
                        <div class="gallery__image">
                           <picture>
                              <source class="lazy" data-srcset="<?php echo $img_src_webp?>" type="image/webp">
                              <img data-src="<?php echo $img_src?>" class="lazy" alt="gallery image">
                           </picture>
                        </div>
                     </div>
                  <?php endforeach; ?>
               </div>
               <div class="swiper-button-prev "></div>
               <div class="swiper-button-next"></div>

            </div>
            <button class="gallery__button-prev">
               <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.9933 2L2 14.036L14 26" stroke="#212121" stroke-width="3" stroke-linecap="round"
                     stroke-linejoin="round" />
               </svg>

            </button>
            <button class="gallery__button-next"><svg width="16" height="28" viewBox="0 0 16 28" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.00667 2L14 14.036L2 26" stroke="#212121" stroke-width="3" stroke-linecap="round"
                     stroke-linejoin="round" />
               </svg>
            </button>
         </div>
         <button class="gallery__btn">
            Фото работ
         </button>
      </div>
   </section>
   <section class="popular-questions">
      <div class="container">
      <h2 class="section-title popular-questions__title"><?php echo carbon_get_post_meta($page_id, 'popular_questios_title')?></h2>
         <div class="popular-questions__content">

            <?php foreach(carbon_get_post_meta($page_id, 'popular_questios_block') as $popular_question_item) : ?>
               <?php
                  $a = $popular_question_item[popular_questios_tags_block];
               ?>
               <div class="popular-question">
                  <div class="popular-question__image">
                     <picture>
                        <source class="lazy" data-srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url($popular_question_item[popular_questios_block_image], 'full'));?>" type="image/webp">
                        <img data-src="<?php echo wp_get_attachment_image_url($popular_question_item[popular_questios_block_image], 'full');?>" class="lazy"  alt="question image">
                     </picture>
                  </div>
                  <div class="popular-question__text-block">
                     <p class="popular-question__undertitle"><?php echo $popular_question_item[popular_questios_block_undertitle]?></p>
                     <h3 class="popular-question__title"><?php echo $popular_question_item[popular_questios_block_title]?></h3>
                     <p class="popular-question__subtitle"><?php echo $popular_question_item[popular_questios_block_text]?></p>
                     <div class="popular-question__answer">
                     <?php foreach($a as $popular_question_tags) : ?>
                        <span class="popular-question__answer-block"><?php echo $popular_question_tags[popular_questions_block_tag]?></span>
                     <?php endforeach; ?>   
                     </div>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
   <section class="gb-other-questions">
      <div class="container">
         <h2 class="gb-other-questions__title"><?php echo carbon_get_post_meta($page_id, 'gb_other_questions_title')?></h2>
         <div class="gb-other-questions__content">
            <div class="gb-other-questions__tabs-buttons">
               <button data-value="1" class="active default-btn-2 gb-other-questions__tabs-button"><?php echo carbon_get_post_meta($page_id, 'gb_other_questions_btn_1_text')?></button>
               <button data-value="2" class="default-btn-2 gb-other-questions__tabs-button"><?php echo carbon_get_post_meta($page_id, 'gb_other_questions_btn_2_text')?></button>
               <button data-value="3" class="default-btn-2 gb-other-questions__tabs-button"><?php echo carbon_get_post_meta($page_id, 'gb_other_questions_btn_3_text')?></button>
            </div>
            <div class="gb-other-questions__tabs">
               <div class="tab--1 active gb-other-questions__tab">
                  <div class="accordeons__tasks accordeons__block">
                     <?php foreach(carbon_get_post_meta($page_id, 'gb_other_questions_tab_1') as $gb_other_questions_tab) : ?>
                        <div class="accordeons__wrapper task accordeon">
                           <h3 class="accordeon__title"><?php echo $gb_other_questions_tab[gb_other_questions_tab_1_title]?></h3>
                           <div class="accordeon__content">
                              <div class="accordeon-content-js">
                                 <div class="accordeon__text"><?php echo $gb_other_questions_tab[gb_other_questions_tab_1_text]?></div>
                              </div>
                           </div>
                           <button class="accordeon__button on">
                              <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19 1.5L10 10.5L1 1.5" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>

                           </button>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div>
               <div class="tab--2 gb-other-questions__tab">
                  <div class="accordeons__tasks accordeons__block">
                     <?php foreach(carbon_get_post_meta($page_id, 'gb_other_questions_tab_2') as $gb_other_questions_tab) : ?>
                        <div class="accordeons__wrapper task accordeon">
                           <h3 class="accordeon__title"><?php echo $gb_other_questions_tab[gb_other_questions_tab_2_title]?></h3>
                           <div class="accordeon__content">
                              <div class="accordeon-content-js">
                                 <div class="accordeon__text"><?php echo $gb_other_questions_tab[gb_other_questions_tab_2_text]?></div>
                              </div>
                           </div>
                           <button class="accordeon__button on">
                              <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19 1.5L10 10.5L1 1.5" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>

                           </button>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div>
               <div class="tab--3 gb-other-questions__tab">
                  <div class="accordeons__tasks accordeons__block">
                     <?php foreach(carbon_get_post_meta($page_id, 'gb_other_questions_tab_3') as $gb_other_questions_tab) : ?>
                        <div class="accordeons__wrapper task accordeon">
                           <h3 class="accordeon__title"><?php echo $gb_other_questions_tab[gb_other_questions_tab_3_title]?></h3>
                           <div class="accordeon__content">
                              <div class="accordeon-content-js">
                                 <div class="accordeon__text"><?php echo $gb_other_questions_tab[gb_other_questions_tab_3_text]?></div>
                              </div>
                           </div>
                           <button class="accordeon__button on">
                              <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19 1.5L10 10.5L1 1.5" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>

                           </button>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="applications">
      <div class="container">
         <div class="applications__content">
            <div class="applications__text">


               <h2 class="section-title applications__title"><?php echo carbon_get_post_meta($page_id, 'application_title')?></h2>
               <div class="applications__subtitle"><?php echo carbon_get_post_meta($page_id, 'application_text')?></div>
            </div>
            <form  class="applications__form form-send applications-form js-send-mail-form">
               <input id="application-form-phone-1" name="user_phone" placeholder="+7 (999) 666-66-66" type="text" class="applications-form__input">
               <button type="submit" class="default-btn applications-form__btn"><?php echo carbon_get_post_meta($page_id, 'application_btn_text')?></button>
            </form>
         </div>
      </div>
   </section>
   <section class="location">
      <div class="container">
         <div class="location__content">
            <div class="location__text">
               <h2 class="section-title popular-questions__title"><?php echo carbon_get_post_meta($page_id, 'location_title')?></h2>
               <ul class="location__cities">

                  <?php foreach(carbon_get_post_meta($page_id, 'location_cities') as $location_cities_item) : ?>
                     <li class="location__city">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M12 13C10.343 13 9 11.657 9 10C9 8.343 10.343 7 12 7C13.657 7 15 8.343 15 10C15 11.657 13.657 13 12 13Z"
                           stroke="#4154D9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                           d="M12 21C12 21 5 15.25 5 10C5 6.134 8.134 3 12 3C15.866 3 19 6.134 19 10C19 15.25 12 21 12 21Z"
                           stroke="#4154D9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                     <?php echo $location_cities_item[location_cities_name]?>
                  </li>
                  <?php endforeach; ?>
               </ul>
               <a href="tel:<?php echo $GLOBALS['okna_data']['phone_digits']?>" class="location__phone">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M10.8559 13.1441C9.6859 11.9741 8.8039 10.6641 8.2179 9.33512C8.0939 9.05412 8.1669 8.72512 8.3839 8.50812L9.2029 7.69012C9.8739 7.01912 9.8739 6.07012 9.2879 5.48412L8.1139 4.31012C7.3329 3.52912 6.0669 3.52912 5.2859 4.31012L4.6339 4.96212C3.8929 5.70312 3.5839 6.77212 3.7839 7.83212C4.2779 10.4451 5.7959 13.3061 8.2449 15.7551C10.6939 18.2041 13.5549 19.7221 16.1679 20.2161C17.2279 20.4161 18.2969 20.1071 19.0379 19.3661L19.6889 18.7151C20.4699 17.9341 20.4699 16.6681 19.6889 15.8871L18.5159 14.7141C17.9299 14.1281 16.9799 14.1281 16.3949 14.7141L15.4919 15.6181C15.2749 15.8351 14.9459 15.9081 14.6649 15.7841C13.3359 15.1971 12.0259 14.3141 10.8559 13.1441V13.1441Z"
                        stroke="#4154D9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <?php echo $GLOBALS['okna_data']['phone']?>
               </a>
            </div>
            <div class="location__map">
            </div>
         </div>
      </div>
   </section>
   <section id="form-popup" class="popup">
         <div class="popup__body">
            <div class="popup__content">
               <header class="popup__header">
                  <h2 class="popup__title">Отправить запрос</h2>
                  <a href="#" class="close-popup popup__close">
                     <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10 fa-2x"><path fill="#000" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path></svg>
                  </a>
               </header>
               <form action="" class=" popup__form first-screen-form js-send-mail-form">
                  <input placeholder="Имя" name="name" type="text" class="first-screen-form__input">
                  <input placeholder="Телефон" name="user_phone" type="text" class="first-screen-form__input">
                  <button type="submit" class="gb-first-screen__btn default-btn">Отправить</button>
               </form>
            </div>
         </div>
      </section>
   <section id="form-popup-glassing" class="popup">
         <div class="popup__body">
            <div class="popup__content">
               <header class="popup__header">
                  <h2 class="popup__title">Отправить запрос</h2>
                  <a href="#" class="close-popup popup__close">
                     <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10 fa-2x"><path fill="#000" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path></svg>
                  </a>
               </header>
               <form class="gb-cold-glassing__form js-send-mail-form" action="">
                  <input name="name" class="gb-cold-glassing__input" type="text" placeholder="Имя">
                  <input name="user_phone" class="gb-cold-glassing__input" type="text" placeholder="Телефон">
                  <button type="submit" class="gb-cold-glassing__btn default-btn-2">Заказать остекление</button>
               </form>
            </div>
         </div>
      </section>

   <style>
            body .applications {
         background-image: url(<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'application_image'), 'full')?>);
      }
      body.webp .applications {
        background-image: url(<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'application_image'), 'full'))?>);  
      }
   </style>
   <?php get_footer();?>