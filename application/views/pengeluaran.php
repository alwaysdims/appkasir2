<div class="content content--top-nav">

	<?= $this->session->flashdata('notif',true) ?>
	<h2 class="intro-y text-lg font-medium mt-10">
		User
	</h2>
	<div class="grid grid-cols-12 gap-6 mt-5">
		<div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
			<!-- BEGIN: Modal Toggle -->
			<div class="text-center "> <a href="javascript:;" data-tw-toggle="modal"
					data-tw-target="#header-footer-modal-preview" class="btn btn-primary shadow-md mr-2">Add User</a>
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
										class="form-label">Nominal</label> <input id="modal-form-1" type="number"
										class="form-control" placeholder="Masukkan nama" name="nominal"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-2"
										class="form-label">Keterangan</label> <input id="modal-form-2" type="text"
										class="form-control" placeholder="Masukkan username" name="keterangan"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
										class="form-label">Tanggal</label> <input id="modal-form-3" type="date"
										class="form-control" placeholder="Masukkan alamat" name="tanggal"> </div>
							</div> <!-- END: Modal Body -->
							<!-- BEGIN: Modal Footer -->
							<div class="modal-footer"> <button type="button" data-tw-dismiss="modal"
									class="btn btn-outline-secondary w-20 mr-1">Cancel</button> <button type="submit"
									class="btn btn-primary w-20">Send</button> </div> <!-- END: Modal Footer -->
					</div>
					</form>

				</div>
			</div> <!-- END: Modal Content -->
			<div class="dropdown">
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
				</div>
			</div>
			<div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
			<div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
				<div class="w-56 relative text-slate-500">
					<input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
					<i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
				</div>
			</div>
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
							<?=  'Rp. '.number_format($data['nominal'],0,',',',') ?>
						</td>
						<td class="text-center">
							<?= $data['keterangan'] ?>
						</td>
						<td class="text-center">
							<?= $data['tanggal'] ?>
						</td>
						<td class="table-report__action w-56">
							<div class="flex justify-center items-center">
								<button class="flex items-center mr-3" data-tw-toggle="modal"
									data-tw-target="#update<?= $data['id_pengeluaran'] ?>" href="javascript:;"> <i
										data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
								</button>
								<a class="flex items-center text-danger cursor-pointer" onclick="confirmDelete(<?= $data['id_pengeluaran'] ?>)">
									<i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete 
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
									<form action="<?= base_url('user/update') ?>" method="post">
										<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
											<input type="hidden" name="id_user" value="<?= $data['id_pengeluaran'] ?>" id="">
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-1"
													class="form-label">Nama</label> <input id="modal-form-1" type="text"
													class="form-control" placeholder="Masukkan nama" name="nama"
													value="<?= $data['nominal'] ?>"> </div>
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
													class="form-label">alamat</label> <input id="modal-form-3"
													type="text" class="form-control" placeholder="Masukkan alamat"
													name="alamat" value="<?= $data['keterangan'] ?>"> </div>
											<div class="col-span-12 sm:col-span-6"> <label for="modal-form-2"
													class="form-label">Username</label> <input id="modal-form-2"
													type="text" class="form-control" placeholder="Masukkan username"
													name="username" value="<?= $data['tanggal'] ?>" readonly> </div>

										
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
						<!-- BEGIN: Delete Confirmation Modal -->
							<div id="delete<?= $data['id_pengeluaran'] ?>" class="modal" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="p-5 text-center">
												<i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
												<div class="text-3xl mt-5">Apakah Anda Yakin?</div>
												<div class="text-slate-500 mt-2">
													Ingin Menghapus data dengan nama : <?= $data['nominal'] ?>
													<br>
													username : <?= $data['keterangan'] ?>
												</div>
											</div>
											<div class="px-5 pb-8 text-center">
												<button type="button" data-tw-dismiss="modal"
													class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
												<a href="<?= base_url('user/delete/'.$data['id_pengeluaran']) ?>" class="btn btn-danger w-24">Delete</a>
											</div>
										</div>
									</div>
								</div>
							</div>
					</tr>

					<?php  } ?>
				</tbody>
			</table>
		</div>
		<!-- END: Data List -->
		<!-- BEGIN: Pagination -->
		<div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
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
		</div>
		<!-- END: Pagination -->
	</div>
	

</div>

<!-- jQuery and DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    function confirmDelete(id_user) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Lakukan penghapusan dengan mengarahkan ke URL penghapusan
                window.location.href = '<?= base_url("user/delete/") ?>' + id_user;
            }
        })
    }
</script>
