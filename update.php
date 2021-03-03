<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JK Trans</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="judul">		
		<h1>JK Trans</h1>
		<h2>Kami Sangat Handal dan Cepat</h2>
        <h3>: D</h3>
	</div>
	
	<br/>
	
	<a href="home.php">Lihat Semua Data</a>

	<br/>
	<h3 class="judul-teks">Edit data</h3>

	<?php 
	include 'conn.php';
	$id = $_GET['id'];
	$query = mysqli_query($conn,"SELECT * FROM tb_data WHERE id='$id' ");
	while($data = mysqli_fetch_array($query)){
	?>
    <div class="forms">
        <form action="process/update-process.php" method="POST">		
            <table>
                <tr>
                    <td>SP</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" name="sp" value="<?php echo $data['sp'] ?>">
                    </td>					
                </tr>	
                <tr>
                    <td>Colli</td>
                    <td><input type="text" name="colli" value="<?php echo $data['colli'] ?>"></td>					
                </tr>	
                <tr>
                    <td>Berat</td>
                    <td><input type="text" name="berat" value="<?php echo $data['berat'] ?>"></td>					
                </tr>
                <tr>
                    <td>Franco</td>
                    <td><input type="text" name="franco" value="<?php echo $data['franco'] ?>"></td>					
                </tr>
                <tr>
                    <td>Confrankert</td>
                    <td><input type="text" name="confrankert" value="<?php echo $data['confrankert'] ?>"></td>					
                </tr>
                <tr>
                    <td>Penerima Barang</td>
                    <td><input type="text" name="penerimabarang" value="<?php echo $data['penerimabarang'] ?>"></td>					
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"></td>					
                </tr>	
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>					
                </tr>				
            </table>
        </form>
    </div>
	<?php } ?>

</body>
</html>