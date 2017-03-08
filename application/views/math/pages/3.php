<div class="containter" id="arena" style="padding:10px 15px 100px 0px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center" id="level">
			<h3 style="color:#fff">Question 3
               <br />
               <br />
                <img src="<?=base_url()?>contents/events/mathematrix/level_3.jpg">
            </h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<?php echo form_open('mathematrix/answer',array('role'=>'form')); ?>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
				<?php
                switch ($this->math_levels_model->get_attempts(3)) {
                    case '0':
                        $placeholder = '3 attempts left';
                        break;
                    case '1':
                        $placeholder = '2 more attempts left';
                        break;
                    case '2':
                        $placeholder = 'Last Chance';
                        break;
                    default:
                        $placeholder = 'You are done with this question';
                        break;
                }
                 echo form_input(array('name'=>'answer','id'=>'answer','class'=>'form-control','placeholder'=>$placeholder,'onkeypress' => 'return isNumberKey(event)','maxlength'=>'3')); 
                 echo form_hidden('level', '3');?>
				<span class="input-group-btn">
				<button class="btn btn-danger" type="submit">Submit</button>
				</span>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
