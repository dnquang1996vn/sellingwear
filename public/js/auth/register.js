$(document).on('ready', function() {
    $.datepicker.formatDate( "yy-mm-dd", new Date( 2007, 1 - 1, 26 ) );
    $( function() {
        $( "#birthday" ).datepicker({
            dateFormat: "yy-mm-dd"
        });
    } );
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'accepts': 'application/json',
        }
    });
    $("#name").focusout(function(){
        var updateData = {
            name: $('#name').val(),
            phone: $('#phone').val(),
            adress: $('#adress').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            password_confirm: $('#password-confirmation').val(),
            email_confirm: $('#email-confirmation').val(),
        }
        $.ajax({
            url:'/validation',
            data: updateData,
            dataType:'json',
            type:'post',
            success:function(data){
                console.log(data);
            },
            error:function(data){
                var error = data.responseJSON;
                if (error != null) {
                    if (error.errors.name) {
                    $("#name-error").html(error.errors.name[0]);
                    } else {
                    $("#name-error").html('');
                    }
                } else {
                    $("#name-error").html('');
                }
            },
        });
    });
    $("#email").focusout(function(){
        var updateData = {
            name: $('#name').val(),
            phone: $('#phone').val(),
            adress: $('#adress').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            password_confirm: $('#password-confirmation').val(),
            email_confirm: $('#email-confirmation').val(),
        }
        $.ajax({
            url:'/validation',
            data: updateData,
            dataType:'json',
            type:'post',
            success:function(data){
                console.log(data);
            },
            error:function(data){
                var error = data.responseJSON;
                if (error != null) {
                    if (error.errors.email) {
                    $("#email-error").html(error.errors.email[0]);
                    } else {
                    $("#email-error").html('');
                    }
                } else {
                    $("#email-error").html('');
                }
            },
        });
    });
    $("#password").focusout(function(){
        var updateData = {
            name: $('#name').val(),
            phone: $('#phone').val(),
            adress: $('#adress').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            password_confirm: $('#password-confirmation').val(),
            email_confirm: $('#email-confirmation').val(),
        }
        $.ajax({
            url:'/validation',
            data: updateData,
            dataType:'json',
            type:'post',
            success:function(data){
                console.log(data);
            },
            error:function(data){
                var error = data.responseJSON;
                if (error != null) {
                    if (error.errors.password) {
                    $("#password-error").html(error.errors.password[0]);
                    } else {
                    $("#password-error").html('');
                    }
                } else {
                    $("#password-error").html('');
                }
            },
        });
    });
    $("#password-confirmation").focusout(function(){
        var updateData = {
            name: $('#name').val(),
            phone: $('#phone').val(),
            adress: $('#adress').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            password_confirm: $('#password-confirmation').val(),
            email_confirm: $('#email-confirmation').val(),
        }
        console.log(updateData);
        $.ajax({
            url:'/validation',
            data: updateData,
            dataType:'json',
            type:'post',
            success:function(data){
                console.log(data);
            },
            error:function(data){
                var error = data.responseJSON;
                if (error != null) {
                    if (error.errors.password_confirm) {
                    $("#password-confirmation-error").html(error.errors.password_confirm[0]);
                    } else {
                    $("#password-confirmation-error").html('');
                    }
                } else {
                    $("#password-confirmation-error").html('');
                }
            },
        });
    });
    $("#email-confirmation").focusout(function(){
        var updateData = {
            name: $('#name').val(),
            phone: $('#phone').val(),
            adress: $('#adress').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            password_confirm: $('#password-confirmation').val(),
            email_confirm: $('#email-confirmation').val(),
        }
        console.log(updateData);
        $.ajax({
            url:'/validation',
            data: updateData,
            dataType:'json',
            type:'post',
            success:function(data){
                console.log(data);
            },
            error:function(data){
                var error = data.responseJSON;
                if (error != null) {
                    if (error.errors.email_confirm) {
                    $("#email-confirmation-error").html(error.errors.email_confirm[0]);
                    } else {
                    $("#email-confirmation-error").html('');
                    }
                } else {
                    $("#email-confirmation-error").html('');
                }
            },
        });
    });
})