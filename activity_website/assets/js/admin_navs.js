$(document).ready(function () {
    $(".adminNav_btn").click(function () {
            $('.adminNav_btn').removeClass('active');
            $(this).addClass('active');
            localStorage.setItem("adminNav", "active");
        });
    });

