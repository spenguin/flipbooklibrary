<?php
/**
 * Form for the image path
 */
?>
<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }
    </style>
    <p class="meta-options hcf_field">
        <label for="image_path">Image Path</label>
        <input id="image_path" type="text" name="image_path" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'image_path', true ) ); ?>">
    </p>
</div>