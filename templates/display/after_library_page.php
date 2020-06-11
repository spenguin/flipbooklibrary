<?php
/**
 * HTML for after Library Page
 */
$pageCount  = ceil( $titleCount / $postsPerPage );
?>
<div class="title-pagination">
    <?php echo $navStr; ?>
</div>


<?php
    $path = './../wp-content/plugins/flipbooklibrary/templates/';
?>

<script type="text/javascript">
  var instance = {
    scene: undefined,
    options: undefined,
    node: $('#flip-book-window').find('.mount-node')
  };
  $('#flip-book-window').on('hidden.bs.modal',  function() {
    instance.scene.dispose();
  });
  $('#flip-book-window').on('shown.bs.modal', function() {
    instance.scene = instance.node.FlipBook(instance.options);
  });

  $('.books').find('img').click(function(e) {
    if(e.target.id) {
      instance.options = booksOptions[e.target.id];
      $('#flip-book-window').modal('show');
    }
  });
</script>