	<!-- BEGIN: Form Layout -->
	<div class="content content--top-nav">
	<div class="intro-y box p-5">
		
	<?= $this->session->flashdata('notif',true) ?>
		<form action="<?= base_url('master_barang/jenis/simpan') ?>" method="post">
			<div>
				<label for="crud-form-1" class="form-label">Name Jenis</label>
				<input id="crud-form-1" type="text" class="form-control w-full" name="nama_jenis" placeholder="Input text">
			</div>
			<div class="text-right mt-5">
				<button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
				<button type="submit" class="btn btn-primary w-24">Save</button>
			</div>
		</form>
	</div>
	<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
		<table class="table table-report -mt-2">
			<thead>
				<tr>
					<th class="whitespace-nowrap">Nama</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach($jenis as $jj) { ?>

				<tr class="intro-x">

					<td>
						<a href="" class="font-medium whitespace-nowrap"><?= $jj['jenis'] ?></a>
					</td>

					<td class="table-report__action w-56">
						<div class="flex justify-center items-center">

							<a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
								data-tw-target="#edit-modal<?= $jj['id_jenis'] ?>"> <i data-lucide="check-square"
									class="w-4 h-4 mr-1"></i> Edit </a>

							<a class="flex items-center text-danger"
								href="<?php echo site_url('master_barang/jenis/delete_data/'.$jj['id_jenis']); ?>" data-tw-toggle="modal"
								data-tw-target="#delete-confirmation-modal">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" class="lucide lucide-trash-2 w-4 h-4 mr-1">
									<polyline points="3 6 5 6 21 6"></polyline>
									<path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
									</path>
									<line x1="10" y1="11" x2="10" y2="17"></line>
									<line x1="14" y1="11" x2="14" y2="17"></line>
								</svg> Delete
							</a>
						</div>
					</td>
					<div id="edit-modal<?= $jj['id_jenis'] ?>" class="modal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<!-- BEGIN: Modal Header -->
								<div class="modal-header">
									<h2 class="font-medium text-base mr-auto text-center">Broadcast Message</h2>
									<div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block"
											href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i
												data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>

									</div>
								</div> <!-- END: Modal Header -->
								<!-- BEGIN: Modal Body -->
								<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
									<form action="<?= base_url('master_barang/jenis/update') ?>" method="POST">
										<input type="hidden" name="id_jenis" value="<?= $jj['id_jenis'] ?>">
										<div class="col-span-12 sm:col-span-12"> <label for="modal-form-1"
												class="form-label">Nama</label>
											<input id="modal-form-1" type="text" class="form-control"
												placeholder="example@gmail.com" name="nama_jenis" value="<?= $jj['jenis'] ?>">
										</div>

										<div class="modal-footer justify-content-flex"> <button type="button"
												data-tw-dismiss="modal"
												class="btn btn-outline-secondary w-20 mr-1">Cancel</button> <button
												type="submit" class="btn btn-primary w-20">Send</button> </div>
										<!-- END: Modal Footer -->
									</form>
								</div> <!-- END: Modal Body -->
								<!-- BEGIN: Modal Footer -->

							</div>
						</div>
					</div> <!-- END: Modal Content -->
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<!-- BEGIN: Modal Toggle -->
	<!-- END: Modal Toggle -->
	<!-- BEGIN: Modal Content -->
</div>
