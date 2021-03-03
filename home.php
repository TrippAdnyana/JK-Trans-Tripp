<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>JK Trans</title>
</head>
<body>
    <div class="judul">
        <h1>JK Trans</h1>
        <h2>Kami Sangat Handal dan Cepat</h2>
        <h3>: D</h3>
    </div>
	<br/>

	<br/>

    <h3 class="judul-teks">Data user</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>SP</th>
            <th>Colli</th>
            <th>Berat</th>
            <th>Franco</th>
            <th>Confrankert</th>
            <th>Penerima Barang</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        <?php 
        include 'conn.php';
        $query = mysqli_query($conn, "SELECT * FROM tb_data");
        $no = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['sp']; ?></td>
            <td><?php echo $data['colli']; ?></td>
            <td><?php echo $data['berat']; ?></td>
            <td><?php echo $data['franco']; ?></td>
            <td><?php echo $data['confrankert']; ?></td>
            <td><?php echo $data['penerimabarang']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            <td>
                <a class="edit" href="update.php?id=<?= $data['id']; ?>">Edit</a>
                <a class="hapus" href="process/delete.php?id=<?= $data['id']; ?>">Hapus</a>					
            </td>
        </tr>
        <?php } ?>
    </table>

    <div class="forms">
        <form action="process/add-process.php" method="POST">		
            <table>
                <tr>
                    <td>SP</td>
                    <td><input type="text" name="sp"></td>					
                </tr>	
                <tr>
                    <td>Colli</td>
                    <td><input type="text" name="colli"></td>					
                </tr>	
                <tr>
                    <td>Berat</td>
                    <td><input type="text" name="berat"></td>					
                </tr>
                <tr>
                    <td>Franco</td>
                    <td><input type="text" name="franco"></td>					
                </tr>
                <tr>
                    <td>Confrankert</td>
                    <td><input type="text" name="confrankert"></td>					
                </tr>
                <tr>
                    <td>Penerima Barang</td>
                    <td><input type="text" name="penerimabarang"></td>					
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="keterangan"></td>					
                </tr>	
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>					
                </tr>				
            </table>
        </form>
    </div>
</body>
</html>