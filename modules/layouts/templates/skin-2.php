<?php

/*

type: layout

name: Portfolio Full width

description: Portfolio Items

position: 2

*/
?>

<div class="nodrop safe-mode edit" field="layout-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="main-content-holder fullwidth">
        <module type="posts" data-description-length="100" data-show="thumbnail" data-page-id="<?php print CONTENT_ID ?>" data-hide-paging="true" template="skin-1"/>
    </div>
</div>