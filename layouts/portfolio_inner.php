<?php include THIS_TEMPLATE_DIR . "header.php"; ?>

    <script>
        $(document).ready(function () {
            $("#sidenav").removeClass('active');
        });
    </script>

    <div class="edit" rel="content" field="photon_content">
        <div class="main-content-holder fullwidth nodrop">
            <div class="container" id="portfolio-container">
                <div class="mw-ui-row">
                    <div class="mw-ui-col" style="width: 60%;">
                        <div class="mw-ui-col-container">
                            <div class="portfolio-inner">
                                <module data-type="pictures" template="fotorama" rel="content"/>
                            </div>
                        </div>
                    </div>

                    <div class="mw-ui-col">
                        <div class="mw-ui-col-container">
                            <div id="portfolio-inner-content">
                                <h3 class="edit main-title" field="title" rel="content">Page Title</h3>
                                <div class="mw-ui-row">
                                    <div class="mw-ui-col">
                                        <div class="mw-ui-col-container">
                                            <module type="sharer" id="portfolioinnermainsharer"/>
                                        </div>
                                    </div>

                                    <div class="mw-ui-col" style="width: 100px;">
                                        <div class="mw-ui-col-container">
                                            <div class="next-previous-content">
                                                <?php
                                                $next = next_content();
                                                $prev = prev_content();
                                                ?>

                                                <?php if ($next != false) { ?>
                                                    <a href="<?php print $next['url']; ?>" class="mw-icon-arrow-left-slim next-content tip" data-tip="#next-tip"></a>
                                                    <div id="next-tip" style="display: none">
                                                        <div class="next-previous-tip-content">
                                                            <img src="<?php print thumbnail(get_picture($next['id']), 200, 200, true); ?>" alt="" width="90"/>
                                                            <h6><?php print $next['title']; ?></h6>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <?php if ($prev != false) { ?>
                                                    <a href="<?php print $prev['url']; ?>" class="mw-icon-arrow-right-slim prev-content tip" data-tip="#prev-tip"></a>
                                                    <div id="prev-tip" style="display: none">
                                                        <div class="next-previous-tip-content">
                                                            <img src="<?php print thumbnail(get_picture($next['id']), 200, 200, true); ?>" alt="" width="90"/>
                                                            <h6><?php print $prev['title']; ?></h6>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="edit" field="content" rel="content">
                                    <div class="element">
                                        <p align="justify">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to
                                            positionitanywhereon the site. Get creative, Make Web.</p>
                                    </div>
                                </div>

                                <module type="comments" data-template="portfolio" data-content-id="<?php print CONTENT_ID; ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include TEMPLATE_DIR . "footer.php"; ?>