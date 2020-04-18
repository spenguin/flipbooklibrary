<?php
/**
 * HTML for after Library Page
 */

?>

</div><!-- end .title-list -->

<script type="text/javascript">
    //console.log( bookOptions );
  function theKingIsBlackPageCallback(n) {
    return {
      type: 'image',
      src: 'books/image/theKingIsBlack/'+(n+1)+'.jpg',
      interactive: false
    };
  }

  function orwell1984PageCallback(n) {
    return {
      type: 'html',
      src: 'books/html/1984/'+(n+1)+'.html',
      interactive: true
    };
  }


  function previewPageCallback(n) {
    return {
      type: 'html',
      src: 'books/html/preview/'+(Math.floor(n/2)%3+1)+'.html',
      interactive: true
    };
  }

  /*var booksOptions = {
    condoLiving: {
      pdf: 'books/pdf/BreaksVolumeOne.pdf',
      downloadURL: 'books/pdf/BreaksVolumeOne.pdf',
      template: template
    },
  };*/

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
      instance.options = bookOptions[e.target.id];
      $('#flip-book-window').modal('show');
    }
  });

</script>

<!--<script src="../wp-content/plugins/flipbooklibrary/templates/js/script.js"></script>-->