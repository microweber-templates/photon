<?php

/*

type: layout
content_type: dynamic
name: Portfolio
position: 3
description: Portfolio

*/

?>

<?php include THIS_TEMPLATE_DIR . "header.php"; ?>

<script>
    $(document).ready(function () {
        $("#sidenav").removeClass('active');
    });
</script>

<div class="edit" rel="content" field="photon_content">
    <module type="layouts" template="skin-4" />
</div>


<?php include THIS_TEMPLATE_DIR . "footer.php"; ?>
