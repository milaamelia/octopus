<?php 
include'header.php';
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Dashboard</h2>
		<div class="right-wrapper pull-right" style="margin-right:15px;">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Dashboard</span></li>
			</ol>
		</div>
</header>
<section class="panel">
	<header class="panel-heading">
		<div class="panel-actions">
			<a href="#" class="fa fa-caret-down"></a>
			<a href="#" class="fa fa-times"></a>
		</div>
		<div class="row">
		<h2 class="panel-title">Basic</h2>
	</header>
	<div class="panel-body">
		<table class="table table-bordered table-striped mb-none" id="datatable-default">
			<thead>
				<tr>
					<th>Id Jabatan</th>
					<th>Nama Jabatan</th>
				</tr>
			</thead>
			<tbody>
				<?php

					include '../config/config.php';
					$tampil = "SELECT * FROM tb_jabatan";
					$hasil = mysqli_query($conn, $tampil);
							$no =1;
					while ($data=mysqli_fetch_assoc($hasil)):					
 					?>
						<tr>
							<td><?= $no ?></td>							
							<td><?php echo $data['kode_jabatan']; ?></td>
							<td><?php echo $data['nama_jabatan'];?></td>
							<td>
								<button type="button" title="Update" class="btn btn-info" data-toggle="modal" 
								data-target="#edit_indetitas<?php echo $data['kode_jabatan']; ?>">
					  				<i class='glyphicon glyphicon-edit'> </i>Update
								</button>
								<a href="proses.php?hapus_indetitas=<?php echo $data['kode_jabatan']; ?>" name="hapus_indetitas" title="Delete" class="btn btn-danger" onclick="return confirm('Anda yakin?');">
					  				<i class='glyphicon glyphicon-trash'> </i>Delete
								</a>
							</td>  
								<?php $no++; ?>
								<!-- Modal Animation -->
								<div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
									<section class="panel">
										<header class="panel-heading">
											<h2 class="panel-title">Jabatan</h2>
										</header>
										<div class="panel-body">
											<form class="form-horizontal form-bordered" method="get">
												<div class="form-group">
													<label class="col-md-3 control-label" for="inputDefault">Default</label>
													<div class="col-md-6">
														<input type="text" name="jabatan" class="form-control" id="inputDefault">
													</div>
												</div>
											</form>
										</div>
										<footer class="panel-footer">
											<div class="row">
												<div class="col-md-12 text-right">
													<button class="btn btn-primary modal-confirm">Confirm</button>
													<button class="btn btn-default modal-dismiss">Cancel</button>
												</div>
											</div>
										</footer>
								</div>
							</div>
						</section>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</section>
<?php 
include'footer.php';
?>
		