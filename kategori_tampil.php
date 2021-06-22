<?php 


$kategori = new app\Kategori();
$rows = $kategori->tampil();

?>
	
<div class="tab-content" id="orders-table-tab-content">
	<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
		<div class="app-card app-card-orders-table shadow-sm mb-5">
			<div class="app-card-body">
				<div class="table-responsive">
					<table class="table app-table-hover mb-0 text-left">
						<thead>
							<tr>
								<th class="cell">Nomor</th>
								<th class="cell">ID Kategori</th>
								<th class="cell">Nama Kategori</th>
								<th class="cell">Teks</th>
								<th class="cell"></th>
							</tr>
						</thead>
						<?php 
							$no = 1;
						?>
						<?php foreach ($rows as $row) { ?>
						<tbody>
							<tr>
								<td class="cell"><?php echo $no++?></td>
								<td class="cell"><?php echo $row['cat_id']; ?></td>
								<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat
										erat</span></td>
								<td class="cell">John Sanders</td>
								<td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
								<td class="cell"><span class="badge bg-success">Paid</span></td>
								<td class="cell">$259.35</td>
								<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
							</tr>

						</tbody>
						<?php } ?>
					</table>
				</div>
				<!--//table-responsive-->

			</div>
			<!--//app-card-body-->
		</div>
		<!--//app-card-->
		<nav class="app-pagination">
			<ul class="pagination justify-content-center">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
				</li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<!--//app-pagination-->

	</div>
	<!--//tab-pane-->

</div>
