<?php
function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
        'title'   => __('Showcase', 'wpbootstrap'),
        'description' => sprintf(__('Options for showcase','wpbootstrap')),
        'priority'    => 130
    ));

    $wp_customize->add_setting('btn_url', array(
        'default'   => _x('http://test.com', 'wpbootstrap'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
        'label'   => __('Button URL', 'wpbootstrap'),
        'section' => 'showcase',
        'priority'  => 4
    ));

    $wp_customize->add_setting('btn_text', array(
        'default'   => _x('Read More', 'wpbootstrap'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
        'label'   => __('Button Text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority'  => 5
    ));

    $wp_customize->add_setting('btn2_url', array(
        'default'   => _x('http://test.com', 'wpbootstrap'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn2_url', array(
        'label'   => __('Button Two URL', 'wpbootstrap'),
        'section' => 'showcase',
        'priority'  => 6
    ));

    $wp_customize->add_setting('btn2_text', array(
        'default'   => _x('Other Button', 'wpbootstrap'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn2_text', array(
        'label'   => __('Button Two Text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority'  => 7
    ));
}
add_action('customize_register', 'wpb_customize_register');