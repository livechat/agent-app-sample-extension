(function ($) {
    LiveChat = LiveChat || {};

    window.App = {
        /**
         * Show error message on authorize_error event
         */
        onAuthorizeError: function() {
            $('#chatPluginContainer').hide();
            $('#authorizeError').show();
        },
        /**
         * Custom logic on authorize event
         */
        onAuthorize: function() {
            // custom logic
        },
        /**
         * On customer profile event handler.
         * @param {object} data
         */
        onCustomerProfile: function(data) {
            $('#visitorID').html(data.id);
            $('#visitorName').html(data.name);
            $('#visitorEmail').html(data.email);
            $('#chatID').html(data.chat.id);
        }
    }

    $(document).ready(function () {
        LiveChat.on('authorize', function() {
            App.onAuthorize();
        });

        LiveChat.on('authorize_error', function() {
            App.onAuthorizeError();
        });

        LiveChat.on("customer_profile", function(data) {
            App.onCustomerProfile(data);
        });

        LiveChat.init();
    });

})(jQuery);
