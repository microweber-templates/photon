<?php include THIS_TEMPLATE_DIR . "header.php"; ?>

    <div class="edit" rel="content" field="photon_content">
        <div class="main-content-holder nodrop">
            <div class="container" id="blog-container">
                <div id="blog-content-<?php print CONTENT_ID; ?>">
                    <div class="mw-ui-row">
                        <div class="mw-ui-col">
                            <div class="mw-ui-col-container">
                                <h3 class="edit main-title blog-inner-title" field="title" rel="content">Post Title</h3>
                                <module type="sharer" id="bloginnermainsharer"/>

                                <br/>
                                <module data-type="pictures" data-template="simple" rel="content"/>

                                <div class="edit post-content blog-inner-content" field="content" rel="content">
                                    <div class="element">
                                        <p class="element">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position
                                            itanywhereon the site. Get creative, Make Web.</p>
                                    </div>
                                </div>

                                <module data-type="comments" data-content-id="<?php print CONTENT_ID; ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include TEMPLATE_DIR . "footer.php"; ?>