<?php

/*

type: layout
content_type: dynamic
name: Online Shop
is_shop: y
description: shop layout
position: 4

*/


mw_var('photon_layout', 'photon-inner');

?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>
<style>
body.photon-inner #main-content-holder{
  background-color: transparent;
}

</style>
<section id="content">
	<div class="container">
		<div class="mw-ui-row" id="shop-products-conteiner">
			<div class="mw-ui-col">
    			<div class="mw-ui-col-container">
                    <module type="shop/products" template="" limit="6" description-length="160" hide-paging="n"   />
    			</div>
			</div>
			<?php /*<div class="mw-ui-col sidebar">
    			<div class="mw-ui-col-container">
                      <div class="edit"  field="content2" rel="page">
                         <?php
                        		if(is_file(THIS_TEMPLATE_DIR. 'layouts' . DS."shop_sidebar.php")){
                                  include THIS_TEMPLATE_DIR. 'layouts' . DS."shop_sidebar.php";
                              } else if(is_file(DEFAULT_TEMPLATE_DIR.  'layouts' . DS."shop_sidebar.php")){
                              	include DEFAULT_TEMPLATE_DIR. 'layouts' . DS."shop_sidebar.php";
                              }
          		         ?>
                      </div>
    			</div>
			</div>*/ ?>
		</div>
	</div>
</section>
<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
