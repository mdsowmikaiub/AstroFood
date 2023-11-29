$(document).ready(function() {
    $("#admin_food_search").on("keyup", function() {
        var searchValue = $("#admin_food_search").val()
        $.ajax({
            url: "admin_foodList_search.php",
            type: "post",
            data: {
                searchValue: searchValue
            },
            success: function(data) {
                $("#foodzZz_search").html(data);
            }
        })
    })
});