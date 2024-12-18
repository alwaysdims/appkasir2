<?php  
  header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-type: application/octet-stream");
    header ("Content-Disposition: attachment; filename=LaporanPenjualan.xls");
?>

<style type="text/css">
	table,
	th,
	td {
		border-collapse: collapse;
		padding: 15px;
		margin: 10px;
		color: #000;
	}

</style>

<div style="text-align: center;">
	<span style="margin-left: 20px;font-size: 20px;"><b>Data Penjualan Dari Tanggal <?= $tanggal1 ?> Sampai <?= $tanggal2 ?></b></span>
</div>
<br>
<table border="1">
	<thead>
		<tr>
			<th>NO</th>
			<th>Nota</th>
			<th>Nama Produk</th>
			<th>Tanggal</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
			<th>Jumlah</th>
			<th>Total Harga</th>
			<th>Laba</th>
		</tr>
	</thead>
	<?php 
							
							$no = 0;
							$jumlah = 0;
							$total_harga = 0;
							$totalLaba = 0;
							foreach($laporan as $data):
								$no+=1;
								$jumlah += $data['jumlah'];
								$total_harga += $data['total_harga'];
								$laba =  $data['total_harga'] - ($data['harga_beli'] * $data['jumlah']) ;
								$totalLaba += $laba;

							?>
	<tbody>

		<tr>

			<td>
				<?= $no ?>
			</td>
			<td><?= $data['nota'] ?></td>
			<td><?= $data['nama'] ?></td>
			<td><?= $data['tanggal'] ?></td>
			<td><?= 'Rp '. number_format($data['harga_beli'],0,',',',') ?></td>
			<td><?= 'Rp '.number_format($data['harga_jual'],0,',',',') ?></td>
			<td><?= $data['jumlah'] ?></td>
			<td><?= 'Rp '.number_format($data['total_harga'],0,',',',') ?></td>
			<td><?= 'Rp '. number_format($laba,0,',',',') ?></td>
		</tr>
		
		<?php endforeach; ?>
		<tr>
			<td colspan="6" style="text-align:center;">Total : </td>
			<td ><?= $jumlah ?> </td>
			<td ><?= 'Rp '. number_format($total_harga,0,',',',') ?> </td>
			<td ><?= 'Rp '.number_format($totalLaba,0,',',',') ?> </td>
		</tr>
	</tbody>
</table>
