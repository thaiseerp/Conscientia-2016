<div class="jumbotron">
	
		<h2>We just had a look at your answer. Seems like you're </h2>
		
		<?php
			if($result == true){
				echo '<h1><span class="text-success">CORRECT</span></h1>';
				echo '<br>';
				echo '<br><p><a class="btn btn-lg btn-success" href="'.base_url().'webbed">Next Level <i class="glyphicon glyphicon-chevron-right"></i></a></p>';
				
			}else{
				echo '<h1><span class="text-danger">WRONG</span></h1>';
				echo '<br><p><a class="btn btn-lg btn-danger" href="'.base_url().'webbed">Try Again <i class="glyphicon glyphicon-chevron-left"></i></a></p>';
			}
		?>
</div>