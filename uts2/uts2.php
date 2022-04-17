<?php

$provinsi = 
	[
		["no"=>"1", "prov"=>"Jawa Timur", "kab"=>"Surabaya", "kec"=>"Jambangan",],
		["no"=>"2", "prov"=>"Jawa Timur", "kab"=>"Surabaya", "kec"=>"Wonokromo",],
		["no"=>"3", "prov"=>"Jawa Timur", "kab"=>"Sidoarjo", "kec"=>"Taman",],
		["no"=>"4", "prov"=>"Jawa Timur", "kab"=>"Sidoarjo", "kec"=>"Waru",],
		["no"=>"5", "prov"=>"Jawa Tengah", "kab"=>"Semarang", "kec"=>"Kecamatan 1",],
		["no"=>"6", "prov"=>"Jawa Tengah", "kab"=>"Semarang", "kec"=>"Kecamatan 2",],
		["no"=>"7", "prov"=>"Jawa Tengah", "kab"=>"Solo", "kec"=>"Kecamatan 1",],
		["no"=>"8", "prov"=>"Jawa Tengah", "kab"=>"Solo", "kec"=>"Kecamatan 2",],
	];
?>

<html>

<head>
	<title>Data Daerah</title>
</head>
<body>
	<br>
	<table border="2" cellpadding="10" cellspacing="0" align="center">
		<th>No</th>
		<th>Nama Provinsi</th>
		<th>Nama Kabupaten</th>
		<th>Kecamatan</th>
	<?php foreach ($provinsi as $pv) : ?>
		<tr>
		<td><?php echo $pv["no"]; ?></td> 
		<td><?php echo $pv["prov"]; ?></td> 
		<td><?php echo $pv["kab"]; ?></td> 
		<td><?php echo $pv["kec"]; ?></td> 
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>



