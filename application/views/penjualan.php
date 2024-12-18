<div class="content content--top-nav">

	<?= $this->session->flashdata('notif',true) ?>
	<div class="grid grid-cols-12 gap-6 mt-5">
		<div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
			<a href="<?= base_url('penjualan/transaksi') ?>" class="btn btn-primary shadow-md mr-2">Tambah Penjualan</a>
			<a href="javascript:;" 
						data-tw-toggle="modal" 
						data-tw-target="#basic-modal-preview" 
						class="btn btn-primary text-right">Laporan Penjualan</a>
			<!-- <div class="dropdown">
				<button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
					<span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i>
					</span>
				</button>
				<div class="dropdown-menu w-40">
					<ul class="dropdown-content">
						<li>
							<a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
							</a>
						</li>
						<li>
							<a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i>
								Export to Excel </a>
						</li>
						<li>
							<a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i>
								Export to PDF </a>
						</li>
					</ul>
				</div> -->
		</div>
		<div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true" style="">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body p-10 text-center"> 
								<h1 class="mb-2 text-left">Cetak Laporan Penjualan</h1>
								<form action="<?= base_url('penjualan/exporToExel') ?>" method="post" class="">
									<input type="date" class="form-control mb-3" name="tgl1" required>
									<input type="date" class="form-control mb-3" name="tgl2" required>
									<button type="submit" class="btn btn-primary">Expor Excel</button>
								</form>

							
							</div>
						</div>
					</div>
				</div>
	</div>

	<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
		<table id="example" class="table table-auto w-full table-report">
		<thead>
					<tr>
						<th class="text-center whitespace-nowrap">No</th>
						<th class="text-center whitespace-nowrap">Nota</th>
						<th class="text-center whitespace-nowrap">Status</th>
						<th class="text-center whitespace-nowrap">Tanggal</th>
						<th class="text-center whitespace-nowrap">Nominal</th>
						<th class="text-center whitespace-nowrap">Action</th>
					</tr>
				</thead>
			<tbody>
			<?php 
							
							$no = 0;
							foreach($penjualan as $data){
								$no+=1;
							
							?>
				<tr class="intro-x">
					<td class="border px-4 py-2 text-center"><?= $no ?></td>
					<td class="border px-4 py-2 text-center"><?= $data['nota'] ?></td>
					<td class="border px-4 py-2 text-center"><?= $data['status'] ?></td>
					<td class="border px-4 py-2 text-center"><?php
								$tanggal = $data['tanggal'];
								$date = new DateTime($tanggal);
								// Set locale ke Bahasa Indonesia
								setlocale(LC_TIME, 'id_ID');
								// Format: Hari, dd Bulan yyyy
								echo date('l, d F Y', $date->getTimestamp());
							?></td>
					<td class="border px-4 py-2 text-center"><?= "Rp " . number_format($data['total_harga'], 0, ',', '.') ?>
						</td>
					<td class="border px-4 py-2 text-center"><a class="flex items-center mr-3 text-primary" href="<?= base_url('penjualan/invoice/'.$data['nota']) ?>"> <i data-lucide="check-square"
										class="w-4 h-4 mr-1"></i> invoice </a>
					</td>

				</tr>
				<?php } ?>
				<!-- Add more rows as needed -->
			</tbody>
		</table>
	</div>


















	<!-- BEGIN: Data List -->
	<!-- <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
			<table id="exemple" class="table table-report -mt-2">
				<thead>
					<tr>
						<th class="text-center whitespace-nowrap">No</th>
						<th class="text-center whitespace-nowrap">Nota</th>
						<th class="text-center whitespace-nowrap">Status</th>
						<th class="text-center whitespace-nowrap">Tanggal</th>
						<th class="text-center whitespace-nowrap">Nominal</th>
						<th class="text-center whitespace-nowrap">Action</th>
					</tr>
				</thead>
				<?php 
							
							$no = 0;
							foreach($penjualan as $data){
								$no+=1;
							
							?>
				<tbody>
					<tr class="intro-x">
						<td class="text-center"><?= $no ?></td>
						<td class="text-center">
							<?= $data['nota'] ?>
						</td>
						<td class="text-center"><?= $data['status'] ?></td>
						<td class="text-center">
							<?php
								$tanggal = $data['tanggal'];
								$date = new DateTime($tanggal);
								// Set locale ke Bahasa Indonesia
								setlocale(LC_TIME, 'id_ID');
								// Format: Hari, dd Bulan yyyy
								echo date('l, d F Y', $date->getTimestamp());
							?>
						</td>

						<td class="text-center">
							<?= "Rp " . number_format($data['total_harga'], 0, ',', '.') ?>
						</td>

						<td class="table-report__action w-56">
							<div class="flex justify-center items-center">
								<a class="flex items-center mr-3" href="<?= base_url('penjualan/invoice/'.$data['nota']) ?>"> <i data-lucide="check-square"
										class="w-4 h-4 mr-1"></i> invoice </a>
							</div>
						</td>
					</tr>
				</tbody>
				<?php } ?>
			</table>
		</div> -->
	<!-- END: Data List -->
	<!-- BEGIN: Pagination -->
	<!-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
			<nav class="w-full sm:w-auto sm:mr-auto">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
					</li>
					<li class="page-item"> <a class="page-link" href="#">...</a> </li>
					<li class="page-item"> <a class="page-link" href="#">1</a> </li>
					<li class="page-item active"> <a class="page-link" href="#">2</a> </li>
					<li class="page-item"> <a class="page-link" href="#">3</a> </li>
					<li class="page-item"> <a class="page-link" href="#">...</a> </li>
					<li class="page-item">
						<a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
					</li>
				</ul>
			</nav>
			<select class="w-20 form-select box mt-3 sm:mt-0">
				<option>10</option>
				<option>25</option>
				<option>35</option>
				<option>50</option>
			</select>
		</div> -->
	<!-- END: Pagination -->
</div>
<!-- BEGIN: Delete Confirmation Modal -->
<div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body p-0">
				<div class="p-5 text-center">
					<i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
					<div class="text-3xl mt-5">Are you sure?</div>
					<div class="text-slate-500 mt-2">
						Do you really want to delete these records?
						<br>
						This process cannot be undone.
					</div>
				</div>
				<div class="px-5 pb-8 text-center">
					<button type="button" data-tw-dismiss="modal"
						class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
					<button type="button" class="btn btn-danger w-24">Delete</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
