function get_group_details(group_id){
     var table_row = "";   
        $.ajax({
        type: 'POST',
        url: 'get_group_details',
        ContentType: 'application/json',
        dataType: 'json',
        data: {'group_id': group_id},
        success:function(data){
            $("#university").html(data[0].university);
            $("#idea_title").html(data[0].idea_title);
            $("#idea_description").html(data[0].idea_description);
        }
        });

        $.ajax({
        type: 'POST',
        url: 'get_member_details',
        ContentType: 'application/json',
        dataType: 'json',
        data: {'group_id': group_id},
        success:function(data){
            $("#member_table_body").empty();
            $.each(data, function (x, values) {
             if(values.leader == "1"){
                table_row += "<tr><td>"+values.member_id+"</td><td>"+values.name+" (Leader)</td><td>"+values.university_id+"</td><td>"+values.contact_no+"</td><td>"+values.email+"</td><td>"+values.veg_non_veg+"</td><td>"+values.tshirt+"</td></tr>";
             }
             else{
                table_row += "<tr><td>"+values.member_id+"</td><td>"+values.name+"</td><td>"+values.university_id+"</td><td>"+values.contact_no+"</td><td>"+values.email+"</td><td>"+values.veg_non_veg+"</td><td>"+values.tshirt+"</td></tr>";
             }
             
            });
            $("#member_table_body").html(table_row);
        }
        });

}


$( document ).ready(function() {


});

