$(document).ready(function() {
    $("#search").on("keyup", function() {
        var searchValue = $("#search").val()
        $.ajax({
            url: "search.php",
            type: "post",
            data: {
                searchValue: searchValue
            },
            success: function(data) {
                $("#output").html(data);
            }
        })
    })
});