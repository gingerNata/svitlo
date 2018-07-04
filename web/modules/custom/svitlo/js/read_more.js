(function ($, Drupal) {
    Drupal.behaviors.myModuleBehavior = {
        attach: function (context, settings) {
            $('#read-more', context).once('myCustomBehavior').each(function () {
                // Apply the myCustomBehaviour effect to the elements only once.
                $('#read-more').click(function(event) {
                    event.preventDefault();
                    $('.hidden-text').toggle();
                    $('#read-more').toggleClass("arrow-down").toggleClass("arrow-top");
                })

            });
        }
    };
})(jQuery, Drupal);
