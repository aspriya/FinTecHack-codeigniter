$( document ).ready(function() {
        $.ajax({
        type: 'POST',
        url: 'get_registered_count',
        ContentType: 'application/json',
        dataType: 'json',
        success:function(data){
        	 console.log(data);
        }
        });


});	