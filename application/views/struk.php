<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	============================ <br>
	<?= $profil->nama ?> <br>
	<?= $profil->alamat ?> <br>
	<?= $profil->no_telp ?> <br>
	============================ <br>
	<table>
		<tr>
			<td>No. Nota</td>
			<td> : <?=$nota?></td>
		</tr>
		<tr>
			<td>Tanggal  </td>
			<td><?= $penjualan->tanggal ?></td>
		</tr>
		
	</table>
	============================ <br>
	<table>
		
		<?php foreach($detailPenjualan as $data):?>
		<tr>
			<td><?= $data['nama'] ?> x </td>
			<td><?= $data['jumlah']  ?> PCS  </td>
			<td>: <?= 'Rp '. number_format($data['harga_jual'],0,'.','.') ?></td>
			<!-- <td>Total : <?= 'Rp '. number_format($data['jumlah'] * $data['harga_jual'],0,'.','.') ?></td> -->
		</tr>
		<?php endforeach; ?>
	</table>
	============================= <br>
	<table>
		<tr>
			<td>Bayar  </td>
			<td> : <?= 'Rp '.number_format($penjualan->bayar,0,'.','.') ?></td>
		</tr>
		<tr>
			<td>Total  </td>
			<td> : <?= 'Rp '.number_format($penjualan->total_harga,0,'.','.') ?></td>
		</tr>
		<tr>
			<td>Kembalian  </td>
			<td> : <?= 'Rp '.number_format($penjualan->bayar -  $penjualan->total_harga,0,'.','.')?></td>
		</tr>
	</table>
	============================== <br>
	-------- TERIMAKASIH --------- <br>
	==============================
	 
	


</body>
</html>
