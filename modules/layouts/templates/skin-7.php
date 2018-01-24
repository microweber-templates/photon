<?php

/*

type: layout

name: Contacts block

description: Contacts block

position: 7

*/
?>

<div class="nodrop safe-mode edit" field="layout-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="main-content-holder nodrop">
        <div class="container">
            <div class="contacts-holder">
                <div class="allow-drop">
                    <module type="contact_form" template="inline" class="contact-form"/>

                    <p class="element"><em>Email: info@example.com &nbsp;&nbsp;Phone: 001 123 456 78</em></p>
                    <p class="element"><em>Address: Sofia, Bulgaria, Pimen Zographski 14</em></p>
                </div>

                <module type="social_links" id="contact-socials">
            </div>
        </div>

        <module type="google_maps" template="inline" class="contact-form" id="contact-map"/>
    </div>
</div>