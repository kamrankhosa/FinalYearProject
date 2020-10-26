<script>
	function change_status(id){
          $.ajax({
                    url: '<?php echo base_url(); ?>admin/change_status',
                    type: 'post',
                    data: {
                      'change_status':1,
                      'id':id,
                      
                    },

                    success: function(response){

                      if(response == 0){ 
                       alert("User status updated successfully.");
                       location.reload();
              

                      }
                      else{
						alert('Error! in updating user status');

                    }



                    }   
               });

	}


	function show_to_front(id){
          $.ajax({
                    url: '<?php echo base_url(); ?>admin/show_to_front',
                    type: 'post',
                    data: {
                      'show_to_front':1,
                      'id':id,
                      
                    },

                    success: function(response){

                      if(response == 0){ 
                       alert("User status updated successfully.");
                       location.reload();
              

                      }
                      else{
				alert('Error! in updating user status');

                    }



                    }   
               });

	}
  function get_messages(id){
    $.ajax({
                    url: '<?php echo base_url(); ?>admin/get_messages',
                    type: 'post',
                    data: {
                      'get_messages':1,
                      'id':id,
                      
                    },

                    success: function(response){

                      if(response != 0){ 
                        $("#messages_here").html(response)
                // $('#messages_here')=response;

                      }
                      else{
        alert('Error! in getting user messages');

                    }



                    }   
               });

  }
                 function searching_message(){
                      var searching= $('#searching').val();
                       $.ajax({
                    url: '<?php echo base_url(); ?>admin/searching_message',
                    type: 'post',
                    data: {
                      'searching_message':1,
                      'searching':searching,
                      
                    },

                    success: function(response){

                      if(response != 0){ 
                // $('#messages_here')=response;

                      }
                      else{
        alert('Error! in getting user messages');

                    }



                    }   
               });
                     
                    }
</script>