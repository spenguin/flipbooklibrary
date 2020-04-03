<?php
/**
 * Create the Shortcodes
*/

createShortcodes();

function createShortcodes()
{
   add_shortcode( 'flipbooklibrary', 'displayLibrary' );

}


function displayLibrary()
{   
    if( isset( $_GET['book'] ) )
    {
        do_action( 'display_title' );
    }
    else
    {   
        $pageNo = ( 1 == count( $segments ) ) ? 1 : $segments[1];
        do_action( 'display_library', $pageNo );        
    }
    /*
    $segments = array_filter( explode('/', parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) ) ); var_dump( $segments );
    if( 1 == count( $segments ) || is_integer( $segments[1]) )  // Single Title page
    {
        $pageNo = ( 1 == count( $segments ) ) ? 1 : $segments[1];
        do_action( 'display_library', $pageNo ); 
    }
    else
    {   
        do_action( 'display_title' );
    }*/

}