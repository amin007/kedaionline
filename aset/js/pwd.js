// JavaScript Document
$(function() {
    $("#inputPassword1").keyup(function() {
        var password = $("#inputPassword").val();
        $("#divCheckPasswordMatch").html(password == $(this).val() ? "Passwords match." : "Passwords do not match!");
    });

});