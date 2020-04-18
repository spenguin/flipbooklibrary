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
    //$pageNo = 1; //( 1 == count( $segments ) ) ? 1 : $segments[1];
    //do_action( 'display_library', $pageNo ); 
    
    include_once( './wp-content/plugins/flipbooklibrary/templates/flipbookpage.php' );


}