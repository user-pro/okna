<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'post_meta', "Дополнительные поля на странице 'остекление балконов'" )
   ->show_on_page(28)
   ->add_tab('Первый экран', [
      Field::make( 'text', 'glasses_first_srceen_title', 'Заголовок' ),
      Field::make( 'text', 'glasses_first_srceen_subtitle', 'Подзаголовок' ),
      Field::make( 'text', 'glasses_first_srceen_btn_text', 'Текст кнопки' ),
      Field::make( 'image', 'glasses_first_srceen_image', 'Картинка' ),
   ])
   ->add_tab('Холодное остекление', [
      Field::make( 'text', 'cold_glassing_undertitle', 'Надзаголовок' ),
      Field::make( 'text', 'cold_glassing_title', 'Заголовок' ),
      Field::make( 'text', 'cold_glassing_text', 'Подзаголовок' ),
      Field::make( 'text', 'cold_glassing_btn_text', 'Текст кнопки' ),
      Field::make( 'text', 'cold_glassing_price', 'Цена' ),
      Field::make( 'image', 'cold_glassing_image', 'Картинка' ),
   ])
   ->add_tab('Цены на холодное остекление', [
      Field::make( 'text', 'cold_glassing_price_title', 'Заголовок' ),
      Field::make( 'text', 'cold_glassing_price_btn_text', 'Текст кнопки' ),
      Field::make( 'complex', 'cold_glassing_prices', 'Блоки с примерами холодного остекления' )
      ->set_max(6)
      ->add_fields( [
         Field::make( 'text', 'cold_glassing_prices_title', "Название"),
         Field::make( 'text', 'cold_glassing_prices_price', "Цена"),
         Field::make( 'image', 'cold_glassing_prices_image', "Фото"),
      ])
   ])
   ->add_tab('Тёплое остекление', [
      Field::make( 'text', 'warm_glassing_undertitle', 'Надзаголовок' ),
      Field::make( 'text', 'warm_glassing_title', 'Заголовок' ),
      Field::make( 'text', 'warm_glassing_text', 'Подзаголовок' ),
      Field::make( 'text', 'warm_glassing_btn_text', 'Текст кнопки' ),
      Field::make( 'text', 'warm_glassing_price', 'Цена' ),
      Field::make( 'image', 'warm_glassing_image', 'Картинка' ),
   ])   
   ->add_tab('Цены на тёплое остекление', [
      Field::make( 'text', 'warm_glassing_price_title', 'Заголовок' ),
      Field::make( 'text', 'warm_glassing_price_btn_text', 'Текст кнопки' ),
      Field::make( 'complex', 'warm_glassing_prices', 'Блоки с примерами тёплого остекления' )
      ->set_max(6)
      ->add_fields( [
         Field::make( 'text', 'warm_glassing_prices_title', "Название"),
         Field::make( 'text', 'warm_glassing_prices_price', "Цена"),
         Field::make( 'image', 'warm_glassing_prices_image', "Фото"),
      ])
   ])
   ->add_tab('Услуги по отделке балконов', [
      Field::make( 'text', 'balcon_services_title', 'Заголовок' ),
      Field::make( 'text', 'balcon_services_btn_text', 'Текст кнопки' ),
      Field::make( 'complex', 'balcon_services', 'Услуги' )
      ->add_fields( [
         Field::make( 'text', 'balcon_service_title', "Название услуги"),
         Field::make( 'text', 'balcon_service_price', "Цена услуги"),
         Field::make( 'text', 'balcon_service_text', "Описание услуги"),

         Field::make( 'text', 'balcon_service_link_url', "Ссылка 'подробнее'"),
         Field::make( 'image', 'balcon_service_image', "Фото"),
      ])
   ])
   ->add_tab('Другие вопросы', [
      Field::make( 'text', 'gb_other_questions_title', 'Заголовок' ),
      Field::make( 'text', 'gb_other_questions_btn_1_text', 'Текст кнопки первого таба' ),
      Field::make( 'text', 'gb_other_questions_btn_2_text', 'Текст кнопки второго таба' ),
      Field::make( 'text', 'gb_other_questions_btn_3_text', 'Текст кнопки третьего таба' ),
      Field::make( 'complex', 'gb_other_questions_tab_1', 'Вопросы первого таба' )
      ->add_fields( [
         Field::make( 'text', 'gb_other_questions_tab_1_title', "Вопрос"),
         Field::make( 'rich_text', 'gb_other_questions_tab_1_text', "Ответ"),
      ]),
      Field::make( 'complex', 'gb_other_questions_tab_2', 'Вопросы второго таба' )
      ->add_fields( [
         Field::make( 'text', 'gb_other_questions_tab_2_title', "Вопрос"),
         Field::make( 'rich_text', 'gb_other_questions_tab_2_text', "Ответ"),
      ]),
      Field::make( 'complex', 'gb_other_questions_tab_3', 'Вопросы третьего таба' )
      ->add_fields( [
         Field::make( 'text', 'gb_other_questions_tab_3_title', "Вопрос"),
         Field::make( 'rich_text', 'gb_other_questions_tab_3_text', "Ответ"),
      ])
   ]);

