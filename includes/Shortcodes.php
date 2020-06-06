<?php
/**
 * Create the Shortcodes
*/
namespace Shortcodes;

\Shortcodes\createShortcodes();

function createShortcodes()
{
   add_shortcode( 'flipbooklibrary', '\Shortcodes\displayLibrary' );
   add_shortcode( 'fbl_login', '\Shortcodes\displayLogin');

}


function displayLibrary()
{   
    $pageNo = 1; //( 1 == count( $segments ) ) ? 1 : $segments[1];
    ob_start();
        do_action( 'display_library', $pageNo ); 
    return ob_get_clean();
}

function displayLogin()
{
    ob_start();
        if( is_user_logged_in() )
        {
            if( FALSE !== strpos( $_SERVER['REQUEST_URI'], 'library' ) )
            {
                echo '<a href="' . site_url() . '/logout">Logout</a>';
            }
            else
            {
                echo '<a href="' . site_url() . '/library">Library</a>';
            }
        }
        else
        {
            echo '<a href="' . site_url() . '/login">Login</a>';
        }
    return ob_get_clean();
}