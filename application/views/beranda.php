<div class="content content--top-nav">
	<div class="grid grid-cols-12 gap-6 mt-5">
		<div class="col-span-12 sm:col-span-6	 xl:col-span-3 intro-y">
			<div class="report-box zoom-in">
				<div class="box p-5 ">
					<div class="flex items-center">
						<!-- Container utama dengan Flexbox dan alignment -->
						<!-- Ikon keranjang belanja -->
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							icon-name="shopping-cart" data-lucide="shopping-cart"
							class="lucide lucide-shopping-cart report-box__icon text-primary mt-3">
							<!-- Roda keranjang -->
							<circle cx="9" cy="21" r="1"></circle>
							<circle cx="20" cy="21" r="1"></circle>
							<!-- Badan keranjang -->
							<path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"></path>
						</svg>
						<!-- Informasi jumlah -->
						<div class="ml-auto">
							<!-- Membuat konten berada di sebelah kanan -->
							<div class="text-3xl font-medium leading-8 mt-3 mb-3">
								<?= "Rp " . number_format($penjualan_hari_ini, 0, ',', '.') ?>
							</div>
						</div>
					</div>

					<div class="text-base text-slate-500 mt-3 text-left">Penjualan Hari Ini</div>
				</div>
			</div>
		</div>
		<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
			<div class="report-box zoom-in">
				<div class="box p-5 ">
					<div class="flex items-center">
						<!-- Container utama dengan Flexbox dan alignment -->
						<!-- Ikon keranjang belanja -->
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							icon-name="shopping-cart" data-lucide="shopping-cart"
							class="lucide lucide-shopping-cart report-box__icon text-primary mt-3">
							<!-- Roda keranjang -->
							<circle cx="9" cy="21" r="1"></circle>
							<circle cx="20" cy="21" r="1"></circle>
							<!-- Badan keranjang -->
							<path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"></path>
						</svg>
						<!-- Informasi jumlah -->
						<div class="ml-auto">
							<!-- Membuat konten berada di sebelah kanan -->
							<div class="text-3xl font-medium leading-8 mt-3 mb-3">
								<?= "Rp " . number_format($penjualanBulanan , 0, ',', '.') ?>
							</div>
						</div>
					</div>

					<div class="text-base text-slate-500 mt-3 text-left">Penjualan Bulan Ini</div>
				</div>
			</div>
		</div>
		<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
			<div class="report-box zoom-in">
				<div class="box p-5 ">
					<div class="flex items-center">
						<!-- Container utama dengan Flexbox dan alignment -->
						<!-- Ikon keranjang belanja -->
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							icon-name="shopping-cart" data-lucide="shopping-cart"
							class="lucide lucide-shopping-cart report-box__icon text-primary mt-3">
							<!-- Roda keranjang -->
							<circle cx="9" cy="21" r="1"></circle>
							<circle cx="20" cy="21" r="1"></circle>
							<!-- Badan keranjang -->
							<path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"></path>
						</svg>
						<!-- Informasi jumlah -->
						<div class="ml-auto">
							<!-- Membuat konten berada di sebelah kanan -->
							<div class="text-3xl font-medium leading-8 mt-3 mb-3">
								<?= "Rp " . number_format($totalPengeluaranBulanan , 0, ',', '.') ?>
							</div>
						</div>
					</div>

					<div class="text-base text-slate-500 mt-3 text-left">Pengeluaran Bulan Ini</div>
				</div>
			</div>
		</div>
		<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
			<div class="report-box zoom-in">
				<div class="box p-5 ">
					<div class="flex items-center">
						<!-- Container utama dengan Flexbox dan alignment -->
						<!-- Ikon keranjang belanja -->
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							icon-name="monitor" data-lucide="monitor"
							class="lucide lucide-monitor report-box__icon text-warning">
							<rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
							<line x1="8" y1="21" x2="16" y2="21"></line>
							<line x1="12" y1="17" x2="12" y2="21"></line>
						</svg>
						<!-- Informasi jumlah -->
						<div class="ml-auto">
							<!-- Membuat konten berada di sebelah kanan -->
							<div class="text-3xl font-medium leading-8 mt-3 mb-3">
								<?= $total ?>
							</div>
						</div>
					</div>

					<div class="text-base text-slate-500 mt-3 text-left">Total Produk</div>
				</div>
			</div>
		</div>
	
	</div>
	<div class="grid grid-cols-12 gap-6 mt-5">
		<div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y mt-3">
			<h2 class="text-lg text-center mb-2 font-medium truncate mr-5">			
				<!-- Weekly Best Sellers -->
			</h2>
			<?php 
				foreach($dataPenjualan as $row):
			?>
				<a href="<?= base_url('penjualan/invoice/'.$row['nota']) ?>">
				<div class="intro-y">
					<div class="box px-4 py-4 mb-3 flex items-center zoom-in">
						<div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
						<i data-lucide="truck" class="w-10 h-10"></i>
						</div>
						<div class="ml-4 mr-auto">
							<div class="font-medium">#<?= $row['nota'] ?></div>
							<div class="text-slate-500 text-xs mt-0.5">
								<?php 
								$tanggal = $row['tanggal'];
								echo(new DateTime($tanggal))->format('l, d F Y')
								?>
							</div>
						</div>
						<div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
							<?= 'Rp '.number_format( $row['total_harga'],0,',',',' )?>
						</div>
					</div>
				</div>
				</a>
			<?php endforeach; ?>
			<a href="<?= base_url('penjualan') ?>"
				class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View
				More</a>
		</div>
		<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-3">
			<h2 class="text-lg text-center mb-2 font-medium truncate mr-5">			
				<!-- Weekly Best Sellers -->
			</h2>
			<?php 
			foreach($getDataPengeluaran as $rowPengeluaran):
			?>
			<div class="intro-y">
				<div class="box px-4 py-4 mb-3 flex items-center zoom-in">
					<div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
						<img alt="Midone - HTML Admin Template" src="dist/images/profile-9.jpg">
					</div>
					<div class="ml-4 mr-auto">
						<div class="font-medium"><?= 'Rp. '. number_format( $rowPengeluaran['nominal'],0,',',',') ?></div>
						<div class="text-slate-500 text-xs mt-0.5"><?= $rowPengeluaran['tanggal'] ?></div>
					</div>
					<div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137
						Sales</div>
				</div>
			</div>
			<?php endforeach; ?>
			
			<a href=""
				class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View
				More</a>
		</div>
		<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-3">
			<h2 class="text-lg text-center mb-2 font-medium truncate mr-5">			
				<!-- Weekly Best Sellers -->
			</h2>
			<?php
			foreach($dataProduk as $data):
			?>
			<div class="intro-y">
				<div class="box px-4 py-4 mb-3 flex items-center zoom-in">
					<div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
						<i data-lucide="box" class="w-10 h-10"></i>
					</div>
					<div class="ml-4 mr-auto">
						<div class="font-medium"><?= $data['nama'] ?></div>
						<div class="text-slate-500 text-xs mt-0.5"><?= "Rp ".number_format($data['harga'],0,',', '.' ) ?></div>
					</div>
					<div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium"><?= $data['stock'] ?>
						Stock</div>
				</div>
			</div>
			<?php endforeach; ?>
			
			<a href=""
				class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View
				More</a>
		</div>

	</div>
</div>
