// show message

function showMessage(message)
{
   jQuery("#snwp_dialog").show();
}
// Save settings for Global.
function snwp_click_credit_link()
{



       var state = jQuery('#snwp_author_linking').attr('checked') ? '1' : '0';
        var dataLink = {
            action  : 'snwp_set_support_link',
            state   : state
        };

        jQuery.post(ajax_object.ajax_url, dataLink, function(respond) {
            if(jQuery('#snwp_author_linking').attr('checked')){
                jQuery("#snwp_support_title_1").hide();
                jQuery("#snwp_support_title_2").show();
                jQuery("#snwp_support_title_3").hide();
            }
            else {
                jQuery('#snwp-notice-support-view').show();
                jQuery("#snwp_support_title_1").show();
                jQuery("#snwp_support_title_2").hide();
                jQuery("#snwp_support_title_3").hide();
            }
        });

}
