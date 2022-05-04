<?php
/*
   Template Name: Главная 
*/
?>
<? $page_id = get_the_ID();?>
<?php get_header();?>
   <section class="mp-first-screen">
      <div class="container">
         <div class="mp-first-screen__text">
            <h1 class="mp-first-screen__title"><?php echo carbon_get_post_meta( $page_id, 'first_srceen_title' );?></h1>
            <h2 class="mp-first-screen__subtitle"><?php echo carbon_get_post_meta( $page_id, 'first_srceen_subtitle' );?>
            </h2>
            <a href="#form-popup" type="submit" class="popup-link mp-first-screen__btn default-btn"><?php echo carbon_get_post_meta( $page_id, 'first_srceen_btn_text' );?></a>

            
         </div>
         <div data-da=".mp-first-screen__text, 767, 2" class="mp-first-screen__image">
            <picture>
               <source class="lazy" data-srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'first_srceen_image'), 'full'))?>" type="image/webp">
               <img class="lazy" data-src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'first_srceen_image'), 'full');?>">
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
   <section class="mp-calculator">
      <div class="container">

         <h2 class="section-title mp-calculator__title">Калькулятор</h2>
         <div class="mp-calculator__content">
            <div class="mp-calculator__assets mp-calculator-assets">
               <div class="mp-calculator-assets__sash calculator-sash">
                  <h3 class="calculator-sash__title">Количество створок
                     <button data-title="Выберите количество створок на окнах" class="calculator-sash__title-prompt">
                        <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M12 26.5C7.029 26.5 3 22.471 3 17.5C3 12.529 7.029 8.5 12 8.5C16.971 8.5 21 12.529 21 17.5C21 22.471 16.971 26.5 12 26.5Z"
                              stroke="#565F65" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           <path
                              d="M12 18.75V18.5C12 17.683 12.505 17.24 13.011 16.9C13.505 16.567 14 16.133 14 15.333C14 14.228 13.105 13.333 12 13.333C10.895 13.333 10 14.228 10 15.333"
                              stroke="#565F65" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           <path
                              d="M11.999 21.5C11.861 21.5 11.749 21.612 11.75 21.75C11.75 21.888 11.862 22 12 22C12.138 22 12.25 21.888 12.25 21.75C12.25 21.612 12.138 21.5 11.999 21.5Z"
                              stroke="#565F65" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </button>
                  </h3>
                  <div class="calculator-sash__buttons">
                     <button data-sash-count="1" class="active calculator-sash__btn">
                        <svg width="34" height="48" viewBox="0 0 34 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="26" height="40" transform="matrix(1 0 0 -1 4 44)" fill="url(#paint0_linear)" />
                           <rect x="0.5" y="0.5" width="33" height="47" rx="1.5" stroke="#E6E6E6" />
                           <defs>
                              <linearGradient id="paint0_linear" x1="13" y1="0" x2="13" y2="40"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#BEDFFF" />
                                 <stop offset="1" stop-color="#BBDEFF" stop-opacity="0.26" />
                              </linearGradient>
                           </defs>
                        </svg>

                     </button>
                     <button data-sash-count="2" class="calculator-sash__btn">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="19" height="40" transform="matrix(1 0 0 -1 8 48)" fill="url(#paint0_linear)" />
                           <rect width="19" height="40" transform="matrix(1 0 0 -1 29 48)" fill="url(#paint1_linear)" />
                           <rect x="4.5" y="4.5" width="47" height="47" rx="1.5" stroke="#E6E6E6" />
                           <defs>
                              <linearGradient id="paint0_linear" x1="9.5" y1="0" x2="9.5" y2="40"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#BEDFFF" />
                                 <stop offset="1" stop-color="#BBDEFF" stop-opacity="0.26" />
                              </linearGradient>
                              <linearGradient id="paint1_linear" x1="9.5" y1="0" x2="9.5" y2="40"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#BEDFFF" />
                                 <stop offset="1" stop-color="#BBDEFF" stop-opacity="0.26" />
                              </linearGradient>
                           </defs>
                        </svg>


                     </button>
                     <button data-sash-count="3" class="calculator-sash__btn">
                        <svg width="62" height="56" viewBox="0 0 62 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="14" height="40" transform="matrix(1 0 0 -1 8 48)" fill="url(#paint0_linear_2)" />
                           <rect width="14" height="40" transform="matrix(1 0 0 -1 24 48)" fill="url(#paint1_linear_1)" />
                           <rect width="14" height="40" transform="matrix(1 0 0 -1 40 48)" fill="url(#paint2_linear)" />
                           <rect x="4.5" y="4.5" width="53" height="47" rx="1.5" stroke="#E6E6E6" />
                           <defs>
                              <linearGradient id="paint0_linear_2" x1="7" y1="0" x2="7" y2="40"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#BEDFFF" />
                                 <stop offset="1" stop-color="#BBDEFF" stop-opacity="0.26" />
                              </linearGradient>
                              <linearGradient id="paint1_linear_1" x1="7" y1="0" x2="7" y2="40"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#BEDFFF" />
                                 <stop offset="1" stop-color="#BBDEFF" stop-opacity="0.26" />
                              </linearGradient>
                              <linearGradient id="paint2_linear" x1="7" y1="0" x2="7" y2="40"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#BEDFFF" />
                                 <stop offset="1" stop-color="#BBDEFF" stop-opacity="0.26" />
                              </linearGradient>
                           </defs>
                        </svg>


                     </button>
                     <button data-sash-count="4" class="calculator-sash__btn">
                        <svg width="78" height="56" viewBox="0 0 78 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="14" height="40" transform="matrix(1 0 0 -1 8 48)" fill="url(#paint0_linear_3)" />
                           <rect width="14" height="40" transform="matrix(1 0 0 -1 24 48)" fill="url(#paint1_linear_2)" />
                           <rect width="14" height="40" transform="matrix(1 0 0 -1 40 48)" fill="url(#paint2_linear_1)" />
                           <rect width="14" height="40" transform="matrix(1 0 0 -1 56 48)" fill="url(#paint3_linear)" />
                           <rect x="4.5" y="4.5" width="69" height="47" rx="1.5" stroke="#E6E6E6" />
                           <defs>
                              <linearGradient id="paint0_linear_3" x1="7" y1="0" x2="7" y2="40"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#BEDFFF" />
                                 <stop offset="1" stop-color="#BBDEFF" stop-opacity="0.26" />
                              </linearGradient>
                              <linearGradient id="paint1_linear_2" x1="7" y1="0" x2="7" y2="40"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#BEDFFF" />
                                 <stop offset="1" stop-color="#BBDEFF" stop-opacity="0.26" />
                              </linearGradient>
                              <linearGradient id="paint2_linear_1" x1="7" y1="0" x2="7" y2="40"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#BEDFFF" />
                                 <stop offset="1" stop-color="#BBDEFF" stop-opacity="0.26" />
                              </linearGradient>
                              <linearGradient id="paint3_linear" x1="7" y1="0" x2="7" y2="40"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#BEDFFF" />
                                 <stop offset="1" stop-color="#BBDEFF" stop-opacity="0.26" />
                              </linearGradient>
                           </defs>
                        </svg>


                     </button>
                  </div>
               </div>
               <div class="mp-calculator-assets__options mp-calculator-assets-options">
                  <h3 class="mp-calculator-assets-options__title">
                     Дополнительные опции
                  </h3>
                  <div class="mp-calculator-assets-options__content">
                     <div class="mp-calculator-assets-options__row">
                        <h4 class="mp-calculator-assets-options__row-title">Тип профиля</h4>
                        <div class="mp-calculator-assets-options__select-wrapper">


                           <select class="mp-calculator-assets-options__row-select" >
                              <option value="">REHAU Blitz New</option>
                              <option value="">REHAU Thermo</option>
                              <option value="">REHAU Grazio</option>
                              <option value="">REHAU Intelio 80</option>
                              <option value="">REHAU Delight</option>
                              <option value="">REHAU Brilliant</option>
                              <option value="">REHAU Geneo</option>
                           </select>
                           <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1.5L4.5 4L8 1.5" stroke="#93A2AB" stroke-width="1.5" />
                           </svg>

                        </div>
                     </div>
                     <div class="mp-calculator-assets-options__row">
                        <h4 class="mp-calculator-assets-options__row-title">Стеклопакет</h4>
                        <div class="mp-calculator-assets-options__select-wrapper">


                           <select class="mp-calculator-assets-options__row-select" >
                              <option value="">Стандартный</option>
                              <option value="">Теплосберегающий</option>
                              <option value="">Солнцезащитный</option>
                              <option value="">Шумозащитный</option>
                           </select>
                           <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1.5L4.5 4L8 1.5" stroke="#93A2AB" stroke-width="1.5" />
                           </svg>

                        </div>
                     </div>
                     <div class="mp-calculator-assets-options__row">
                        <h4 class="mp-calculator-assets-options__row-title">Ширина подоконника</h4>
                        <div class="mp-calculator-assets-options__select-wrapper">


                           <select class="mp-calculator-assets-options__row-select" >
                              <option value="">Нет</option>
                              <option value=""> 150 мм</option>
                              <option value=""> 200 мм</option>
                              <option value=""> 250 мм</option>
                              <option value=""> 300 мм</option>
                              <option value=""> 350 мм</option>
                              <option value=""> 400 мм</option>
                              <option value=""> 450 мм</option>
                              <option value=""> 500 мм</option>

                           </select>
                           <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1.5L4.5 4L8 1.5" stroke="#93A2AB" stroke-width="1.5" />
                           </svg>

                        </div>
                     </div>
                     <div class="mp-calculator-assets-options__row">
                        <h4 class="mp-calculator-assets-options__row-title">Ширина отлива
                        </h4>
                        <div class="mp-calculator-assets-options__select-wrapper">


                           <select class="mp-calculator-assets-options__row-select" >
                              <option value="">нет</option>
                              <option value="">менее 100мм</option>
                              <option value="">100-150мм</option>
                              <option value="">200-250мм</option>
                              <option value="">250-400мм</option>
                           </select>
                           <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1.5L4.5 4L8 1.5" stroke="#93A2AB" stroke-width="1.5" />
                           </svg>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mp-calculator__image mp-calculator-image">
               <div class="mp-calculator-image__top">
                  <h3 class="calculator-sash__title">Задайте параметры
                     <button data-title="Выберите ширину и длинну окна" class="calculator-sash__title-prompt">
                        <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M12 26.5C7.029 26.5 3 22.471 3 17.5C3 12.529 7.029 8.5 12 8.5C16.971 8.5 21 12.529 21 17.5C21 22.471 16.971 26.5 12 26.5Z"
                              stroke="#565F65" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           <path
                              d="M12 18.75V18.5C12 17.683 12.505 17.24 13.011 16.9C13.505 16.567 14 16.133 14 15.333C14 14.228 13.105 13.333 12 13.333C10.895 13.333 10 14.228 10 15.333"
                              stroke="#565F65" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           <path
                              d="M11.999 21.5C11.861 21.5 11.749 21.612 11.75 21.75C11.75 21.888 11.862 22 12 22C12.138 22 12.25 21.888 12.25 21.75C12.25 21.612 12.138 21.5 11.999 21.5Z"
                              stroke="#565F65" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </button>
                  </h3>
                  <svg width="122" height="42" viewBox="0 0 122 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.5">
                        <rect x="0.5" y="0.5" width="39.9844" height="41" stroke="black" />
                        <rect x="3.85938" y="3.83325" width="13.1094" height="34.3333" stroke="black" />
                        <rect x="24.0156" y="3.83325" width="13.1094" height="34.3333" fill="#4154D9" stroke="black" />
                        <path
                           d="M38.2887 26.8342L39.8929 28.426C40.2469 28.7772 40.2469 29.3475 39.8929 29.6988L38.9301 30.6542C38.5761 31.0054 38.0013 31.0054 37.6473 30.6542L36.0431 29.0624L34.8343 30.2618C34.5956 30.4987 34.1897 30.4036 34.0833 30.0862L31.7517 23.1448C31.6332 22.7927 31.9709 22.4584 32.3257 22.5752L39.3214 24.8888C39.6412 24.9943 39.737 25.3971 39.4984 25.6339L38.2887 26.8342Z"
                           fill="white" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M27.3964 22.8047H25.5454" stroke="black" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M28.7439 19.5904L27.4287 18.2854" stroke="black" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M28.7112 26.051L27.396 27.356" stroke="black" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M31.9834 18.2534V16.4167" stroke="black" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <path d="M35.2549 19.5582L36.5701 18.2532" stroke="black" stroke-linecap="round"
                           stroke-linejoin="round" />
                        <line x1="20.6562" y1="0.666748" x2="20.6562" y2="41.3334" stroke="black" />
                     </g>
                     <path
                        d="M56.68 17V5.8H57.72L62.36 11.88L67 5.8H68.04V17H66.84V7.88L62.36 13.8L57.88 7.88V17H56.68ZM77.1268 16.008C76.3694 16.776 75.4468 17.16 74.3588 17.16C73.2708 17.16 72.3428 16.776 71.5748 16.008C70.8174 15.2293 70.4388 14.28 70.4388 13.16C70.4388 12.04 70.8174 11.096 71.5748 10.328C72.3428 9.54933 73.2708 9.16 74.3588 9.16C75.4468 9.16 76.3694 9.54933 77.1268 10.328C77.8948 11.096 78.2788 12.04 78.2788 13.16C78.2788 14.28 77.8948 15.2293 77.1268 16.008ZM72.3748 15.256C72.9294 15.832 73.5908 16.12 74.3588 16.12C75.1268 16.12 75.7828 15.8373 76.3268 15.272C76.8814 14.696 77.1588 13.992 77.1588 13.16C77.1588 12.328 76.8814 11.6293 76.3268 11.064C75.7828 10.488 75.1268 10.2 74.3588 10.2C73.5908 10.2 72.9294 10.488 72.3748 11.064C71.8308 11.6293 71.5588 12.328 71.5588 13.16C71.5588 13.9813 71.8308 14.68 72.3748 15.256ZM79.0038 17L82.2838 12.44L79.3238 9.32H80.6838L84.1238 13V9.32H85.2438V13L88.6838 9.32H90.0438L87.0838 12.44L90.3638 17H89.0838L86.3638 13.24L85.2438 14.44V17H84.1238V14.44L83.0038 13.24L80.2838 17H79.0038ZM91.8113 17V9.32H92.9313V12.6H97.3313V9.32H98.4513V17H97.3313V13.64H92.9313V17H91.8113ZM107.142 16.008C106.385 16.776 105.462 17.16 104.374 17.16C103.286 17.16 102.358 16.776 101.59 16.008C100.833 15.2293 100.454 14.28 100.454 13.16C100.454 12.04 100.833 11.096 101.59 10.328C102.358 9.54933 103.286 9.16 104.374 9.16C105.462 9.16 106.385 9.54933 107.142 10.328C107.91 11.096 108.294 12.04 108.294 13.16C108.294 14.28 107.91 15.2293 107.142 16.008ZM102.39 15.256C102.945 15.832 103.606 16.12 104.374 16.12C105.142 16.12 105.798 15.8373 106.342 15.272C106.897 14.696 107.174 13.992 107.174 13.16C107.174 12.328 106.897 11.6293 106.342 11.064C105.798 10.488 105.142 10.2 104.374 10.2C103.606 10.2 102.945 10.488 102.39 11.064C101.846 11.6293 101.574 12.328 101.574 13.16C101.574 13.9813 101.846 14.68 102.39 15.256ZM56.28 36V28.32H57.4V32.4L61.24 28.32H62.6L59.64 31.44L62.92 36H61.64L58.92 32.24L57.4 33.84V36H56.28ZM63.0781 36V34.88C63.1421 34.9227 63.2061 34.9493 63.2701 34.96C63.4088 35.0133 63.5581 35.04 63.7181 35.04C64.0488 35.04 64.3048 34.944 64.4861 34.752C64.6781 34.56 64.8381 34.128 64.9661 33.456C65.0941 32.7733 65.1581 31.808 65.1581 30.56V28.32H70.7581V36H69.6381V29.36H66.2781V30.56C66.2781 31.6907 66.2195 32.6347 66.1021 33.392C65.9955 34.1387 65.8301 34.7093 65.6061 35.104C65.3821 35.4987 65.1315 35.776 64.8541 35.936C64.5875 36.0853 64.2621 36.16 63.8781 36.16C63.6861 36.16 63.4995 36.1333 63.3181 36.08C63.2648 36.0693 63.1848 36.0427 63.0781 36ZM73.3113 36V28.32H74.4313V34.08L79.0713 28.32H80.0312V36H78.9113V30.24L74.2713 36H73.3113ZM82.5925 36V28.32H83.7125V32.4L87.5525 28.32H88.9125L85.9525 31.44L89.2325 36H87.9525L85.2325 32.24L83.7125 33.84V36H82.5925ZM90.6706 36V28.32H91.7906V31.6H96.1906V28.32H97.3106V36H96.1906V32.64H91.7906V36H90.6706ZM99.3138 39.2V38.16C99.4098 38.2027 99.4951 38.2293 99.5698 38.24C99.7511 38.2933 99.9324 38.32 100.114 38.32C100.775 38.32 101.255 37.92 101.554 37.12L101.954 36L98.8338 28.32H100.034L102.514 34.56L104.994 28.32H106.194L102.674 37.12C102.354 37.9307 102.007 38.5067 101.634 38.848C101.271 39.1893 100.818 39.36 100.274 39.36C100.028 39.36 99.7991 39.3333 99.5858 39.28C99.5111 39.2693 99.4204 39.2427 99.3138 39.2ZM109.478 36V29.36H106.758V28.32H113.318V29.36H110.598V36H109.478ZM114.921 36V28.32H116.041V30.88H118.041C118.915 30.88 119.598 31.1147 120.089 31.584C120.59 32.0427 120.841 32.6613 120.841 33.44C120.841 34.2187 120.59 34.8427 120.089 35.312C119.598 35.7707 118.921 36 118.057 36H114.921ZM116.041 34.96H118.057C118.569 34.96 118.974 34.8213 119.273 34.544C119.571 34.256 119.721 33.888 119.721 33.44C119.721 32.9813 119.566 32.6133 119.257 32.336C118.958 32.0587 118.553 31.92 118.041 31.92H116.041V34.96Z"
                        fill="#93A2AB" />
                  </svg>

               </div>
               <div class="mp-calculator-image__window">
                  <div class="mp-calculator-image__top-slider-wrapper">
                     <input class="field" id="mp-calculator-image__top-slider-field">
                     <div class="mp-calculator-image__top-slider" id="calc-top-slider"></div>
                  </div>
                  <div class="mp-calculator-image__outer-window mp-calculator-image-outer-window">
                     <div data-sash-count="1" class="active-window-image one-sash-window mp-claculator-window">
                        <div data-window-sate="1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/leaf-x.png);"
                           class="mp-calculator-image-outer-window__background">
                           <p class=" mp-calculator-image-outer-window__text">Глухая
                              створка</p>
                        </div>
                     </div>
                     <div data-sash-count="2" class=" two-sash-window  mp-claculator-window">
                        <div data-window-sate="1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/leaf-x.png);"
                           class="mp-calculator-image-outer-window__background">

                           <p class=" mp-calculator-image-outer-window__text">Глухая
                              створка</p>
                        </div>
                        <div data-window-sate="1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/leaf-x.png);"
                           class=" mp-calculator-image-outer-window__background">

                           <p class="mp-calculator-image-outer-window__text">Глухая
                              створка</p>
                        </div>
                     </div>
                     <div data-sash-count="3" class=" three-sash-window  mp-claculator-window">
                        <div data-window-sate="1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/leaf-x.png);"
                           class=" mp-calculator-image-outer-window__background">

                           <p class="mp-calculator-image-outer-window__text">Глухая
                              створка</p>
                        </div>
                        <div data-window-sate="1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/leaf-x.png);"
                           class=" mp-calculator-image-outer-window__background">

                           <p class="mp-calculator-image-outer-window__text">Глухая
                              створка</p>
                        </div>
                        <div data-window-sate="1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/leaf-x.png);"
                           class=" mp-calculator-image-outer-window__background">

                           <p class="mp-calculator-image-outer-window__text">Глухая
                              створка</p>
                        </div>
                     </div>
                     <div data-sash-count="4" class=" four-sash-window mp-claculator-window">
                        <div data-window-sate="1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/leaf-x.png);"
                           class=" mp-calculator-image-outer-window__background">

                           <p class="mp-calculator-image-outer-window__text">Глухая
                              створка</p>
                        </div>
                        <div data-window-sate="1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/leaf-x.png);"
                           class=" mp-calculator-image-outer-window__background">

                           <p class="mp-calculator-image-outer-window__text">Глухая
                              створка</p>
                        </div>
                        <div data-window-sate="1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/leaf-x.png);"
                           class=" mp-calculator-image-outer-window__background">

                           <p class="mp-calculator-image-outer-window__text">Глухая
                              створка</p>
                        </div>
                        <div data-window-sate="1" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/leaf-x.png);"
                           class=" mp-calculator-image-outer-window__background">

                           <p class="mp-calculator-image-outer-window__text">Глухая
                              створка</p>
                        </div>

                     </div>
                  </div>
                  <div class="mp-calculator-image__right-slider-wrapper">
                     <input class="field" id="mp-calculator-image__right-slider-field">
                     <div class="mp-calculator-image__right-slider" id="calc-right-slider"></div>
                  </div>
               </div>
            </div>
         </div>
         <button class="default-btn mp-calculator__btn">Рассчитать стоимость</button>
   </section>
   <section class="mp-rehau-profile">
      <div class="container">
         <h2 class="section-title mp-rehau-profile__title"><? echo carbon_get_post_meta($page_id, 'rehau_profiles_title')?></h2>
         <div class="mp-rehau-profile__content">

            <?php foreach(carbon_get_post_meta($page_id, 'rehau_profile') as $rehau_prifile_item) : ?>
               <div class="mp-rehau-profile__block  mp-rehau-profile-block <?php echo $rehau_prifile_item[rehau_profile_class_name]?>">
                  <div class="mp-rehau-profile-block__text">
                     <h3 class="mp-rehau-profile-block__title"><?php echo $rehau_prifile_item[rehau_profile_title]?></h3>
                     <p class="mp-rehau-profile-block__price"><?php echo $rehau_prifile_item[rehau_profile_price]?></p>
                     <p class="mp-rehau-profile-block__description"><?php echo $rehau_prifile_item[rehau_profile_description]?></p>
                  </div>
                  <div class="mp-rehau-profile-block__image">
                     <picture>
                        <source class="lazy" data-srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url($rehau_prifile_item[rehau_profile_image], 'full'));?>" type="image/webp">
                        <img  class="lazy" data-src="<?php echo wp_get_attachment_image_url($rehau_prifile_item[rehau_profile_image], 'full');?>" alt="rehua profile image">
                     </picture>
                  </div>
               </div>
            <?php endforeach; ?>


         </div>
      </div>
   </section>
   <section class="mp-brushbox-profile">
      <div class="container">
         <h2 class="section-title mp-brushbox-profile__title"><? echo carbon_get_post_meta($page_id, 'brushbox_profiles_title')?></h2>
         <div class="mp-brushbox-profile__content">
            <?php foreach(carbon_get_post_meta($page_id, 'brushbox_profile') as $brushbox_prifile_item) : ?>
               <div class="mp-brushbox-profile__block mp-brushbox-profile-block">
                  <div class="mp-brushbox-profile-block__text">
                     <h3 class="mp-brushbox-profile-block__title"><?php echo $brushbox_prifile_item[brushbox_profile_title]?></h3>
                     <p class="mp-brushbox-profile-block__price"><?php echo $brushbox_prifile_item[brushbox_profile_price]?></p>
                     <p class="mp-brushbox-profile-block__description"><?php echo $brushbox_prifile_item[brushbox_profile_description]?></p>
                  </div>
                  <div class="mp-brushbox-profile-block__image">
                     <picture>
                        <source class="lazy" data-srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url($brushbox_prifile_item[brushbox_profile_image], 'full'));?>" type="image/webp">
                        <img class="lazy" data-src="<?php echo wp_get_attachment_image_url($brushbox_prifile_item[brushbox_profile_image], 'full');?>" alt="brushbox profile image">
                     </picture>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
   <?php
      // $headers = 'From: My Name yasha.comberg@gmail.com>' . "\r\n" .
      //             'content-type: text/html' . "\r\n";
      //  wp_mail('gogo-kovalev-2020@mail.ru', 'test subj', 'text', $headers);
      //  echo 'tetteettetetetete';
         // define('WP_USE_THEMES', false);

         // require_once( dirname(__FILE__) . '/../../../wp-load.php' );

   ?>
   <section class="mp-other-services">
      <div class="container">
         <h2 class="section-title mp-other-services__title"><? echo carbon_get_post_meta($page_id, 'other_services_title')?></h2>
         <div class="mp-other-services__content">
            <?php foreach(carbon_get_post_meta($page_id, 'other_service') as $other_service_item) : ?>

               <div class="mp-service lazy" data-bg="<?php echo wp_get_attachment_image_url($other_service_item[other_service_image])?>">
                  <h3 class="mp-service__text"><?php echo $other_service_item[other_service_title]?></h3>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
   <section class="applications" >
      <div class="container">
         <div class="applications__content">
            <div class="applications__text">
               <h2 class="section-title applications__title"><?php echo carbon_get_post_meta($page_id, 'application_title')?></h2>
               <div class="applications__subtitle"><?php echo carbon_get_post_meta($page_id, 'application_text')?></div>
            </div>
            <form class="applications__form form-send applications-form js-send-mail-form">
               <input id="application-form-phone-1" placeholder="+7 (999) 666-66-66" type="text" class="applications-form__input" name="user_phone">
               <button  type="submit" class="default-btn applications-form__btn"><?php echo carbon_get_post_meta($page_id, 'application_btn_text')?></button>
            </form>
         </div>
      </div>
   </section>
   <section class="mp-numbers">
      <div class="container">
         <h2 class="section-title mp-numbers__title"><? echo carbon_get_post_meta($page_id, 'numbers_title')?></h2>
         <div class="mp-numbers__content">

            <?php foreach(carbon_get_post_meta($page_id, 'numbers_block') as $numbers_block_item) : ?>
               <div class="mp-number-block">
                  <h3 class="mp-number-block__title"><?php echo $numbers_block_item[numbers_block_title]?></h3>
                  <p class="mp-number-block__text "><?php echo $numbers_block_item[numbers_block_text]?></p>
               </div>
            <?php endforeach; ?>
            <div class="mp-numbers__quote">
               <div class="mp-numbers__quote-text"><? echo carbon_get_post_meta($page_id, 'numbers_quote')?></div>
            </div>
         </div>
      </div>
   </section>
   <section class="mp-steps-of-work">
      <div class="container">
         <h2 class="section-title mp-steps-of-work__title"><?php echo carbon_get_post_meta($page_id, 'steps_of_work_title')?></h2>
         <div class="mp-steps-of-work__content">
            <picture><source class="lazy" data-srcset="<?php echo get_template_directory_uri()?>/assets/img/mp-steps-of-work-aside-img.svg" type="image/webp"><img class="lazy mp-steps-of-work__aside-img" data-src="<?php echo get_template_directory_uri()?>/assets/img/mp-steps-of-work-aside-img.svg" alt="steps image"></picture>
            <picture><source class="lazy" data-srcset="<?php echo get_template_directory_uri()?>/assets/img/mp-steps-of-work-aside-img_media.svg" type="image/webp"><img class="lazy mp-steps-of-work__aside-img_media" data-src="<?php echo get_template_directory_uri()?>/assets/img/mp-steps-of-work-aside-img_media.svg" alt=""></picture>



            <div class="mp-steps-of-work__text-block">
               <div class="mp-steps-of-work__text"><?php echo carbon_get_post_meta($page_id, 'steps_of_work_text_1')?></div>
               <div class="mp-steps-of-work__text"><?php echo carbon_get_post_meta($page_id, 'steps_of_work_text_2')?></div>
               <div class="mp-steps-of-work__text"><?php echo carbon_get_post_meta($page_id, 'steps_of_work_text_3')?></div>
               <div class="mp-steps-of-work__text"><?php echo carbon_get_post_meta($page_id, 'steps_of_work_text_4')?></div>
               <div class="mp-steps-of-work__text"><?php echo carbon_get_post_meta($page_id, 'steps_of_work_text_5')?></div>
               <div class="mp-steps-of-work__text"><?php echo carbon_get_post_meta($page_id, 'steps_of_work_text_6')?></div>
            </div>
         </div>
         <a href="#" class="mp-steps-of-work__link">Заказать звонок</a>
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
                              <img  class="lazy" data-src="<?php echo $img_src?>" alt="gallery image">
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
                        <img class="lazy" data-src="<?php echo wp_get_attachment_image_url($popular_question_item[popular_questios_block_image], 'full');?>" alt="question image">
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
   <section class="mp-other-questions">
      <div class="container">
         <h2 class="mp-other-questions__title"><? echo carbon_get_post_meta($page_id, 'other_questions_title')?></h2>
         <div class="mp-other-questions__content">
            <div class="accordeons__tasks accordeons__block">

               <?php foreach(carbon_get_post_meta($page_id, 'other_questions') as $other_questions_item) : ?>
               <div class="accordeons__wrapper task accordeon">
                  <h3 class="accordeon__title"><?php echo $other_questions_item[other_questions_title]?></h3>
                  <div class="accordeon__content">
                     <div class="accordeon-content-js">
                        <div class="accordeon__text"><?php echo $other_questions_item[other_questions_answer]?></div>
                     </div>
                  </div>
                  <button class="accordeon__button on">
                     <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 1.5L10 10.5L1 1.5" stroke-width="1.5" stroke-linecap="round"
                           stroke-linejoin="round" />
                     </svg>
                  </button>
               </div>
            <?php endforeach; ?>
            </div>
         </div>
      </div>
   </section>
   <section class="applications lazy">
      <div class="container">
         <div class="applications__content">
            <div class="applications__text">


               <h2 class="section-title applications__title"><?php echo carbon_get_post_meta($page_id, 'application_title')?></h2>
               <div class="applications__subtitle"><?php echo carbon_get_post_meta($page_id, 'application_text')?></div>
            </div>
            <form class="applications__form form-send applications-form js-send-mail-form">
               <input id="application-form-phone-2" placeholder="+7 (999) 666-66-66" type="text" class="applications-form__input" name="user_phone">
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

   <style>
      body .applications {
         background-image: url(<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'application_image'), 'full')?>);
      }
      body.webp .applications {
        background-image: url(<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'application_image'), 'full'))?>);  
      }
   </style>
   <?php get_footer();?>