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
    $postsPerPage   = 4;
    $pageNo = isset( $_GET['pageNo'] ) ? $_GET['pageNo'] : 1;
    ob_start();
        do_action( 'display_library', $pageNo, $postsPerPage ); 
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