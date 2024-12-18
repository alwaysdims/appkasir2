<div class="content content--top-nav">
<div class="grid grid-cols-12 gap-6 mt-5">
				<div class="row">
					<div class="col-md-12 flex items-center gap-2">
						<!-- Tombol Tambah Penjualan -->
						<a href="<?= base_url('penjualan/transaksi') ?>" class="btn btn-primary shadow-md">Expor Exel</a>
					</div>
				</div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table id="example" class="table table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="text-center whitespace-nowrap">NO</th>
                                    <th class="text-center whitespace-nowrap">Nota</th>
                                    <th class="text-center whitespace-nowrap">Nama Produk</th>
                                    <th class="text-center whitespace-nowrap">Tanggal</th>
                                    <th class="text-center whitespace-nowrap">Harga Beli</th>
                                    <th class="text-center whitespace-nowrap">Harga Jual</th>
                                    <th class="text-center whitespace-nowrap">Jumlah</th>
                                    <th class="text-center whitespace-nowrap">Total Harga</th>
                                    <th class="text-center whitespace-nowrap">Laba</th>
                                </tr>
                            </thead>
							<?php 
							
							$no = 0;
							foreach($laporan as $data):
								$no+=1;
								$laba =  $data['total_harga'] - ($data['harga_beli'] * $data['jumlah']) ;
							?>
                            <tbody>
                               
                                <tr class="intro-x">
                                    
                                    <td class="text-center">
										<?= $no ?>
									</td>
                                    <td class="text-center"><?= $data['nota'] ?></td>
                                    <td class="text-center"><?= $data['nama'] ?></td>
                                    <td class="text-center"><?= $data['tanggal'] ?></td>
                                    <td class="text-center"><?= 'Rp '. number_format($data['harga_beli'],0,',',',') ?></td>
                                    <td class="text-center"><?= 'Rp '.number_format($data['harga_jual'],0,',',',') ?></td>
                                    <td class="text-center"><?= $data['jumlah'] ?></td>
                                    <td class="text-center"><?= $data['total_harga'] ?></td>
                                    <td class="text-center"><?= 'Rp '. number_format($laba,0,',',',') ?></td>
                                </tr>
                            </tbody>
							<?php endforeach; ?>
                        </table>
                    </div>
                    <!-- END: Data List -->
                    <!-- BEGIN: Pagination -->
                    
                    <!-- END: Pagination -->
                </div>

				</div>
			
