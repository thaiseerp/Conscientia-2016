<div class="jumbotron" style="margin-bottom:150px">
	
		<h2>We just had a look at your answer. Seems like you're </h2>
		
		<?php
			if($result == true){
                $level = $level + 1;
				echo '<h1><span class="text-success">CORRECT</span></h1>';
				echo '<br>';
				echo '<br><p><a class="btn btn-lg btn-success" href="'.base_url().'mathematrix/question/'.$level.'">Next Question</a></p>';
				
			}else{
				echo '<h1><span class="text-danger">WRONG</span></h1>';
				echo '<br><p><a class="btn btn-lg btn-danger" href="'.base_url().'mathematrix/question/'.$level.'">Try Again</a></p>';
			}
		?>
</div>