<div class="content content--top-nav">

	<?= $this->session->flashdata('notif',true) ?>
	<h2 class="intro-y text-lg font-medium mt-10">
		User
	</h2>
	<div class="grid grid-cols-12 gap-6 mt-5">
		<div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
			<!-- BEGIN: Modal Toggle -->
			<div class="text-center "> <a href="javascript:;" data-tw-toggle="modal"
					data-tw-target="#header-footer-modal-preview" class="btn btn-primary shadow-md mr-2">Add Produk</a>
			</div>
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
			<table class="table table-report -mt-2">
				<thead>
					<tr>
						<th class="whitespace-nowrap">No00000000000000</th>
						<th class="whitespace-nowrap">Nama</th>
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
							<?= $no ?>
						</td>
						<td>
							<?= $data['nama'] ?>
						</td>
						<td class="text-center">
							<?= $data['keterangan'] ?>
						</td>
						<td class="text-center">
							<?= $data['stock'] ?>
						</td>
						<td class="text-center">
							<?= $data['harga'] ?>
						</td>
						<td class="text-center">
							<?= $data['harga_beli'] ?>
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
						<td class="table-report__action w-56">
							<div class="flex justify-center items-center">
								<button class="flex items-center mr-3" data-tw-toggle="modal"
									data-tw-target="#update<?= $data['id_produk'] ?>" href="javascript:;"> <i
										data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
								</button>
								<a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
									data-tw-target="#delete<?= $data['id_produk'] ?>"> <i data-lucide="trash-2"
										class="w-4 h-4 mr-1"></i> Delete </a>
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
											<a href="<?= base_url('user/delete/'.$data['id_produk']) ?>"
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
