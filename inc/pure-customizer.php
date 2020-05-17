<?php

//* Add custom sections and setting in the Admin Customizer
class Pure_Customizer
{
    public function __construct()
    {
        add_action('customize_register', array($this, 'register_customize_sections'));
    }

    public function register_customize_sections($wp_customize)
    {
        $this->author_callout_section($wp_customize);
    }
    private function author_callout_section($wp_customize)
    {
        // New Section Panel
        $wp_customize->add_section('basic-author-callout-section', array(
            'title' => 'Author',
            'priority' => 2,
            'description' => __('The Author section is only displayed on the Blog Page.', 'pure')
        ));

        // Display or Not
        // Add Setting
        $wp_customize->add_setting('basic-author-callout-display', array(
            'default' => 'No',
            'sanitize_callback' => array($this, 'sanitize_custom_option')
        ));

        // Add Control
        $wp_customize->add_control(
            new WP_Customize_Control($wp_customize, 'basic-author-callout-control', array(
                'label' => 'Display this section?',
                'section' => 'basic-author-callout-section',
                'setting' => 'basic-author-callout-display',
                'type' => 'select',
                'choices' => array('No' => 'No', 'Yes' => 'Yes')
            ))

        );
    }
    public function sanitize_custom_option($input)
    {
        return ($input === 'No') ? 'No' : 'Yes';
    }



    function pure_customize_register( $wp_customize ) {
        // Do stuff with $wp_customize, the WP_Customize_Manager object.
      }
      add_action( 'customize_register', 'pure_customize_register' );
}
