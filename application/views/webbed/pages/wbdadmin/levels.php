<div class="space"></div>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<p>Add a new level. Level should be activated separately.</p>
			<a href="<?=base_url()?>wbdadmin/levels/add_level" class="btn btn-warning">Add New Level</a>
			<hr>

			<table class="table table-striped table-bordered" style="background: #D6D6D6;color: #000;margin-bottom:200px">
				<thead>
					<tr>
						<th>Level #</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$status_readable = array(
						1 => 'Active',
						0 => 'Not Active');
					$button = array(
						1 => 'Deactivate',
						0 => 'Activate');
					$button_class = array(
						1 => 'btn-danger',
						0 => 'btn-success');


					if($levels!=NULL && count($levels)){
						foreach($levels as $row){
							$status = $row['status'];
							echo "<tr>";
								echo "<td>".$row['level']."</td>";
								echo "<td>".$status_readable[$status]."</td>";
								echo '<td><a href="'.base_url().'wbdadmin/levels/status/?level='.$row['level'].'&now='.$status.'" class="btn '.$button_class[$status].'">'.$button[$status].'</a></td>';
							echo "</tr>";
						}
					}
					
					
	
					?>
				</tbody>
			</table>

			<hr>
			<form class="form-inline" role="form" action="<?=base_url()?>wbdadmin/levels/set_user" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="level" placeholder="Enter level to set." value="<?=$current_level?>">
				</div>
				<button type="submit" class="btn btn-info">Set Your Level</button>
			</form>

		</div>
	</div>
</div>
