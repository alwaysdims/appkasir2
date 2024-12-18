<div class="content content--top-nav">
<div class="grid grid-cols-12 gap-6 mt-5">
	
	<!-- BEGIN: Data List -->
	<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
						<?= $this->session->flashdata('notif',true) ?>
						<div class=" mb-5"> 
										<a href="javascript:;" data-tw-toggle="modal"
										data-tw-target="#bayar" class="btn btn-primary">
										<i data-lucide="dollar-sign" class="w-4 h-4 mr-1"></i> Bayar
										</a>
						</div>
						<!-- BEGIN: Modal Content -->
						<div id="bayar" class="modal" tabindex="-1" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<form action="<?= base_url('pengeluaran/pembayaran') ?>" method="post">
												<!-- BEGIN: Modal Body -->
												<?php foreach($getLogCicilanHutang as $log): ?>
												<input type="hidden" name="id_pengeluaran" value="<?= $log['id_pengeluaran'] ?>" id="">
												<input type="hidden" name="id_cicilanpengeluaran" value="<?=$log['id_cicilanpengeluaran']?>" id="">
												<?php endforeach;?>
												<div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
													<div class="col-span-12 sm:col-span-12">
														<label for="modal-form-1" class="form-label text-center">Bayar
															</label>
														<input id="modal-form-1" type="number" class="form-control"
															required name="bayar" placeholder="Bayar...">
													</div>
												</div> <!-- END: Modal Body -->
											</form>
											<!-- BEGIN: Modal Footer -->
											<div class="modal-footer"> <button type="button" data-tw-dismiss="modal"
													class="btn btn-outline-secondary w-20 mr-1">Cancel</button> 
													<button type="submit" class="btn btn-primary w-20">Send</button> </div>
											<!-- END: Modal Footer -->
										</div>
									</div>
								</div> <!-- END: Modal Content -->
                        <table class="table intro-x box table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="text-center whitespace-nowrap">NO</th>
                                    <th class="text-center whitespace-nowrap">Total Harga</th>
                                    <th class="text-center whitespace-nowrap">
										Total Bayar/Angsuran
									</th>
									<th class="text-center whitespace-nowrap">Sisa Tagihan</th>
                                    <th class="text-center whitespace-nowrap">Tanggal</th>
                                    <th class="text-center whitespace-nowrap">Status</th>
                                </tr>
                            </thead>
							<?php 
							

							$no = 0;
							foreach($getLogCicilanHutang as $data):
								$no+=1;
							?>
                            <tbody>
                               
                                <tr class="intro-x">
                                    
                                    <td class="text-center">
										<?= $no ?>
									</td>
                                    <td class="text-center"><?= 'Rp '.number_format($data['nominal'],0,',',',') ?></td>
                                    <td class="text-center"><?= 'Rp '. number_format($data['tagihan'],0,',',',') ?></td>
                                    <td class="text-center"><?= 'Rp '. number_format($data['sisa_tagihan'],0,',',',') ?></td>
                                    <td class="text-center"><?= $data['tanggal'] ?></td>
									
                                    <td class="text-center">
										
									<div style="color:white;" class="btn btn-<?= ($data['status'] == 'Belum Lunas' ? 'danger' : 'success') ?>">
										<?= $data['status'] ?>
										</div>
									</td>
									
                                  
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
