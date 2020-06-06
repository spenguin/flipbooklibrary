<?php
/**
 * Library Page
 */
//var_dump( $titles );
?>
<?php
    $path = './../wp-content/plugins/flipbooklibrary/templates/';
?>
<script type="text/javascript">
    var template = {
        html: '<?php echo $path; ?>templates/default-book-view.html',
        styles: [
        '<?php echo $path; ?>css/font-awesome.min.css',
        '<?php echo $path; ?>css/short-white-book-view.css'
        ],
        script: '<?php echo $path; ?>js/default-book-view.js'
    };
    var booksOptions    = {};
</script>
<div class="books title-list">
    <?php 
        echo $title_str;
    ?>
</div>

<script>console.log( booksOptions ); </script>