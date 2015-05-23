

function showRoom(x,y,map_id) {

    $.ajax(
        {
         url: "builder/rooms/show/"+x+"/"+y+"/"+map_id,
         async: true,
         success: function(result){
        $("#edit").html(result);
    }});

    //goto build/x/y return form for updating or creating
    //and put it in edit area
}


