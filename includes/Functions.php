<?php
/**
 * Functions
 */

function get_display_array( $args )
{
    $query  = new WP_Query( $args );

    $o      = [];
}


/**
 * Generate the pagination string based on the Total Items, and the Items Per Page
 * @param int $total
 * @param int $perPage
 * @return string
 */
function pagination( $total, $perPage, $pageNo )
{   
    ob_start(); ?>
    <nav class="pagination">
        <?php if( $pageNo > 1 ): ?>
            <div class="pagination-page"><a href="./library/?pageNo=<?php echo $pageNo - 1; ?>">Previous</a></div>
        <?php endif; ?>
        <?php for( $i = 1; $i <= $total; $i++ )
        {   ?>
            <div class="pagination-page<?php echo ( $pageNo == $i ) ? ' current-page' : ''; ?>"><a href="./library/?pageNo=<?php echo $i; ?>"><?php echo $i; ?></a></div>
            <?php
        }
        ?>
        <?php if( $pageNo < $total ): ?>
            <div class="pagination-page"><a href="./library/?pageNo=<?php echo $pageNo + 1; ?>">Next</a></div>
        <?php endif; ?>
    </nav>
<?php
    return ob_get_clean();
}