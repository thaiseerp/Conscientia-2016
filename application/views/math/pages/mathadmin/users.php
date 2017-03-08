<div class="space"></div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>This page shows all the users registered, and their details, and get detailed answer log for each user.</p>

			<?php echo form_open('mathadmin',array('class'=>'form-inline','role'=>'form')); ?>
			  <div class="form-group">
			    <label class="sr-only" for="user_id">Get user's answer log:</label>
			    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter UID for any user">
			  </div>
			  <button type="submit" class="btn btn-default">Get Answer Log</button>
			<?php echo form_close(); ?>

			<br><br>

			<table class="table table-striped table-bordered" style="background: #D6D6D6;color: #000;margin-bottom:400px">
				<thead>
					<tr>
						<th>#</th>
						<th>UID</th>
						<th>Username</th>
						<th>Rank</th>
						<th>Score</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>College</th>
						<th>Role</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=0;
					foreach($users as $row){
						$i++;
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$row['user_id']."</td>";
							echo "<td>".htmlspecialchars($row['name'])."</td>";
							echo "<td>".$row['rank']."</td>";
							echo "<td>".$row['score']."</td>";
							echo "<td>".htmlspecialchars($row['phone'])."</td>";
							echo "<td>".htmlspecialchars($row['email'])."</td>";
							echo "<td>".htmlspecialchars($row['college'])."</td>";
							echo "<td>".$row['role']."</td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>