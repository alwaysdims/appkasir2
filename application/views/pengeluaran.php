<div class="content content--top-nav">

	<?= $this->session->flashdata('notif',true) ?>
	<div class="grid grid-cols-12 gap-6 mt-5">
		<div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
			<!-- BEGIN: Modal Toggle -->
			<div class="text-center "> <a href="javascript:;" data-tw-toggle="modal"
					data-tw-target="#header-footer-modal-preview" class="btn btn-primary shadow-md mr-2">Add
					Pengeluaran</a>
			</div>
			<!-- END: Modal Toggle -->
			<!-- BEGIN: Modal Content -->
			<div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- BEGIN: Modal Header -->
						<div class="modal-header">
							<h2 class="font-medium text-base mr-auto text-center">Add Pengeluaran</h2>
						</div> <!-- END: Modal Header -->
						<!-- BEGIN: Modal Body -->
						<form action="<?= base_url('pengeluaran/addPengeluaran') ?>" method="post">
							<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-1"
										class="form-label">Nominal Pengeluaran</label> <input id="modal-form-1" type="number"
										class="form-control" placeholder="Masukkan nama" name="nominal"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-2"
										class="form-label">Keterangan</label> <input id="modal-form-2" type="text"
										class="form-control" placeholder="Masukkan username" name="keterangan"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
										class="form-label">Tanggal</label> <input id="modal-form-3" type="date"
										class="form-control" placeholder="Masukkan alamat" name="tanggal"> </div>
								<div class="col-span-12 sm:col-span-12">
									<label for="modal-form-6" class="form-label">Metode</label>
									<select id="modal-form-6" class="form-select" name="metode"
										onchange="toggleTagihan()">
										<option value="Cash">Cash</option>
										<option value="Credit">Credit</option>
									</select>
								</div>
								<div class="col-span-12 sm:col-span-12" id="tagihan-form" style="display: none;">
									<label for="modal-form-4" class="form-label">Bayar</label>
									<input id="modal-form-4" type="number" class="form-control" name="tagihan">
								</div>

							</div> <!-- END: Modal Body -->
							<!-- BEGIN: Modal Footer -->
							<div class="modal-footer"> <button type="button" data-tw-dismiss="modal"
									class="btn btn-outline-secondary w-20 mr-1">Cancel</button> <button type="submit"
									class="btn btn-primary w-20">Send</button> </div> <!-- END: Modal Footer -->
					</div>
					</form>

				</div>
			</div> <!-- END: Modal Content -->
			
		</div>
		<!-- BEGIN: Data List -->
		<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
			<table id="userTable" class="table table-report -mt-2">
				<thead>
					<tr>
						<th class="whitespace-nowrap">No</th>
						<th class="whitespace-nowrap">Nominal</th>
						<th class="text-center whitespace-nowrap">Keterangan</th>
						<th class="text-center whitespace-nowrap">Tanggal</th>
						<th class="text-center whitespace-nowrap">Metode</th>
						<th class="text-center whitespace-nowrap">Status</th>
						<th class="text-center whitespace-nowrap">ACTIONS</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 0;
					foreach($pengeluaran as $data){
						$no +=1;
					
					?>
					<tr class="intro-x">

						<td>
							<?= $no ?>
						</td>
						<td>
							<?=  'Rp'.number_format($data['nominal'],0,',','.') ?>
						</td>
						<td class="text-center">
							<?= $data['keterangan'] ?>
						</td>
						<td class="text-center">
							<?php
								
								$tanggal = $data['tanggal'];
								$newDate = new DateTime($tanggal);
								setlocale(LC_TIME,'id_ID');
								echo date('l, d F Y',$newDate->getTimestamp())
 							?>
						</td>
						<td class="text-center">
							<?= $data['metode'] ?>
						</td>
						<td class="text-center">
							<?= $data['status'] ?>
						</td>
						<td class="table-report__action w-56">
							<div class="flex justify-center items-center">
								<button class="flex items-center mr-3" data-tw-toggle="modal"
									data-tw-target="#update<?= $data['id_pengeluaran'] ?>" href="javascript:;"> <i
										data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
								</button>
								<a class="flex items-center text-danger cursor-pointer"
									onclick="confirmDelete(<?= $data['id_pengeluaran'] ?>)">
									<i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
								</a>
								<a class="flex items-center cursor-pointer ml-3"
									href="<?=base_url('pengeluaran/detailPengeluaran/'.$data['id_pengeluaran'])?>">
									<i data-lucide="zoom-in" class="w-4 h-4 mr-1"></i> Detail
								</a>

							</div>
						</td>
						<!-- BEGIN: Modal Content -->
						<div id="update<?= $data['id_pengeluaran'] ?>" class="modal" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<!-- BEGIN: Modal Header -->
									<div class="modal-header">
										<h2 class="font-medium text-base mr-auto text-center">Add New User</h2>
									</div> <!-- END: Modal Header -->
									<!-- BEGIN: Modal Body -->
									<form action="<?= base_url('pengeluaran/updatePengeluaran') ?>" method="post">
										<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
											<input type="hidden" name="id_pengeluaran"
												value="<?= $data['id_pengeluaran'] ?>" id="">
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-1"
													class="form-label">Nominal</label> <input id="modal-form-1"
													type="text" class="form-control" placeholder="Masukkan nama"
													name="nominal" value="<?= $data['nominal'] ?>"> </div>
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
													class="form-label">Keterangan</label> <input id="modal-form-3"
													type="text" class="form-control" placeholder="Masukkan alamat"
													name="keterangan" value="<?= $data['keterangan'] ?>"> </div>
											<div class="col-span-12 sm:col-span-6"> <label for="modal-form-2"
													class="form-label">Tanggal</label> <input id="modal-form-2"
													type="date" class="form-control" placeholder="Masukkan username"
													name="tanggal" value="<?= $data['tanggal'] ?>"> </div>


										</div> <!-- END: Modal Body -->
										<!-- BEGIN: Modal Footer -->
										<div class="modal-footer"> <button type="button" data-tw-dismiss="modal"
												class="btn btn-outline-secondary w-20 mr-1">Cancel</button> <button
												type="submit" class="btn btn-primary w-20">Send</button> </div>
										<!-- END: Modal Footer -->
								</div>
								</form>
							</div>
						</div> <!-- END: Modal Content -->

					</tr>

					<?php  } ?>
				</tbody>
			</table>
		</div>
		<!-- END: Data List --> 	

</div>

<!-- jQuery and DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- SweetAlert2 -->

<script>
	$(document).ready(function () {
		$('#userTable').DataTable({
			"paging": true,
			"ordering": true,
			"info": true,
			"searching": true,
			"lengthChange": true,
			"pageLength": 10,
			"language": {
				"search": "Cari:",
				"lengthMenu": "Tampilkan _MENU_ data per halaman",
				"zeroRecords": "Data tidak ditemukan",
				"info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
				"infoEmpty": "Tidak ada data",
				"infoFiltered": "(disaring dari _MAX_ total data)"
			}
		});
	});

</script>
<script>
	function confirmDelete(id_pengeluaran) {
		Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#3085d6',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.isConfirmed) {
				// Redirect to the delete function in your backend
				window.location.href = '<?= base_url("pengeluaran/deletePengeluaran/") ?>' + id_pengeluaran;
			}
		});
	}

</script>
<script>
    function toggleTagihan() {
        const metode = document.getElementById("modal-form-6").value;
        const tagihanForm = document.getElementById("tagihan-form");

        if (metode === "Credit") {
            tagihanForm.style.display = "block";
        } else {
            tagihanForm.style.display = "none";
        }
    }
</script>
