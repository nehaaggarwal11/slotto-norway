$(document).on('click', '#btn-login', function() {
    _element = $(this);
    if (_element.attr('disabled') == 'disabled') {
        return;
    }

    _element.attr('disabled', 'disabled');
    _element.text('Loading...');

    _username = $('#login-username').val();
    _pass = $('#login-password').val();



    $.ajax({
        url: 'login-check.php',
        type: 'POST',
        data: {
            login: _username,
            pass: _pass
        },
        dataType: 'json',
        success: function(data) {
            if (data.code == -1) {
                $('#login-alert').show();
                $('#login-alert').html(data.message);
                _element.removeAttr('disabled');
                _element.text('Log in');
                return;
            } else if (data.code == 0) {
                window.location.href = 'index.php?r=login';
            }
        },
        error: function() {}
    });


    //  _element.text('Login');
});
