<?php

$buku = [["judul"=>"Pemrograman Web dengan Laravel", "pengarang"=>"Budi Sutejo", "tahun"=>2019],
		 ["judul"=>"Belajar Mandiri Python", "pengarang"=>"Ahmad Arifin", "tahun"=>2010],
		 ["judul"=>"Microsoft Word untuk Penulisan Ilmiah", "pengarang"=>"Edi Rahmadi", "tahun"=>2015],
		];
?>

<html>

<head>
	<title>Data Buku</title>
</head>
<body>
	<br>
	<table border="2" cellpadding="10" cellspacing="0" align="center">
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Tahun</th>
	<?php foreach ($buku as $bk) : ?>
		<tr>
		<td><?php echo $bk["judul"]; ?></td> 
		<td><?php echo $bk["pengarang"]; ?></td> 
		<td><?php echo $bk["tahun"]; ?></td> 
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>



