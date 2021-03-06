<?php
/**
 * Created by PhpStorm.
 * User: Jasper
 * Date: 5/23/14
 * Time: 9:01 AM
 */

/**
 * Class ClearSettings
 * Optimized for CompuSigns Website.
 * compu_settings is the variable that is stored in the options database.
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
            'CompuSign Settings',
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
        $this->options = get_option( 'compu_settings' );
        ?>
        <div class="wrap">
            <?php screen_icon(); ?>
            <h2>Clear Theme Settings-Options for Compusign</h2>
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
            'compu_settings', // Option name
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

        add_settings_field(
            'main_description', // ID
            'Schema.org main description', // Title
            array( $this, 'main_description_callback' ), // Callback
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

        if( isset( $input['main_description'] ) )
            $new_input['main_description'] = sanitize_text_field( $input['main_description'] );

        return $new_input;
    }

    /**
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'Welcome to the Clear Responsive Theme (Compu Signs) settings page. Enter your settings below:';
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function id_number_callback()
    {
        printf(
            '<input type="text" id="id_number" name="compu_settings[id_number]" value="%s" />',
            isset( $this->options['id_number'] ) ? esc_attr( $this->options['id_number'] ) : ''
        );
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function title_callback()
    {
        printf(
            '<input type="text" id="title" name="compu_settings[title]" value="%s" />',
            isset( $this->options['title'] ) ? esc_attr( $this->options['title'] ) : ''
        );
    }

    public function main_description_callback(){
        printf(
        '<p>This will be the meta description as well. Must have main keyword at the beginning!</p>
        <textarea id="main_description" rows="10" cols="85" name="compu_settings[main_description]" placeholder="%s"></textarea>',
        isset( $this->options['main_description'] ) ? esc_attr( $this->options['main_description'] ) : ''
        );
    }
}
