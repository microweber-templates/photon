<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: layout
position: 4

*/


?>
<?php include THIS_TEMPLATE_DIR . "header.php"; ?>
<style>
    body.photon-inner #main-content-holder {
        background-color: transparent;
    }
</style>

<div class="edit" rel="content" field="photon_content">
    <module type="layouts" template="skin-6"/>
</div>

<?php include THIS_TEMPLATE_DIR . "footer.php"; ?>
