jQuery(document).ready(function () {
    jQuery('.toggle-nav').click(function (e) {
        jQuery('.nav-burger ul').slideToggle(300);

        e.preventDefault();
    });

});