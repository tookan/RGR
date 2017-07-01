/**
 * Created by tookan_has_arrived on 01.07.2017.
 */

$(document).ready(function () {
    $("#reg_submit").fadeOut();
$("#retype_pwd").keyup(function () {
    var pwd= $("#pawd").val();
    var repwd = $("#retype_pwd").val();
    if(pwd==repwd){
        $("#passes").html('Пароли совпадают');
        $("#reg_submit").fadeIn();
    }else {
        $("#passes").html('Пароли not совпадают');
        $("#reg_submit").fadeOut();
    }
});

});
