<?php 
	$hasil = $koneksi->prepare("SELECT * FROM artikel WHERE `id` = '".get('id')."'");
	$hasil->execute(); 
	$data = $hasil->fetch(PDO::FETCH_ASSOC); 
?> 
<form method="POST" action="proses/artikel/update.php" enctype="multipart/form-data"> 
	<input type="hidden" name="id" value="<?php echo $data['id'];?>"> 
	<table> 
		<tr> 
			<td>judul</td> 
			<td><input type="text" name="judul" value=" <?php echo $data['judul'];?>"></td> 
		</tr> 
		<tr> 
			<td>kontent</td> 
			<td><input type="text" name="kontent" value=" <?php echo $data['kontent'];?>"></td> 
		</tr> 
		<tr> 
			<td>penulis</td> 
			<td><input type="text" name="penulis" value=" <?php echo $data['penulis'];?>"></td>  
			</tr> 
			<tr> 
				<td></td> 
				<td><button type="submit">Update</button></td> 
			</tr> 
		</table> 
	</form>
