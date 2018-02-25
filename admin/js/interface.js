/**
 * Javascript to interact with the back end
 * @author David NIWEWE
 * @version 0.0.1 
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
            output = '<div class="alert alert-danger"><span class="notification-icon"><i class="glyphicon glyphicon-warning-sign" aria-hidden="true"></i></span><span class="notification-text"> ' + response.text + '</span></div>';
        } else if (response.type == "success") {
            window.location.href = "home.php";
        } else {
            output = '<div class="alert alert-warning"><span class="notification-icon"><i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i></span><span class="notification-text"> ' + response.text + '</span></div>';
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
            output = '<div class="alert alert-danger"><span class="notification-icon"><i class="glyphicon glyphicon-warning-sign" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
        } else if (response.type == "success") {
            window.location.href = "home.php";
        } else {
            output = '<div class="alert alert-warning"><span class="notification-icon"><i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
            //If success clear inputs
            $("input, textarea").val('');
            $('select').val('');
            $('select').val('').selectpicker('refresh');
        }
        $("#notification").html(output);
    }, 'json');
});
//END UNLOCK------------------------

/*
 * ============= ADD USER ==================
 */
$("#add-user-form").on('submit', function (e) {
    e.preventDefault();
    //Get input field values from HTML form
    var fname=$("input[name=add_user_fname]").val();
    var lname=$("input[name=add_user_lname]").val();
    var oname=$("input[name=add_user_oname]").val();
    var email=$("input[name=add_user_email]").val();
    var phone=$("input[name=add_user_tel]").val();
    var address=$("input[name=add_user_address]").val();
    var userType=$("input[name=add_user_type]").val();
    var username=$("input[name=add_user_username]").val();
    var password=$("input[name=add_user_password]").val();
    var confirmPassword=$("input[name=add_user_password_confirmed]").val();

    //Data to be sent to server
    var post_data;
    var output;
    post_data = {
        'action': "add_user",
        'fname': fname,
        'lname': lname,
        'oname': oname,
        'email': email,
        'phone': phone,
        'address': address,
        'user_type': userType,
        'username': username,
        'password': password,
        'confirm_password': confirmPassword
    };

    //Ajax post data to server
    $.post('../includes/interface.php', post_data, function (response) {
    //Response server message
        if (response.type == 'error') {
            output = '<div class="alert alert-danger"><span class="notification-icon"><i class="glyphicon glyphicon-warning-sign" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
        } else if (response.type == "success") {
            output = '<div class="alert alert-success"><span class="notification-icon"><i class="glyphicon glyphicon-ok-sign" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
        } else {
            output = '<div class="alert alert-warning"><span class="notification-icon"><i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
            //If success clear inputs
            $("input, textarea").val('');
            $('select').val('');
            $('select').val('').selectpicker('refresh');
        }
        $("#notification").html(output);
    }, 'json');
});
//END ADD USER------------------------
