<style>
    #snwp-notice-support-view{
        margin-top: 10px;
        padding: 10px 10px 10px 10px;
        border-color: rgba(0, 0, 0, 0.22);
        border-width: 1px;
        border-style: solid;
        border-radius: 2px;
        margin-left: 10px;
    }
    .snwp-support-click-common {
        display: inline;
        position: relative;
    }





</style>
<script>
    jQuery(document).ready(function(){
        jQuery( '#snwp-notice-support-close' ).click( function (event) {
            jQuery("#snwp-notice-support-view").hide();

            var data = {
                action:'snwp_set_support_time'
            };

            jQuery.post(ajax_object.ajax_url, data, function(respond) {

            });
            return false;
        } );

        jQuery( '#snwp-notice-support-click' ).click( function (event) {

                if(document.getElementById('snwp_author_linking'))        document.getElementById('snwp_author_linking').checked = true;

                var data = {
                    action:'snwp_set_support_link'
                };

                jQuery.post(ajax_object.ajax_url, data, function(respond) {
                    jQuery("#snwp_support_title_1").hide();
                    jQuery("#snwp_support_title_2").show();
                    jQuery("#snwp_support_title_3").hide();
                });

        } );

    });

</script>

<div class="updated" id="snwp-notice-save-view" style="display: none; margin-left: 10px;">
<p>Save Settings Successfully.</p>
</div>

<div class="updated" id="snwp-notice-support-view" style="<?php

    if(snwp_Main::$settings['snwp_author_linking'] == '0'){

        //if((time() - snwp_Main::$settings['snwp_initial_dt']) >= 24 * 60 * 60){
        if((time() - snwp_Main::$settings['snwp_initial_dt']) >= 1){

        }
        else{
            echo 'display: none;';
        }
    }
    else {
        echo 'display: none;';
    }

?>">

    <div class="snwp-support-click-title snwp-support-click-common" id="snwp_support_title_1">Thank you for using
        <a href="<?php  $url = admin_url();
        echo $url . 'options-general.php?page=sports-news-plugin-menu';?>">Sports News</a>,  if you enjoy our plugin 
        <a href="#" id="snwp-notice-support-click"> please activate the author link credit by clicking here.</a>

    </div>
    <div class="snwp-support-click-title snwp-support-click-common" id="snwp_support_title_2" style="display: none;">Thank you for supporting our plugin.</div>
    <div style="float: right;" id="snwp_support_title_3">
        <small><a href="#" id="snwp-notice-support-close"> Hide this Message</a> </small>
    </div>

</div>