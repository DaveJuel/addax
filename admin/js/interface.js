/*
 * Javascript to interact with the back interface
 */
/*
 * TODO: Handle all buttons.
 */
/*
 * ============ LOGIN ===============
 */
$("#login-form").on('submit', function (e) {
    e.preventDefault();
    //Get input field values from HTML form
    var username = $("input[name=log_username]").val();
    var password = $("input[name=log_password]").val();

    //Data to be sent to server
    var post_data;
    var output;
    post_data = {
        'action': "Login",
        'log_username': username,
        'log_password': password
    };

    //Ajax post data to server
    $.post('../includes/interface.php', post_data, function (response) {
//Response server message
        if (response.type == 'error') {
            output = '<div class="notification error"><span class="notification-icon"><i class="fa fa-exclamation" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
        } else if (response.type == "success") {
            window.location.href = "home.php";
        } else {
            output = '<div class="notification success"><span class="notification-icon"><i class="fa fa-check" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
            //If success clear inputs
            $("input, textarea").val('');
            $('select').val('');
            $('select').val('').selectpicker('refresh');
        }
        $("#notification").html(output);
    }, 'json');
});
//END LOGIN-------------------------------

/*
 * ============= UNLOCK ==================
 */
$("#unlock-form").on('submit', function (e) {
    e.preventDefault();
    //Get input field values from HTML form
    var password = $("input[name=password]").val();

    //Data to be sent to server
    var post_data;
    var output;
    post_data = {
        'action': "Unlock",
        'password': password
    };

    //Ajax post data to server
    $.post('../includes/interface.php', post_data, function (response) {
//Response server message
        if (response.type == 'error') {
            output = '<div class="notification error"><span class="notification-icon"><i class="fa fa-exclamation" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
        } else if (response.type == "success") {
            window.location.href = "home.php";
        } else {
            output = '<div class="notification success"><span class="notification-icon"><i class="fa fa-check" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
            //If success clear inputs
            $("input, textarea").val('');
            $('select').val('');
            $('select').val('').selectpicker('refresh');
        }
        $("#notification").html(output);
    }, 'json');
});
//END UNLOCK------------------------