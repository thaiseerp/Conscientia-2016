<div class="space"></div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>To unban any user, contact admin</p>
            <a href="<?=base_url()?>wbdadmin/users/">
			<button type="submit" class="btn btn-default">Back to Users</button></a>

			<br><br>

			<table class="table table-striped table-bordered" style="background: #D6D6D6;color: #000;margin-bottom:400px">
				<thead>
					<tr>
						<th>#</th>
						<th>UID</th>
						<th>Username</th>
						<th>Rank</th>
						<th>Level</th>
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
							echo "<td>".$row['level']."</td>";
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