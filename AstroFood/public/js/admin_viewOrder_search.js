$(document).ready(function() {
    $("#viewOrder_search").on("keyup", function() {
        var searchValue = $("#viewOrder_search").val()
        $.ajax({
            url: "admin_viewOrder_search.php",
            type: "post",
            data: {
                searchValue: searchValue
            },
            success: function(data) {
                $("#output_viewOrder").html(data);
            }
        })
    })
});