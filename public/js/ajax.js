$(".deleteFavorite").click(function(){
    var id = $(this).data("id");
    var token = $(this).data("token");
    $.ajax(
    {
        url: "/show/"+id,
        type: 'PUT',
        dataType: "JSON",
        data: {
            "id": id,
            "_method": 'DELETE',
            "_token": token,
        },
        success: function ()
        {
            console.log("it Work");
        }
    });

    console.log(token);
});