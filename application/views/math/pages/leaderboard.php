<div class="space"></div>
<div class="container">
    <h1 align="center">Leaderboard</h1>
	<div class="col-md-8 col-md-offset-2">

		<?php
		$list='';

		foreach($leaderboard as $row){
				$list.="<tr>";
				$list.="<td>".$row['rank']."</td>";
				$list.="<td>".$row['name']."</td>";
				$list.="<td>".$row['score']."</td>";
				$list.="<td>".htmlspecialchars($row['college'])."</td>";
				$list.="</tr>";
		}

		?>
		<table class="table table-striped table-bordered" style="background: #D6D6D6;color: #000;margin-bottom:400px">
			<thead>
				<tr>
					<th>Rank #</th>
					<th>Username</th>
					<th>Score</th>
					<th>College</th>
				</tr>
			</thead>
			<tbody>
				<?=$list?>
			</tbody>
		</table>
	</div>
</div>
