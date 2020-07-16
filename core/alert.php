<?php
      if(isset($response) && @$response['response'] == "negative") { ?>
        <script>
        Swal.fire({
	  icon: 'error',
	  title: 'Oops...',
	  text: '<?php echo $response['alert'] ?>',
	  
	})
        </script>
<?php }else if(isset($response) && @$response['response'] == "positive"){ ?>
         <script>
        Swal.fire({
	  icon: 'success',
	  
	  text: '<?php echo $response['alert'] ?>',
	  
	})
        </script>
<?php } ?>
