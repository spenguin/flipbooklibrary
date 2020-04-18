<?php
/**
 * Library Page
 */
?>
<div class="books">
    <h2>Titles</h2>
    <?php foreach( $titles as $title ): 
        $featured_img_url = get_the_post_thumbnail_url( $title['id'],'full' );
        ?>
        <div class="thumb">
            <img src="<?php echo $featured_img_url; ?>" id=<?php echo str_replace( ' ', '', $title['title'] ); ?> class="btn" />
            <div class="caption"><?php echo $title['title']; ?></div>
        </div>
        <script>
            bookOptions.push( {BreaksVolumeOne: {pdf: 'books/pdf/BreaksVolumeOne.pdf', downloadURL: 'books/pdf/BreaksVolumeOne.pdf', template: template }} );
        </script>

    <?php endforeach; ?>
</div>