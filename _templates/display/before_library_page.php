<?php
/**
 * HTML for before Library Page
 */
?>
           
<script>
    var bookOptions = new Array();
    var template = {
        html: '../wp-content/plugins/flipbooklibrary/templates/display/default-book-view.html',
        styles: [
        '../wp-content/plugins/flipbooklibrary/templates/css/font-awesome.min.css',
        '../wp-content/plugins/flipbooklibrary/templates/css/short-white-book-view.css'
        ],
        script: '../wp-content/plugins/flipbooklibrary/templates/js/default-book-view.js'
    };    
</script>

<div class="modal fade" id="flip-book-window" tabindex="-1" role="dialog" aria-labelledby="headerLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <div class="modal-body">
                <div class="mount-node">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="title-list">