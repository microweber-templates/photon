
<?php

    $facebook_enabled = get_option('facebook_enabled', $params['id']) == 'y';
    $twitter_enabled = get_option('twitter_enabled', $params['id']) == 'y';
    $googleplus_enabled = get_option('googleplus_enabled', $params['id']) == 'y';
    $pinterest_enabled = get_option('pinterest_enabled', $params['id']) == 'y';

    if($facebook_enabled == ''){
      $facebook_enabled = true;
    }
    if($twitter_enabled == ''){
      $twitter_enabled = true;
    }
    if($googleplus_enabled == ''){
      $googleplus_enabled = true;
    }
    if($pinterest_enabled == ''){
      $pinterest_enabled = true;
    }

?>




<div class="mw-social-share-links">

<script>mw.moduleCSS('<?php print module_url(); ?>style.css');</script>


<?php  if($facebook_enabled){ ?>

    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php print mw()->url->current(); ?>" target="_blank"><span class="mw-icon-facebook"></span></a>

<?php } ?>

<?php  if($twitter_enabled){ ?>

    <a href="https://twitter.com/intent/tweet?text=<?php print content_title(); ?>&url=<?php print mw()->url->current(); ?>" target="_blank"><span class="mw-icon-twitter"></span></a>

<?php } ?>


<?php  if($googleplus_enabled){ ?>

    <a href="https://plus.google.com/share?url=<?php print mw()->url->current(); ?>" target="_blank"><span class="mw-icon-googleplus"></span></a>

<?php } ?>

<?php  if($pinterest_enabled){ ?>
    <script type="text/javascript">
        if(!mw.pinMarklet){
          mw.pinMarklet = function(){
            var script = mwd.createElement('script');
            script.src = '//assets.pinterest.com/js/pinmarklet.js';
            mwd.body.appendChild(script)
          }
        }
    </script>

    <a href="javascript:mw.pinMarklet();" target="_self"><span class="mw-icon-social-pinterest"></span></a>


<?php } ?>






</div>