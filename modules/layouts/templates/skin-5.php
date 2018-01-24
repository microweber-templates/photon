<?php

/*

type: layout

name: Blog posts

description: Blog posts

position: 5

*/
?>

<div class="nodrop safe-mode edit" field="layout-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="main-content-holder">
            <module type="posts" data-page-id="<?php print CONTENT_ID ?>" data-show="thumbnail,title,description,read_more"/>
        </div>
    </div>
</div>