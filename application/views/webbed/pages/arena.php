<div class="containter" id="arena" style="padding:10px 15px 10px 0px;">



	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center" id="level">
			<h3><?=$level->content?></h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<?php echo form_open('webbed/answer',array('role'=>'form')); ?>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
				<?php echo form_input(array('name'=>'answer','id'=>'answer','class'=>'form-control','placeholder'=>$level->placeholder)); ?>
				<span class="input-group-btn">
				<button class="btn btn-danger" type="submit">Submit</button>
				</span>
			</div>
			<?php echo form_close(); ?>
			<?php // echo'<!--'.$level->html_comment.'-->'; ?>
		</div>
	</div>

</div>
