<?php
/**
 * Create Hooks (Actions and Filters)
 */

add_action( 'display_library', 'display_before_library_page', 10 );
add_action( 'display_library', 'display_library_page', 20 );
add_action( 'display_library', 'display_after_library_page', 30 );
add_filter( 'display_title', 'display_title', 10, 2 );

function display_before_library_page()
{
    include_once( FBL_TEMPLATES . 'display/before_library_page.php' ); 
}


function display_library_page()
{
    $args   = [
        'post_type'         => 'flipbook',
        'posts_per_page'    => -1,
        'status'            => 'published',
        'orderby'           => 'title'
    ];

    $query  = new WP_Query( $args );

    $title_str  = [];

    if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();
        $title_str[]    = apply_filters( 'display_title', $query->post, $query->post->ID );

    endwhile; endif; wp_reset_query();
    $title_str  = join( "", $title_str );
    
    include_once( FBL_TEMPLATES . 'display/library_page.php' );
}

function display_after_library_page()
{
    include_once( FBL_TEMPLATES . 'display/after_library_page.php' ); 
}

function display_title( $post, $postId )
{
    $titleId    = str_replace( ' ', '', $post->post_title );
    $img_url    = get_the_post_thumbnail_url( $post->ID,'bookcover' );
    $pdfurl     = get_post_meta( $post->ID, 'pdfurl', TRUE );
    ob_start();
    ?>
        <div class="title-list--details">
            <div class="title-list--details_thumb">
                <?php the_post_thumbnail( [300, 500], ['id'=>$titleId, 'class' => 'btn'] ); ?>
                <!--<img id="<?php echo $titleId; ?>" src="<?php echo $img_url; ?>" class="btn"/>-->
                <div class="title-list--details_caption">
                    <h2><?php echo $post->post_title; ?></h2>
                </div>
            </div>
            <script type="text/javascript">
                booksOptions["<?php echo $titleId; ?>"] = {
                    pdf: "<?php echo $pdfurl; ?>", 
                    downloadURL: "<?php echo $pdfurl; ?>", 
                    template: template
                };
            </script>  
        </div>
    <?php return ob_get_clean();
}