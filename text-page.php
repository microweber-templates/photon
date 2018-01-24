<?php

/*

type: layout
content_type: static
name: Text page
position: 2
is_default: true
description: Text page layout

*/
?>

<?php include TEMPLATE_DIR . "header.php"; ?>

<div class="edit" rel="content" field="photon_content">
    <div class="container nodrop">
        <div class="main-content-holder">
            <div class="mw-row">
                <div class="mw-col" style="width:33.33%">
                    <div class="mw-col-container">
                        <div class="element">
                            <hr class="visible-desktop column-hr">
                        </div>
                    </div>
                </div>
                <div class="mw-col" style="width:33.33%">
                    <div class="mw-col-container">
                        <h2 align="center">
                            <?php _e("Text page"); ?>
                        </h2>
                    </div>
                </div>
                <div class="mw-col" style="width:33.33%">
                    <div class="mw-col-container">
                        <div class="element">
                            <hr class="visible-desktop column-hr">
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <h3 class="intro element" align="center"><strong style="font-weight: 500;">For a better view of your company, brand or website add some pictures or stories of your team.</strong><br/>
                <strong style="font-weight: 500;">You can also link your social networks by clicking on the following social icons.</strong><br/>
                <br/>
            </h3>
        </div>
    </div>
</div>

<?php include TEMPLATE_DIR . "footer.php"; ?>
