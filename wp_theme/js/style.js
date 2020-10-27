$(function () {
    $('.nav_btn').on('click', function () {

        $('.g_nav').addClass('active');
    });

    $('.close_btn').on('click', function () {

        $('.g_nav').removeClass('active');
    });
});