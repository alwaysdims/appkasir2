<div class="content content--top-nav">
<div class="grid grid-cols-12 gap-6 mt-5">
                   
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="text-center whitespace-nowrap">NO</th>
                                    <th class="text-center whitespace-nowrap">Nota</th>
                                    <th class="text-center whitespace-nowrap">Angsuran</th>
                                    <th class="text-center whitespace-nowrap">Tagihan</th>
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
                                    <td style="color:blue;" class="text-center">#<?= $data['nota'] ?></td>
                                    <td class="text-center"><?= 'Rp '. number_format($data['nominal'],0,',','.') ?></td>
                                    <td class="text-center"><?= 'Rp '.number_format($data['tagihanHutang'],0,',',',') ?></td>
                                    <td class="text-center"><?= $data['tanggal'] ?></td>
                                    <td class="text-center"><?= $data['status'] ?></td>
									
                                  
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
			
