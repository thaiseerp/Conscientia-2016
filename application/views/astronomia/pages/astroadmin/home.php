<div class="space"></div>
<div class="container" style="margin:20px auto 300px auto">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p align="center" style="color:#fff;font-size:15px"> Basic statistics of Mathematrix</p>
			<table class="table table-striped table-bordered" style="background: #D6D6D6;color: #000;margin-bottom:400px">
				<tbody>
					<tr>
						<td>Number of active levels</td>
						<td class="text-info"><?=$details['levels_active']?></td>
					</tr>
					<tr>
						<td>Highest level reached</td>
						<td class="text-info"><?=$details['levels_highest']?></td>
					</tr>
					<tr>
						<td>Number of registered <a href="<?=base_url()?>astroadmin/users/">Users</a></td>
						<td class="text-info"><?=$details['users_count']?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>