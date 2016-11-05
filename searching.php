<table border="1">
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Address</th>
	</tr>

<?php 
	include 'koneksi.php';
	$name = $_POST['namagw'];
	$query = "SELECT * FROM tb_student WHERE namakita like '%$name%'";
	$hasil = mysql_query($query);
	while($data=mysql_fetch_array($hasil)) {
		echo"
		<tr>
			<td>".$data['no']."</td>
			<td>".$data['namakita']."</td>
			<td>".$data['address']."</td>
		</tr>";
	}

?>
</table>
