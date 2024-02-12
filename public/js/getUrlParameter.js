
        // Function to extract the message from the URL parameter
        function getUrlParameter(name) {
            name = name.replace(/[[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        };

        // Get the message from the URL parameter
        var message = getUrlParameter('message');

        // If the message is not empty, display it in an alert
        if (message !== '') {
            alert(message);
        }
    