<div class="content content--top-nav">

	<?= $this->session->flashdata('notif',true) ?>
	<div class="grid grid-cols-12 gap-6 mt-5">
		<div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
			<!-- BEGIN: Modal Toggle -->
			<?php 
			$data = $this->session->userdata('role');
			if($data == 'Admin'){ 
			?>
			<div class="text-center "> <a href="javascript:;" data-tw-toggle="modal"
					data-tw-target="#header-footer-modal-preview" class="btn btn-primary shadow-md mr-2">Add Produk</a>
			</div>
			<?php }?>
			<!-- END: Modal Toggle -->
			<!-- BEGIN: Modal Content -->
			<div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- BEGIN: Modal Header -->
						<div class="modal-header">
							<h2 class="font-medium text-base mr-auto text-center">Add New Produk</h2>
						</div> <!-- END: Modal Header -->
						<!-- BEGIN: Modal Body -->
						<form action="<?= base_url('produk/simpan') ?>" method="post">
							<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-1"
										class="form-label">Nama</label> <input id="modal-form-1" type="text"
										class="form-control" placeholder="Masukkan nama produk" name="nama"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-2"
										class="form-label">keterangan</label> <input id="modal-form-2" type="text"
										class="form-control" placeholder="Masukkan keterangan produk" name="keterangan">
								</div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
										class="form-label">Stock</label> <input id="modal-form-3" type="number"
										class="form-control" placeholder="Masukkan stock" name="stock"> </div>
										<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
												class="form-label">Harga Beli</label> <input id="modal-form-3" type="number"
												class="form-control" placeholder="Masukkan harga" name="harga_beli"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
										class="form-label">Harga Jual</label> <input id="modal-form-3" type="number"
										class="form-control" placeholder="Masukkan harga" name="harga"> </div>
								<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
										class="form-label">Kode barang</label> <input id="modal-form-3" type="text"
										class="form-control" placeholder="Masukkan kode barang" name="kode_barang">
								</div>

								<div class="col-span-12 sm:col-span-6"> <label for="modal-form-6"
										class="form-label">Jenis</label> <select id="modal-form-6" class="form-select"
										name="jenis">
										<?php foreach ($jenis as $kat): ?>
										<option value="<?= $kat['id_jenis']?>"><?= $kat['jenis'] ?></option>
										<?php endforeach; ?>
									</select> </div>

								<div class="col-span-12 sm:col-span-6"> <label for="modal-form-6"
										class="form-label">Model</label> <select id="modal-form-6" class="form-select"
										name="model">
										<?php foreach ($model as $kat): ?>
										<option value="<?= $kat['id_model']?>"><?= $kat['model'] ?></option>
										<?php endforeach; ?>
									</select> </div>

								<div class="col-span-12 sm:col-span-6"> <label for="modal-form-6"
										class="form-label">Bahan</label> <select id="modal-form-6" class="form-select"
										name="bahan">
										<?php foreach ($bahan as $kat): ?>
										<option value="<?= $kat['id_bahan']?>"><?= $kat['bahan'] ?></option>
										<?php endforeach; ?>
									</select> </div>

								<div class="col-span-12 sm:col-span-6"> <label for="modal-form-6"
										class="form-label">Warna</label> <select id="modal-form-6" class="form-select"
										name="warna">
										<?php foreach ($warna as $kat): ?>
										<option value="<?= $kat['id_warna']?>"><?= $kat['warna'] ?></option>
										<?php endforeach; ?>
									</select> </div>

								<div class="col-span-12 sm:col-span-6"> <label for="modal-form-6"
										class="form-label">Size</label> <select id="modal-form-6" class="form-select"
										name="size">
										<?php foreach ($size as $kat): ?>
										<option value="<?= $kat['id_size']?>"><?= $kat['size'] ?></option>
										<?php endforeach; ?>
									</select> </div>
								<div class="col-span-12 sm:col-span-6"> <label for="modal-form-6"
										class="form-label">lengan</label> <select id="modal-form-6" class="form-select"
										name="lengan">
										<?php foreach ($lengan as $kat): ?>
										<option value="<?= $kat['id_lengan']?>"><?= $kat['lengan'] ?></option>
										<?php endforeach; ?>
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
			<table id="example" class="table table-report -mt-2">
				<thead>
					<tr>
						<th class="whitespace-nowrap">No</th>
						<th class="whitespace-nowrap text-center">Nama</th>
						<th class="text-center whitespace-nowrap">keterangan</th>
						<th class="text-center whitespace-nowrap">stock</th>
						<th class="text-center whitespace-nowrap">harga beli</th>
						<th class="text-center whitespace-nowrap">harga jual</th>
						<th class="text-center whitespace-nowrap">kode barang</th>
						<th class="text-center whitespace-nowrap">model</th>
						<th class="text-center whitespace-nowrap">size</th>
						<th class="text-center whitespace-nowrap">bahan</th>
						<th class="text-center whitespace-nowrap">warna</th>
						<th class="text-center whitespace-nowrap">jenis</th>
						<th class="text-center whitespace-nowrap">lengan</th>
						<th class="text-center whitespace-nowrap">ACTIONS</th>
					</tr>
				</thead>
				<tbody >
					<?php 
					$no = 0;
					foreach($produk as $data){
						$no +=1;
					
					?>
					<tr class="intro-x text-sm">

						<td>
							<?= $no ?>.
						</td>
						<td class="text-center">
							<?= $data['nama'] ?>
						</td>
						<td class="text-center">
							<?= $data['keterangan'] ?>
						</td>
						<td class="text-center">
							<?= $data['stock'] ?>
						</td>
						<td class="text-center">
							<?= 'Rp. '.number_format($data['harga'],0,',','.') ?>
						</td>
						<td class="text-center">
							<?= 'Rp. '. number_format($data['harga_beli'],0,',','.') ?>
						</td>
						<td class="text-center">
							<?= $data['kode_barang'] ?>
						</td>
						<td class="text-center">
							<?= $data['model'] ?>
						</td>
						<td class="text-center">
							<?= $data['size'] ?>
						</td>
						<td class="text-center">
							<?= $data['bahan'] ?>
						</td>
						<td class="text-center">
							<?= $data['warna'] ?>
						</td>
						<td class="text-center">
							<?= $data['jenis'] ?>
						</td>
						<td class="text-center">
							<?= $data['lengan'] ?>
						</td>
						<td class="table-report__action">
							<div class="flex justify-center items-center">
								<button class="flex items-center mr-3" data-tw-toggle="modal"
									data-tw-target="#update<?= $data['id_produk'] ?>" href="javascript:;"> <i
										data-lucide="check-square" class="w-5 h-5 mr-1"></i>
								</button>
								<a class="flex items-center text-danger mr-3" href="javascript:;" data-tw-toggle="modal"
									data-tw-target="#delete<?= $data['id_produk'] ?>"> <i data-lucide="trash-2"
										class="w-5 h-5 mr-1"></i></a>
								<a class="flex items-center" href="<?= base_url('produk/logStock/'.$data['id_produk']) ?>"> <i data-lucide="zoom-in"
										class="w-5 h-5 mr-1"></i></a>
							</div>
						</td>
						<!-- BEGIN: Modal Content -->
						<div id="update<?= $data['id_produk'] ?>" class="modal" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<!-- BEGIN: Modal Header -->
									<div class="modal-header">
										<h2 class="font-medium text-base mr-auto text-center">Update Data</h2>
									</div> <!-- END: Modal Header -->
									<!-- BEGIN: Modal Body -->
									<form action="<?= base_url('produk/update') ?>" method="post">
										<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
											<input type="hidden" name="id_produk" id=""
												value="<?= $data['id_produk']?>">
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-1"
													class="form-label">Nama</label> <input id="modal-form-1" type="text"
													class="form-control" placeholder="Masukkan nama produk" name="nama"
													value="<?= $data['nama']?>">
											</div>
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-2"
													class="form-label">keterangan</label> <input id="modal-form-2"
													type="text" class="form-control"
													placeholder="Masukkan keterangan produk" name="keterangan"
													value="<?= $data['keterangan']?>"> </div>
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
													class="form-label">Stock</label> <input id="modal-form-3"
													type="number" class="form-control" placeholder="Masukkan stock"
													name="stock" value="<?= $data['stock']?>"> </div>
													<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
															class="form-label">Harga Beli</label> <input id="modal-form-3"
															type="number" class="form-control" placeholder="Masukkan harga"
															name="harga_beli" value="<?= $data['harga_beli']?>"> </div>
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
													class="form-label">Harga Jual</label> <input id="modal-form-3"
													type="number" class="form-control" placeholder="Masukkan harga"
													name="harga" value="<?= $data['harga']?>"> </div>
											<div class="col-span-12 sm:col-span-12"> <label for="modal-form-3"
													class="form-label">Kode barang</label> <input id="modal-form-3"
													type="text" class="form-control" placeholder="Masukkan kode barang"
													name="kode_barang" value="<?= $data['kode_barang']?>"> </div>

											<div class="col-span-12 sm:col-span-6">
												<label for="modal-form-6" class="form-label">Jenis</label>
												<select id="modal-form-6" class="form-select" name="jenis">
													<?php foreach ($jenis as $kat): ?>
													<option value="<?= $kat['id_jenis'] ?>"
														<?= ($kat['id_jenis'] == $data['id_jenis']) ? 'selected' : '' ?>>
														<?= $kat['jenis'] ?>
													</option>
													<?php endforeach; ?>
												</select>
											</div>

											<div class="col-span-12 sm:col-span-6">
												<label for="modal-form-6" class="form-label">Model</label>
												<select id="modal-form-6" class="form-select" name="model">
													<?php foreach ($model as $kat): ?>
													<option value="<?= $kat['id_model'] ?>"
														<?= ($kat['id_model'] == $data['id_model']) ? 'selected' : '' ?>>
														<?= $kat['model'] ?>
													</option>
													<?php endforeach; ?>
												</select>
											</div>

											<div class="col-span-12 sm:col-span-6">
												<label for="modal-form-6" class="form-label">Bahan</label>
												<select id="modal-form-6" class="form-select" name="bahan">
													<?php foreach ($bahan as $kat): ?>
													<option value="<?= $kat['id_bahan'] ?>"
														<?= ($kat['id_bahan'] == $data['id_bahan']) ? 'selected' : '' ?>>
														<?= $kat['bahan'] ?>
													</option>
													<?php endforeach; ?>
												</select>
											</div>

											<div class="col-span-12 sm:col-span-6">
												<label for="modal-form-6" class="form-label">Warna</label>
												<select id="modal-form-6" class="form-select" name="warna">
													<?php foreach ($warna as $kat): ?>
													<option value="<?= $kat['id_warna'] ?>"
														<?= ($kat['id_warna'] == $data['id_warna']) ? 'selected' : '' ?>>
														<?= $kat['warna'] ?>
													</option>
													<?php endforeach; ?>
												</select>
											</div>

											<div class="col-span-12 sm:col-span-6">
												<label for="modal-form-6" class="form-label">Size</label>
												<select id="modal-form-6" class="form-select" name="size">
													<?php foreach ($size as $kat): ?>
													<option value="<?= $kat['id_size'] ?>"
														<?= ($kat['id_size'] == $data['id_size']) ? 'selected' : '' ?>>
														<?= $kat['size'] ?>
													</option>
													<?php endforeach; ?>
												</select>
											</div>

											<div class="col-span-12 sm:col-span-6">
												<label for="modal-form-6" class="form-label">Lengan</label>
												<select id="modal-form-6" class="form-select" name="lengan">
													<?php foreach ($lengan as $kat): ?>
													<option value="<?= $kat['id_lengan'] ?>"
														<?= ($kat['id_lengan'] == $data['id_lengan']) ? 'selected' : '' ?>>
														<?= $kat['lengan'] ?>
													</option>
													<?php endforeach; ?>
												</select>
											</div>

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
						<div id="delete<?= $data['id_produk'] ?>" class="modal" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body p-0">
										<div class="p-5 text-center">
											<i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
											<div class="text-3xl mt-5">Apakah Anda Yakin?</div>
											<div class="text-slate-500 mt-2">
												Ingin Menghapus data dengan nama : <?= $data['nama'] ?>
												<br>

											</div>
										</div>
										<div class="px-5 pb-8 text-center">
											<button type="button" data-tw-dismiss="modal"
												class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
											<a href="<?= base_url('produk/delete/'.$data['id_produk']) ?>"
												class="btn btn-danger w-24">Delete</a>
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


</div>
