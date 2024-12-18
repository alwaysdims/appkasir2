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
			<th>Keterangan</th>
			<th>Tanggal</th>
			<th>Username</th>
			<th>Metode</th>
			<th>Status</th>
			<th>Nominal</th>
		</tr>
	</thead>
	<?php 
							
							$no = 0;
							$totPengeluaran = 0;
							foreach($laporan as $data):
								$no+=1;
								
								$totPengeluaran += $data['nominal'];
							?>
	<tbody>

		<tr>

			<td>
				<?= $no ?>
			</td>
			<td><?= $data['keterangan'] ?></td>
			<td><?= $data['tanggal'] ?></td>
			<td><?= $data['username'] ?></td>
			<td><?= $data['metode'] ?></td>
			<td><?= $data['status'] ?></td>
			<td><?= 'Rp '.number_format($data['nominal'],0,',',',') ?></td>
		</tr>
		
		<?php endforeach; ?>
		<tr>
			<td colspan="5" style="text-align:center;">Total : </td>
			<td colspan="2" ><?= 'Rp '. number_format($totPengeluaran,0,',',',') ?> </td>
		</tr>
	</tbody>
</table>
