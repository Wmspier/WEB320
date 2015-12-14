$(".toggle-btn:not('.noscript') input[type=radio]").addClass("visuallyhidden");
$(".toggle-btn:not('.noscript') input[type=radio]").change(function() {
    if( $(this).attr("name") ) {
        $(this).parent().addClass("success").siblings().removeClass("success")
    } else {
        $(this).parent().toggleClass("success");
    }
});