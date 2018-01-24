<?php

/*

type: layout

name: Products list

description: Products list

position: 6

*/
?>

<div class="nodrop safe-mode edit" field="layout-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="main-content-holder">
        <div class="container">
            <module type="shop/products" limit="6" description-length="160" hide-paging="n"/>
        </div>
    </div>
</div>