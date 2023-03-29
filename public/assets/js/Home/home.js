$( document ).ready(function() {
    $("#dropdown_button").on("click", show_search);
});
function show_search(){
    if ($("#dropdown").css('display') == 'block'){
        $("#dropdown").css('display', 'none');
        return;
    }
    if ($("#dropdown").css('display') == 'none'){
        $("#dropdown").css('display', 'block');
        return;
    }
}
