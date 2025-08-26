require([
    'jquery',
    'Mediarox_ModuleDropdownLogin/js/action/mini-login',
    'Magento_Ui/js/lib/view/utils/async',
], function ($, miniLoginAction) {
    let shareData = {
        actionAttribute: 'data-action',
        actionValue: 'share-product'
    };
    let shareLinks = '['+ shareData.actionAttribute +'="' + shareData.actionValue + '"]';

    // wait for share links and add click event
    $.async(shareLinks, function(element) {
        $(element).on('click', function (event) {
            miniLoginAction.triggerMiniLogin(event);
        });
    });
});
