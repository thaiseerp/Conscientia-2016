<div class="jumbotron jumbotron-inverse" id="home-bg">
	<div class="container">
		<h1>Mathematrix</h1>
		<h3>It is not enough to have a good mind, what's important is to use it well. So if
numbers are an innate part of your nature then battle against your likes to find
out who is better.</h3>
		<br><br>
		
		<h3>Start playing, and think harder!</h3>
		<p><a class="btn btn-primary btn-lg" href="<?=base_url()?>mathematrix/register">Register Now <i class="glyphicon glyphicon-log-in"></i></a></p>
	</div>
</div>
</div>
<?php 
$this->session->set_flashdata('redirect_url', current_url());
?>