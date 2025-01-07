<div class="content content--top-nav">
<div class="grid grid-cols-12 gap-6 mt-5">
                   
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table id="example" class="table table-report ">
                            <thead>
                                <tr>
                                    <th class="text-center whitespace-nowrap">NO</th>
                                    <th class="text-center whitespace-nowrap">Nama Produk</th>
                                    <th class="text-center whitespace-nowrap">Stock Sebelum</th>
                                    <th class="text-center whitespace-nowrap">Stock Sesudah</th>
                                    <th class="text-center whitespace-nowrap">Tanggal</th>
                                    <th class="text-center whitespace-nowrap">Username</th>
                                    <th class="text-center whitespace-nowrap">Keterangan</th>
                                </tr>
                            </thead>
							<?php 
							
							$no = 0;
							foreach($logStock as $data):
								$no+=1;
							?>
                            <tbody>
                               
                                <tr class="intro-x">
                                    
                                    <td class="text-center">
										<?= $no ?>
									</td>
                                    <td class="text-center"><?= $data['nama'] ?></td>
                                    <td class="text-center"><?= $data['jumlah_sebelum'] ?></td>
                                    <td class="text-center"><?= $data['jumlah_sesudah'] ?></td>
                                    <td class="text-center"><?= $data['tanggal'] ?></td>
                                    <td class="text-center"><?= $data['username'] ?></td>
                                    <td class="text-center"><?= $data['keterangan'] ?></td>
									
                                  
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
