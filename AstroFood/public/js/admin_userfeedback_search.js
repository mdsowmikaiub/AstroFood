$(document).ready(function() {
    $("#feedback_search").on("keyup", function() {
        var searchValue = $("#feedback_search").val()
        $.ajax({
            url: "admin_userfeedback_search.php",
            type: "post",
            data: {
                searchValue: searchValue
            },
            success: function(data) {
                $("#feedback_output").html(data);
            }
        })
    })
});