Container::make( 'post_meta', "Дополнительные поля на главной странице" )
   ->show_on_page(14)
   ->add_tab('Первый экран', [
      Field::make( 'text', 'first_srceen_title', 'Заголовок' ),
      Field::make( 'text', 'first_srceen_subtitle', 'Подзаголовок' ),
      Field::make( 'text', 'first_srceen_btn_text', 'Текст кнопки' ),
      Field::make( 'image', 'first_srceen_image', 'Картинка' ),
   ])
   ->add_tab('Профили Rehau', [
      Field::make( 'text', 'rehau_profiles_title', 'Заголовок' ),
      Field::make( 'complex', 'rehau_profile', 'Блоки профилей Rehau' )
         ->set_max(5)
         ->add_fields( [
            Field::make( 'text', 'rehau_profile_title', "Название профиля"),
            Field::make( 'text', 'rehau_profile_price', "Цена профиля"),
            Field::make( 'text', 'rehau_profile_description', "Цена профиля"),
            Field::make( 'image', 'rehau_profile_image', "Фото профиля"),
            Field::make( 'text', 'rehau_profile_class_name', "Класс профиля (нужно для коректного отображения, не заменять)"),
         ])
   ])
   ->add_tab('Профили Brushbox', [
      Field::make( 'text', 'brushbox_profiles_title', 'Заголовок' ),
      Field::make( 'complex', 'brushbox_profile', 'Блоки профилей Brushbox' )
      ->set_max(6)
      ->add_fields( [
         Field::make( 'text', 'brushbox_profile_title', "Название профиля"),
         Field::make( 'text', 'brushbox_profile_price', "Цена профиля"),
         Field::make( 'text', 'brushbox_profile_description', "Описание профиля"),
         Field::make( 'image', 'brushbox_profile_image', "Фото профиля"),
      ])
   ])
   ->add_tab('Другие услуги', [
      Field::make( 'text', 'other_services_title', 'Заголовок' ),
      Field::make( 'complex', 'other_service', 'Блоки других услуг' )
      ->add_fields( [
         Field::make( 'rich_text', 'other_service_title', "Название услуги"),
         Field::make( 'image', 'other_service_image', "Фоновое изображение"),
      ])
   ])
   ->add_tab('Цифры', [
      Field::make( 'text', 'numbers_title', 'Заголовок' ),
      Field::make( 'rich_text', 'numbers_quote', 'Текст в синем блоке' ),
      Field::make( 'complex', 'numbers_block', 'Блоки с цифрами' )
      ->set_max(4)
      ->add_fields( [
         Field::make( 'text', 'numbers_block_title', "Заголовок"),
         Field::make( 'text', 'numbers_block_text', "Текст"),
      ])
   ])
   ->add_tab('Этапы работ', [
      Field::make( 'text', 'steps_of_work_title', 'Заголовок' ),
      Field::make( 'rich_text', 'steps_of_work_text_1', 'Текст этапа 1' ),
      Field::make( 'rich_text', 'steps_of_work_text_2', 'Текст этапа 2' ),
      Field::make( 'rich_text', 'steps_of_work_text_3', 'Текст этапа 3' ),
      Field::make( 'rich_text', 'steps_of_work_text_4', 'Текст этапа 4' ),
      Field::make( 'rich_text', 'steps_of_work_text_5', 'Текст этапа 5' ),
      Field::make( 'rich_text', 'steps_of_work_text_6', 'Текст этапа 6' ),
   ])  
   ->add_tab('Другие вопросы', [
      Field::make( 'text', 'other_questions_title', 'Заголовок' ),
      Field::make( 'complex', 'other_questions', 'Блоки других вопросов' )
      ->add_fields( [
         Field::make( 'text', 'other_questions_title', "Вопрос"),
         Field::make( 'rich_text', 'other_questions_answer', "Ответ"),
      ])
   ]);


Container::make( 'post_meta', "Блоки на всех страницах" )
   ->add_tab('Популярные вопросы', [
      Field::make( 'text', 'popular_questios_title', 'Заголовок' ),
      Field::make( 'complex', 'popular_questios_block', 'Популярные вопросы' )

      ->add_fields( [
         Field::make( 'image', 'popular_questios_block_image', "Картинка"),
         Field::make( 'text', 'popular_questios_block_undertitle', "Надзаголовок"),
         Field::make( 'text', 'popular_questios_block_title', "Заголовок вопроса"),
         Field::make( 'text', 'popular_questios_block_text', "Подзаголовок"),
         Field::make( 'complex', 'popular_questios_tags_block', 'Краткие ответы' )
            ->add_fields( [
               Field::make( 'text', 'popular_questions_block_tag', "текст краткого ответа"),
            ])
      ])

   ])
   ->add_tab('Где мы работаем?', [
      Field::make( 'text', 'location_title', 'Заголовок' ),
      Field::make( 'complex', 'location_cities', 'Города' )
      ->add_fields( [
         Field::make( 'text', 'location_cities_name', "Название города"),
      ])
   ])
   ->add_tab('Галерея', [
      Field::make( 'text', 'gallery_title', 'Заголовок' ),
      Field::make( 'media_gallery', 'gallery', 'Картинки для галереи' ),

   ])
   ->add_tab('Вызов специалиста', [
      Field::make( 'text', 'application_title', 'Заголовок' ),
      Field::make( 'text', 'application_text', 'Текст под заголовком' ),
      Field::make( 'text', 'application_btn_text', 'Текст кнопки' ),
      Field::make( 'image', 'application_image', 'Картинка' ),
   ]);

