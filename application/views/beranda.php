<div class="content content--top-nav">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
	<div class="col-span-12 intro-x">
		<div id="blank-modal" class="p-5">
			<div class="preview">
				<!-- BEGIN: Modal Toggle -->
				<div class="row">
					<div class="col-md-12 flex items-center gap-2">
						<!-- Tombol Tambah Penjualan -->
						<a href="<?= base_url('penjualan/transaksi') ?>" class="btn btn-primary shadow-md">Tambah
							Penjualan</a>

						<!-- Tombol Laporan Penjualan -->
						<a href="javascript:;" data-tw-toggle="modal" data-tw-target="#penjualan"
							class="btn btn-primary text-right">Laporan Penjualan</a>
						<a href="javascript:;" data-tw-toggle="modal" data-tw-target="#Pengeluaran"
							class="btn btn-primary text-right">Laporan Pengeluaraan</a>
					</div>
				</div>

				<!-- BEGIN: Modal Content -->
				<div id="penjualan" class="modal" tabindex="-1" aria-hidden="true" style="">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body p-10 text-center">
								<h1 class="mb-2 text-left">Cetak Laporan Penjualan ke-Exel</h1>
								<form action="<?= base_url('penjualan/exporToExel') ?>" method="post" class="">
									<input type="date" class="form-control mb-3" name="tgl1" required>
									<input type="date" class="form-control mb-3" name="tgl2" required>
									<button type="submit" class="btn btn-primary">Expor Excel</button>
								</form>


							</div>
						</div>
					</div>
				</div>
				<!-- END: Modal Content -->
				<!-- BEGIN: Modal Content -->
				<div id="Pengeluaran" class="modal" tabindex="-1" aria-hidden="true" style="">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body p-10 text-center">
								<h1 class="mb-2 text-left">Cetak Laporan Pengeluaran ke-Exel</h1>
								<form action="<?= base_url('pengeluaran/exporToExel') ?>" method="post" class="">
									<input type="date" class="form-control mb-3" name="tgl1" required>
									<input type="date" class="form-control mb-3" name="tgl2" required>
									<button type="submit" class="btn btn-primary">Expor Excel</button>
								</form>


							</div>
						</div>
					</div>
				</div>
				<!-- END: Modal Content -->
			</div>
			<div class="source-code hidden">
				<button data-target="#copy-blank-modal" class="copy-code btn py-1 px-2 btn-outline-secondary"> <svg
						xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
						stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
						icon-name="file" data-lucide="file" class="lucide lucide-file w-4 h-4 mr-2">
						<path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
						<polyline points="14 2 14 8 20 8"></polyline>
					</svg> Copy example code </button>
				<div class="overflow-y-auto mt-3 rounded-md">
					<pre id="copy-blank-modal"
						class="source-preview"> <code class="html hljs xml"> <span class="hljs-comment">&lt;!-- BEGIN: Modal Toggle --&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-center"</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"javascript:;"</span> <span class="hljs-attr">data-tw-toggle</span>=<span class="hljs-string">"modal"</span> <span class="hljs-attr">data-tw-target</span>=<span class="hljs-string">"#basic-modal-preview"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"btn btn-primary"</span>&gt;</span>Show Modal<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span> <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> <span class="hljs-comment">&lt;!-- END: Modal Toggle --&gt;</span>
					<span class="hljs-comment">&lt;!-- BEGIN: Modal Content --&gt;</span>
					<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"basic-modal-preview"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"modal"</span> <span class="hljs-attr">tabindex</span>=<span class="hljs-string">"-1"</span> <span class="hljs-attr">aria-hidden</span>=<span class="hljs-string">"true"</span>&gt;</span>
						<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"modal-dialog"</span>&gt;</span>
							<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"modal-content"</span>&gt;</span>
								<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"modal-body p-10 text-center"</span>&gt;</span> This is totally awesome blank modal! <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
							<span class="hl	js-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
						<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
					<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> <span class="hljs-comment">&lt;!-- END: Modal Content --&gt;</span></code> <textarea class="absolute w-0 h-0 p-0"></textarea></pre>
				</div>
			</div>
		</div>
	</div>
	<div class="grid grid-cols-12 gap-6 mt-1">
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

		<div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y mt-5">
			<style>
				.group:hover .group-hover\:block {
					display: block;
				}

				.line-horizontal {
					border-top: 1px solid #e5e7eb;
					/* Warna garis horizontal */
					position: absolute;
					width: 100%;
				}

				.line-vertical {
					border-left: 1px solid #e5e7eb;
					/* Warna garis vertikal */
					position: absolute;
					height: 100%;
					top: 0;
				}

			</style>
			<!-- Component Start -->
			<?php
        // Inisialisasi variabel untuk setiap bulan
        $data_penjualan = [];
        for ($i = 1; $i <= 12; $i++) {
            $bulan = date('Y') . '-' . str_pad($i, 2, '0', STR_PAD_LEFT);

            // Query untuk mengambil total penjualan berdasarkan bulan
            $this->db->select('total_harga');
            $this->db->from('penjualan');
            $this->db->like('tanggal', $bulan, 'after'); // Filter berdasarkan bulan
            $query = $this->db->get();

            // Menghitung total penjualan untuk bulan ini
            $totalBulanIni = 0;
            foreach ($query->result() as $penjualan) {
                $totalBulanIni += $penjualan->total_harga;
            }

            // Menyimpan total penjualan ke array
            $data_penjualan[$i] = $totalBulanIni;
        }

	        // Menentukan tinggi maksimum grafik
			$max_penjualan = max($data_penjualan);
			$max_height = 200; // Tinggi maksimum grafik dalam pixel
			$bulan_nama = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

			$totaldata = ['0','100000','300000','500000','700000','900000','1100000','1300000','1500000'];

			// Array warna untuk setiap bulan
			$colors = ['bg-gray-400', 'bg-red-400', 'bg-yellow-400', 'bg-green-400', 'bg-blue-400', 'bg-indigo-400', 'bg-purple-400', 'bg-pink-400', 'bg-teal-400']; 
   		?>
			<div
				class="flex flex-col items-center w-full max-w-screen-md p-6 pb-6 bg-white rounded-lg shadow-xl sm:p-8 relative">
				<h2 class="text-xl font-bold">Grafik Penjualan</h2>
				<span class="text-sm font-semibold text-gray-500"><?= date('Y') ?></span>
				<div class="flex w-full mt-2 relative">
					<!-- Sisi kiri untuk $totaldata -->
					<div class="flex flex-col justify-between h-[<?= $max_height + 20 ?>px] mr-3 relative">
						<?php foreach (array_reverse($totaldata) as $index => $value): ?>
						<!-- Garis horizontal -->
						<div class="line-horizontal"
							style="top: <?= ($index / (count($totaldata) - 1)) * $max_height ?>px;"></div>

						<!-- Label nilai -->
						<span class="text-xs font-bold text-gray-500"><?= number_format($value, 0, ',', '.') ?></span>
						<?php endforeach; ?>
						<div class="line-vertical" style="left: 102%;"></div>
					</div>
					<!-- Diagram grafik -->
					<div class="flex items-end flex-grow space-x-2 sm:space-x-3 relative">
						<?php foreach ($data_penjualan as $index => $penjualan): 
                    // Menghitung tinggi dinamis berdasarkan penjualan bulan
                    $height = $penjualan > 0 ? ($penjualan / $max_penjualan) * $max_height : 0;
                    // Menentukan warna berdasarkan bulan
                    $color = $colors[($index - 1) % count($colors)];
					?>
						<div class="relative flex flex-col items-center flex-grow pb-5 group">
							<!-- Garis vertikal -->
							<div class="line-vertical" style="left: 50%;"></div>
							<!-- Menampilkan nilai penjualan saat hover -->
							<span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">
								<?= number_format($penjualan, 0, ',', '.') ?>
							</span>
							<!-- Grafik dinamis dengan warna berbeda -->
							<div class="relative flex justify-center w-full <?= $color ?>"
								style="height: <?= $height ?>px;">
							</div>
							<!-- Nama bulan -->
							<span class="absolute bottom-0 text-xs font-bold">
								<?= $bulan_nama[$index - 1] ?>
							</span>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>


		<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-3">
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
						<!-- <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
							<?= 'Rp '.number_format( $row['total_harga'],0,',',',' )?>
						</div> -->
					</div>
				</div>
			</a>
			<?php endforeach; ?>
			<a href="<?= base_url('penjualan') ?>"
				class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View
				More</a>
		</div>
		<!-- <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-3">
			<h2 class="text-lg text-center mb-2 font-medium truncate mr-5">
				Weekly Best Sellers 
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
						<div class="font-medium"><?= 'Rp. '. number_format( $rowPengeluaran['nominal'],0,',',',') ?>
						</div>
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
		</div> -->
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
						<div class="text-slate-500 text-xs mt-0.5">
							<?= "Rp ".number_format($data['harga'],0,',', '.' ) ?></div>
					</div>
					<div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
						<?= $data['stock'] ?>
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
