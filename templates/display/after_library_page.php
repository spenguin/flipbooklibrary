<?php
/**
 * HTML for after Library Page
 */

?>
<?php
    $path = './../wp-content/plugins/flipbooklibrary/templates/';
?>
</div><!-- end .title-list -->
<!--<script src="<?php echo $path; ?>js/html2canvas.min.js"></script>
<script src="<?php echo $path; ?>js/three.min.js"></script>
<script src="<?php echo $path; ?>js/pdf.min.js"></script>-->

<!--<script src="<?php echo $path; ?>js/3dflipbook.js"></script>-->
<script type="text/javascript">

  function theKingIsBlackPageCallback(n) {
    return {
      type: 'image',
      src: '<?php echo $path; ?>books/image/theKingIsBlack/'+(n+1)+'.jpg',
      interactive: false
    };
  }

  function orwell1984PageCallback(n) {
    return {
      type: 'html',
      src: '<?php echo $path; ?>books/html/1984/'+(n+1)+'.html',
      interactive: true
    };
  }

  function previewPageCallback(n) {
    return {
      type: 'html',
      src: '<?php echo $path; ?>books/html/preview/'+(Math.floor(n/2)%3+1)+'.html',
      interactive: true
    };
  }

  var template = {
    html: '<?php echo $path; ?>templates/default-book-view.html',
    styles: [
      '<?php echo $path; ?>css/font-awesome.min.css',
      '<?php echo $path; ?>css/short-white-book-view.css'
    ],
    script: '<?php echo $path; ?>js/default-book-view.js'
  };

  var booksOptions = {
    orwell1984: {
      pageCallback: orwell1984PageCallback,
      pages: 204,
      propertiesCallback: function(props) {
        props.page.depth /= 2;
        props.cover.padding = 0.002;
        return props;
      },
      template: template
    },
    preview: {
      pageCallback: previewPageCallback,
      pages: 200,
      propertiesCallback: function(props) {
        props.cover.padding = 0.003;
        props.sheet.color = 0x008080;
        return props;
      },
      template: template
    },
    theKingIsBlack: {
      pageCallback: theKingIsBlackPageCallback,
      pages: 40,
      propertiesCallback: function(props) {
        props.cover.color = 0x000000;
        return props;
      },
      template: template
    },
    condoLiving: {
      pdf: '<?php echo $path; ?>books/pdf/BreaksVolumeOne.pdf',
      downloadURL: '<?php echo $path; ?>books/pdf/BreaksVolumeOne.pdf',
      template: template
    },
    theThreeMusketeers: {
      pdf: 'books/pdf/TheThreeMusketeers.pdf',
      propertiesCallback: function(props) {
        props.page.depth /= 3;
        props.cover.padding = 0.002;
        props.cover.binderTexture = 'books/pdf/binder/TheThreeMusketeers.jpg';
        return props;
      },
      template: template
    },
  };

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
    <!--<script src="<?php echo $path; ?>js/script.js"></script> -->