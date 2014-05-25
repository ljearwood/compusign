<?php
/**
 * Created by PhpStorm.
 * User: Jasper
 * Date: 5/23/14
 * Time: 9:01 AM
 */


class ClearSettings
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_plugin_page()
    {
        // This page will be under "Settings"
        add_options_page(
            'Clear Responsive Theme Settings',
            'Clear Settings',
            'manage_options',
            'clear-setting-admin',
            array( $this, 'create_admin_page' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'home_page_post_id' );
        ?>
        <div class="wrap">
            <?php screen_icon(); ?>
            <h2>Clear Theme Settings-Options</h2>
            <form method="post" action="options.php">
                <?php
                // This prints out all hidden setting fields
                settings_fields( 'clear_option_group' );
                do_settings_sections( 'clear-setting-admin' );
                submit_button();
                ?>
            </form>
        </div>
    <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {
        register_setting(
            'clear_option_group', // Option group
            'home_page_post_id', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'setting_section_id', // ID
            'Clear Custom Settings', // Title
            array( $this, 'print_section_info' ), // Callback
            'clear-setting-admin' // Page
        );

        add_settings_field(
            'title',
            'Title',
            array( $this, 'title_callback' ),
            'clear-setting-admin',
            'setting_section_id'
        );

        add_settings_field(
            'id_number', // ID
            'Home Page Post ID Number', // Title
            array( $this, 'id_number_callback' ), // Callback
            'clear-setting-admin', // Page
            'setting_section_id' // Section
        );
    }

    /**
     * Sanitize each setting field as needed
     *
     *  @param array $input Contains all settings fields as array keys
     *  @return array
     */
    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['id_number'] ) )
            $new_input['id_number'] = absint( $input['id_number'] );

        if( isset( $input['title'] ) )
            $new_input['title'] = sanitize_text_field( $input['title'] );

        return $new_input;
    }

    /**
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'Welcome to the Clear Responsive Theme settings page. Enter your settings below:';
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function id_number_callback()
    {
        printf(
            '<input type="text" id="id_number" name="home_page_post_id[id_number]" value="%s" />',
            isset( $this->options['id_number'] ) ? esc_attr( $this->options['id_number']) : ''
        );
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function title_callback()
    {
        printf(
            '<input type="text" id="title" name="home_page_post_id[title]" value="%s" />',
            isset( $this->options['title'] ) ? esc_attr( $this->options['title']) : ''
        );
    }
}
