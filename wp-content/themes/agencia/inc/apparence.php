<?php


add_action('customize_register', function (WP_Customize_Manager $manager) {


    $manager->add_section('actuauto_apparence', [
        'title' => __('Theme apparence')
    ]);

    $manager->add_setting('logo' 
    );

    $manager->add_control(new WP_Customize_Image_Control($manager, 'logo', [
        'label' => __('Logo', 'actuauto'),
        'section' => 'actuauto_apparence'
    ]));

});