<div class="content content--top-nav">
	<?= $this->session->flashdata('notif', true) ?>
	<div class="grid grid-cols-12 gap-6 mt-10">
		<!-- Keranjang -->
		<div class="intro-y col-span-3">
			<div class="intro-y box">
				<div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
					<h2 class="font-medium text-base mr-auto">Pilih produk terlebih dahulu</h2>
				</div>
				<div class="p-5 ">
					<form id="formAddTemp" action="<?= base_url('penjualan/addtemp') ?>" method="post">
						<input type="hidden" name="kode_penjualan">
						<div class="preview">
							<div class="mt-1">
								<label>Nomor Nota</label>
								<input type="text" class="input w-full border mt-2 bg-gray-100" value="#<?= $nota ?>"
									disabled>
							</div>
							<div class="mt-5">
								<!-- Pilih Produk -->
								<label>Produk</label>
								<div class="mt-2">
									<select class="tom-select w-full" name="produk" id="produk"
										onchange="autoSubmitProduk()">
										<option value="">Pilih Produk</option>
										<?php foreach($produk as $data) { ?>
										<option value="<?= $data['kode_barang'] ?>">
											<?= $data['nama'] ?> (<?= $data['stock'] ?>)
										</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="mt-5">
								<label>Masukkan Barcode Produk</label>
								<input type="text" class="input w-full border mt-2 bg-gray-100" name="kode_barang"
									id="barcode_produk" onblur="autoSubmitProduk()" autofocus>
							</div>
						</div>
					</form>
				</div>


			</div>	
		</div>
		<!-- Tabel Produkkkkkk -->
		<div class="intro-y col-span-9">
			<div class="intro-y box">
				<table class="table border-b border-slate-200/60 dark:border-darkmode-400 text-center ">
					<thead>
						<tr>
							<th class="">#</th>
							<th class="">Kode Barang</th>
							<th class="">Produk</th>
							<th class="">Jumlah</th>
							<th class="">Harga</th>
							<th class="">Total</th>
							<th class="">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 0;
							$total_harga = 0;
							foreach($tampil as $data) {
								$no += 1;
								$jumlah = $data['harga'] * $data['jumlah'];
								$total_harga += $jumlah;
						?>
						<tr>
							<td class="border-b whitespace-no-wrap"><?= $no ?></td>
							<td class="border-b whitespace-no-wrap"><?= $data['kode_barang'] ?></td>
							<td class="border-b whitespace-no-wrap"><?= $data['nama'] ?></td>
							<td class="border-b whitespace-no-wrap">
								<form action="<?= base_url('penjualan/updateJumlahTemp/{id_temp}') ?>" method="post"
									id="form_update">
									<input type="hidden" name="id_temp" value="<?= $data['id_temp'] ?>">
									<input type="hidden" name="kode_barang" value="<?= $data['kode_barang'] ?>">
									<input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" id="jumlah"
										onchange="autoSubmit()">
								</form>
							</td>
							<td class="border-b whitespace-no-wrap"><?= $data['harga'] ?></td>
							<td class="border-b whitespace-no-wrap"><?= $jumlah ?></td>
							<td class="border-b whitespace-no-wrap">
								<a href="#"
									onclick="confirmDelete('<?= base_url('penjualan/delete/'.$data['id_temp']) ?>')"
									class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php } ?>
						<!-- Total Harga -->
						<tr>
							<td colspan="4" class="text-center">Total Harga</td>
							<td colspan="2" class="text-center">Rp. <?= $total_harga ?></td>
							<td class="text-center">-</td>
						</tr>
						<!-- Form untuk pembayaran -->
						<form id="pembayaranForm" action="<?= base_url('penjualan/prosesPembayaran') ?>" method="post"
							enctype="multipart/form-data">
							<tr>
								<!-- Input Uang Bayar -->
								<td colspan="8">
									<div>
										
									<input type="hidden" name="total_harga" id="" value="<?= $total_harga ?>">
										<input id="uang_bayar" type="number" name="uang_bayar" class="form-control"
											placeholder="Jumlah yang dibayarkan" oninput="hitungKembalian()">
									</div>
								</td>
							</tr>
							<tr>
								<!-- Input Metode Pembayaran -->
								<td colspan="8">
									<select name="metode_pembayaran" class="form-control" id="metode_pembayaran"
										onchange="toggleBuktiPembayaran()">
										<option value="Tunai">Tunai</option>
										<option value="Transfer">Transfer</option>
									</select>
								</td>
							</tr>
							<tr id="buktiPembayaranRow" style="display: none;">
								<!-- Input Bukti Pembayaran -->
								<td colspan="8">
									<div>
										<input id="bukti_pembayaran" type="file" name="bukti_pembayaran"
											class="form-control" accept="image/*" placeholder="Unggah Bukti Pembayaran">
									</div>
								</td>
							</tr>
							<tr>
								<!-- Input Kembalian -->
								<td colspan="8">
									<div>
										<input id="kembalian" name="kembalian" type="text" class="form-control" readonly
											placeholder="Kembalian atau Hutang">
									</div>
								</td>
							</tr>
							<tr>
								<!-- Tombol Submit -->
								<td colspan="8" class="text-right">
									<button type="submit" class="btn btn-primary w-full">Bayar</button>
								</td>
							</tr>
						</form>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/select2/js/select2.full.min.js"></script>
<script>
	$(function () {
		$('.select2').select2();
	});

	function confirmDelete(url) {
		Swal.fire({
			title: 'Apakah Anda yakin?',
			text: "Data yang dihapus tidak dapat dikembalikan!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, hapus!',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = url;
			}
		});
	}

	function autoSubmit() {
		document.getElementById("form_update").submit();
	}

	function autoSubmitProduk() {
		const produk = document.getElementById("produk").value;
		const barcode = document.getElementById("barcode_produk").value;

		// Pastikan salah satu dari produk atau barcode sudah diisi
		if (produk || barcode) {
			document.getElementById("formAddTemp").submit(); // Submit form otomatis
		}
	}

	function toggleBuktiPembayaran() {
        const metodePembayaran = document.getElementById('metode_pembayaran').value;
        const buktiPembayaranRow = document.getElementById('buktiPembayaranRow');

        if (metodePembayaran === 'Transfer') {
            buktiPembayaranRow.style.display = ''; // Tampilkan input bukti pembayaran
        } else {
            buktiPembayaranRow.style.display = 'none'; // Sembunyikan input bukti pembayaran
        }
    }

	function hitungKembalian() {
        const uangBayarInput = document.getElementById('uang_bayar');
        const kembalianInput = document.getElementById('kembalian');
        const totalHarga = <?= $total_harga ?>; // Ambil total harga dari PHP

        const uangBayar = parseFloat(uangBayarInput.value) || 0; // Ambil nilai uang bayar
        const selisih = uangBayar - totalHarga; // Hitung selisih

        // Format angka ke format Indonesia dengan pemisah ribuan
        const formatRupiah = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
			minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        });

        if (selisih < 0) {
            // Jika ada hutang
            kembalianInput.value = `Hutang : ${formatRupiah.format(Math.abs(selisih))}`;
            kembalianInput.style.backgroundColor = '#f8d7da'; // Warna merah muda
            kembalianInput.style.color = '#721c24'; // Warna teks merah
        } else {
            // Jika ada kembalian
            kembalianInput.value = `Kembalian : ${formatRupiah.format(selisih)}`;
            kembalianInput.style.backgroundColor = '#d4edda'; // Warna hijau muda
            kembalianInput.style.color = '#155724'; // Warna teks hijau
        }
    }

</script>
