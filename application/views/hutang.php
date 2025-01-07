<div class="content content--top-nav">

	<?= $this->session->flashdata('notif',true) ?>
	<div class="grid grid-cols-12 gap-6 mt-5">
		<div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">

		</div>
		<!-- BEGIN: Data List -->
		<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">




			<table id="example" class="table table-auto w-full">
				<thead>
				
					<tr>
						<th class="px-4 py-2 text-center whitespace-nowrap">No</th>
						<th class="px-4 py-2 text-center whitespace-nowrap">Nota</th>
						<th class="px-4 py-2 text-center whitespace-nowrap">Tagihan</th>
						<th class="px-4 py-2 text-center whitespace-nowrap">Status</th>
						<th class="px-4 py-2 text-center whitespace-nowrap">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php 
							
							$no = 0;
							foreach($dataHutang as $data){
								$no+=1;
							
							?>
					<tr>
						<td class="px-4 py-2 text-center"><?= $no ?></td>
						<td style="color:blue;" class="px-4 py-2 text-center"><a href="<?= base_url('penjualan/invoice/'. $data['nota']) ?>">#<?= $data['nota'] ?></a></td>
						<td class="px-4 py-2 text-center"><?= "Rp " . number_format($data['tagihan'], 0, ',', '.') ?></td>
						<td class="px-4 py-2 text-center" <?=($data['status'] == 'Belum Lunas' ? 'style="color:red;"' : 'style="color:green;"')?>><?= $data['status'] ?></td>
						<td class="px-4 py-2 text-center table-report__action w-56"  >
							<div class="flex justify-center items-center ">
								<?php 
								// Ambil data hutang berdasarkan nota tertentu
								$nota = $data['nota']; // Ganti dengan nota yang sesuai konteks
								$this->db->select('status')->from('hutang')->where('nota', $nota);
								$dataHutang = $this->db->get()->row();

								// Cek status dan tampilkan tombol sesuai kondisi
								if ($dataHutang && $dataHutang->status == 'Belum Lunas') {
									echo ('<div class="mt-5 mb-5"> 
										<a href="javascript:;" data-tw-toggle="modal"
										data-tw-target="#bayar' . $nota . '" class="btn btn-primary">
										<i data-lucide="dollar-sign" class="w-4 h-4 mr-1"></i> Bayar
										</a>
									</div>');
								} else {
									echo ('<div class="mt-5 mb-5"> 
										<a href="javascript:;" class="btn btn-primary">
										<i data-lucide="coffee" class="w-4 h-4 mr-1"></i> Lunas
										</a>
									</div>');
								}
								?>

								<div class="mt-5 ml-5 mb-5">
									<a href="<?= base_url('hutang/log_hutang/'.$data['nota']) ?>"
										class="btn btn-primary">
										<i data-lucide="zoom-in" class="w-4 h-4 mr-1"></i> Detail
									</a>
								</div>

								<!-- END: Modal Toggle -->
								<!-- BEGIN: Modal Content -->
								<div id="bayar<?= $data['nota'] ?>" class="modal" tabindex="-1" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<form action="<?= base_url('hutang/pembayaran') ?>" method="post">
												<!-- BEGIN: Modal Body -->
												<input type="hidden" name="nota" id="" value="<?= $data['nota'] ?>">
												<input type="hidden" name="id_produk" value="<?= $data['id_produk'] ?>"
													id="">
												<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
													<div class="col-span-12 sm:col-span-12">
														<label for="modal-form-1" class="form-label text-center">NOTA
															#<?= $data['nota'] ?></label>
														<input id="modal-form-1" type="number" class="form-control"
															required name="bayar" placeholder="Bayar...">
													</div>
												</div> <!-- END: Modal Body -->
											</form>
											<!-- BEGIN: Modal Footer -->
											<div class="modal-footer"> <button type="button" data-tw-dismiss="modal"
													class="btn btn-outline-secondary w-20 mr-1">Cancel</button> <button
													type="submit" class="btn btn-primary w-20">Send</button> </div>
											<!-- END: Modal Footer -->
										</div>
									</div>
								</div> <!-- END: Modal Content -->
							</div>
						</td>
						
					</tr>

					<?php } ?>
					<!-- Add more rows as needed -->
				</tbody>
			</table>






		
		</div>
		<!-- END: Data List -->

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
