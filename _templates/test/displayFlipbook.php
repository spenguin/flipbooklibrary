

<div class="sample-container">
  <div>

  </div>
</div>
<script src="<?php echo site_url(); ?>\wp-content\plugins\flipbooklibrary\templates\test\js/jquery.min.js"></script>
<script src="<?php echo site_url(); ?>\wp-content\plugins\flipbooklibrary\templates\test\js/html2canvas.min.js"></script>
<script src="<?php echo site_url(); ?>\wp-content\plugins\flipbooklibrary\templates\test\js/three.min.js"></script>
<script src="<?php echo site_url(); ?>\wp-content\plugins\flipbooklibrary\templates\test\js/pdf.min.js"></script>
<script src="<?php echo site_url(); ?>\wp-content\plugins\flipbooklibrary\templates\test\js/3dflipbook.js"></script>

<script type="text/javascript">
  $('.sample-container div').FlipBook({pdf: 'books/pdf/CondoLiving.pdf'});
</script>
