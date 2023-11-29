$(document).ready(function() {
    $("#search_userList").on("keyup", function() {
        var searchValue = $("#search_userList").val()
        $.ajax({
            url: "admin_userList_search.php",
            type: "post",
            data: {
                searchValue: searchValue
            },
            success: function(data) {
                $("#output_userlist").html(data);
            }
        })
    })
});