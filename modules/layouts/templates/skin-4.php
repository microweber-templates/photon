<?php

/*

type: layout

name: Portfolio Full width with Titles

description: Portfolio with Titles Items

position: 4

*/
?>

<div class="nodrop safe-mode edit" field="layout-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="main-content-holder fullwidth">
        <module data-type="posts" id="portfolio-posts" data-description-length="100" data-show="thumbnail,title" data-hide-paging="true" data-page-id="<?php print CONTENT_ID ?>" template="skin-1"/>
    </div>
</div>