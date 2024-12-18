<div class="content content--top-nav">

<?php 
	$data = $this->session->userdata('role');
	
	if($data == 'Admin'){ 
	?>	
	<?= $this->session->flashdata('notif',true) ?>
	
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
							<h2 class="font-medium text-base mr-auto text-center">Add New User</h2>
						</div> <!-- END: Modal Header -->
						<!-- BEGIN: Modal Body -->
						<form action="<?= base_url('user/addUser') ?>" method="post">
							<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-1"
										class="form-label">Nama</label> <input id="modal-form-1" type="text"
										class="form-control" placeholder="Masukkan nama" name="nama"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-2"
										class="form-label">Username</label> <input id="modal-form-2" type="text"
										class="form-control" placeholder="Masukkan username" name="username"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
										class="form-label">alamat</label> <input id="modal-form-3" type="text"
										class="form-control" placeholder="Masukkan alamat" name="alamat"> </div>
								<div class="col-span-12 sm:col-span-6"> <label for="modal-form-4"
										class="form-label">Password</label> <input id="modal-form-4" type="password"
										class="form-control" placeholder="Isi Password" name="password"> </div>
								<div class="col-span-12 sm:col-span-6"> <label for="modal-form-6"
										class="form-label">Role</label> <select id="modal-form-6" class="form-select"
										name="role">
										<option value="Admin">Admin</option>
										<option value="Petugas">Petugas</option>
									</select> </div>
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
						<th class="whitespace-nowrap">Nama</th>
						<th class="text-center whitespace-nowrap">Username</th>
						<th class="text-center whitespace-nowrap">Alamat</th>
						<th class="text-center whitespace-nowrap">Role</th>
						<th class="text-center whitespace-nowrap">ACTIONS</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 0;
					foreach($user as $data){
						$no +=1;
					
					?>
					<tr class="intro-x">

						<td>
							<?= $no ?>
						</td>
						<td>
							<?= $data['nama'] ?>
						</td>
						<td class="text-center">
							<?= $data['username'] ?>
						</td>
						<td class="text-center">
							<?= $data['alamat'] ?>
						</td>
						<td class="text-center">
							<?= $data['role'] ?>
						</td>
						<td class="table-report__action w-56">
							<div class="flex justify-center items-center">
								<button class="flex items-center mr-3" data-tw-toggle="modal"
									data-tw-target="#update<?= $data['id_user'] ?>" href="javascript:;"> <i
										data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
								</button>
								<a class="flex items-center text-danger cursor-pointer" onclick="confirmDelete(<?= $data['id_user'] ?>)">
									<i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete 
								</a>

							</div>
						</td>
						<!-- BEGIN: Modal Content -->
						<div id="update<?= $data['id_user'] ?>" class="modal" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<!-- BEGIN: Modal Header -->
									<div class="modal-header">
										<h2 class="font-medium text-base mr-auto text-center">Add New User</h2>
									</div> <!-- END: Modal Header -->
									<!-- BEGIN: Modal Body -->
									<form action="<?= base_url('user/update') ?>" method="post">
										<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
											<input type="hidden" name="id_user" value="<?= $data['id_user'] ?>" id="">
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-1"
													class="form-label">Nama</label> <input id="modal-form-1" type="text"
													class="form-control" placeholder="Masukkan nama" name="nama"
													value="<?= $data['nama'] ?>"> </div>
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
													class="form-label">alamat</label> <input id="modal-form-3"
													type="text" class="form-control" placeholder="Masukkan alamat"
													name="alamat" value="<?= $data['alamat'] ?>"> </div>
											<div class="col-span-12 sm:col-span-6"> <label for="modal-form-2"
													class="form-label">Username</label> <input id="modal-form-2"
													type="text" class="form-control" placeholder="Masukkan username"
													name="username" value="<?= $data['username'] ?>" readonly> </div>

											<div class="col-span-12 sm:col-span-6"> <label for="modal-form-6"
													class="form-label">Role</label> <select id="modal-form-6"
													class="form-select" name="role">
													<option value="Admin">Admin</option>
													<option value="Petugas">Petugas</option>
												</select> </div>
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
							<div id="delete<?= $data['id_user'] ?>" class="modal" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="p-5 text-center">
												<i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
												<div class="text-3xl mt-5">Apakah Anda Yakin?</div>
												<div class="text-slate-500 mt-2">
													Ingin Menghapus data dengan nama : <?= $data['nama'] ?>
													<br>
													username : <?= $data['username'] ?>
												</div>
											</div>
											<div class="px-5 pb-8 text-center">
												<button type="button" data-tw-dismiss="modal"
													class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
												<a href="<?= base_url('user/delete/'.$data['id_user']) ?>" class="btn btn-danger w-24">Delete</a>
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
	
	</div>
	<?php } else {?>
		<div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-lg shadow-lg p-8 max-w-lg text-center">
			<h1 class="text-3xl md:text-4xl font-bold mb-4 text-danger">Fitur Ini Hanya Untuk Admin!</h1>
			<p class="text-lg md:text-xl mb-6 text-danger">Anda harus memiliki hak akses admin untuk menggunakan fitur ini.</p>
   		 </div>
	<?php  }?>
	

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
