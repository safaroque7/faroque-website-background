<?php

if (!defined('ABSPATH')) exit;


//Admin Menu
add_action('admin_menu', 'fwb_add_menu');
function fwb_add_menu()
{
    add_menu_page(
        'Faroque Website Background',        // Page Title
        'BG Color',                         // Menu Title
        'manage_options',                    // Capability
        'fwb-settings',                      // Menu Slug
        'fwb_settings_page_html',           // Callback Function
        'dashicons-dashboard',       // Icon
        25                                 // Position
    );
}

//Register Setting
add_action('admin_init', function () {
    register_setting('fwb_setting_group', 'fwb_bg_color');
});



function fwb_settings_page_html()
{ ?>
    <div class="wrap">
        <h1> Website Background Color </h1>
        <form method="post" action="options.php">
            <?php settings_fields('fwb_setting_group'); ?>
            <table class="form-table">
                <tr>
                    <th> Select Background Color </th>
                    <td> <input type="color" name="fwb_bg_color" value="<?php echo esc_attr(get_option('fwb_bg_color', '#ffffff')); ?>"> </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php }



add_action('wp_head', 'fwb_css');
function fwb_css()
{
    $fwb_bg_color = get_option('fwb_bg_color', '#ffffff');
    echo "<style> body{ background-color: {$fwb_bg_color};} </style>";
}
