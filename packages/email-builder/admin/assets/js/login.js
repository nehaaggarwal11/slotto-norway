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
                return;
            } else if (data.code == 0) {
                _element.text('Redirecting...');
                window.location.href = 'index.php?page=templates';
            }
        },
        error: function() {}
    });

    return false;
    //  _element.text('Login');
});
