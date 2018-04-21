<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('theme_options', __('Опции темы', 'crb'))
        ->set_icon('dashicons-businessman')
        ->set_page_menu_title('Gurman')
        ->add_tab('Контакты', array(
            Field::make('text', 'crb_phone1', 'Телефон1')
                ->set_attribute('placeholder', '+7 (***) ***-**-**'),
            Field::make('text', 'crb_phone2', 'Телефон2')
                ->set_attribute('placeholder', '+7 (***) ***-**-**'),
            Field::make('text', 'crb_address', 'Адрес')
                ->set_help_text('Адрес ресторана'),
            Field::make('text', 'crb_email', 'Email')
                ->set_help_text('Email ресторана')
        ))
        ->add_tab('Социальные кнопки', array(
                Field::make('text', 'crb_social_url_vk', 'Вконтакте URL')
                    ->set_help_text('Ссылка на страницу Вконтакте'),
                Field::make('text', 'crb_social_url_instagram', 'Instagram URL')
                    ->set_help_text('Ссылка на страницу Instagram'),
                Field::make('text', 'crb_social_url_facebook', 'Facebook URL')
                    ->set_help_text('Ссылка на страницу Facebook')
            )
        )
        ->add_tab('Описание', array(
            Field::make('textarea', 'crb_slogan', 'Слоган')
                ->set_rows(5)
                ->set_help_text('Краткий текст на главной странице'),
            Field::make('textarea', 'crb_mainhall', 'Главный зал')
                ->set_rows(5)
                ->set_help_text('Краткое описание главного зала'),
            Field::make('image', 'crb_mainhall_photo', 'Фото главного зала')
                ->set_value_type('url'),
            Field::make('textarea', 'crb_smallhall', 'Малый зал')
                ->set_rows(5)
                ->set_help_text('Краткое описание малого зала'),
            Field::make('image', 'crb_smallhall_photo', 'Фото малого зала')
                ->set_value_type('url')
        ));

    Container::make('post_meta', __('Опции блюда', 'crb'))
        ->where('post_type', '=', 'dish')
        ->add_fields(array(
            Field::make('text', 'price_dish', 'Цена блюда')
                ->set_attribute('type', 'number')
                ->set_attribute('min', '0')
        ));

    Container::make( 'term_meta', __( 'Опции категории', 'crb' ) )
        ->where( 'term_taxonomy', '=', 'carte' )
        ->add_fields( array(
            Field::make('image', 'carte_photo', 'Картинка для главной страницы')
                ->set_value_type('url')
        ) );
}