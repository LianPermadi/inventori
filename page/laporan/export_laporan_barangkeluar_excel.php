
<?php
if (isset($_POST['submit']))
{?>

 <?php



	$koneksi = new mysqli("localhost","root","","inventori");

	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Barang_Keluar (".date('d-m-Y').").xls");
	
	// $bln = $_POST['bln'] ;
	// $thn = $_POST['thn'] ;
$tgl_awal  = $_POST['tgl_awal'];
$tgl_akhir = $_POST['tgl_akhir'];

?>	

<body>
<center>
<h2>Laporan Barang Keluar Dari tanggal <?php echo $tgl_awal;?> Sampai <?php echo $tgl_akhir;?></h2>
</center>
<table border="1">
  <tr>
											<th>No</th>
											<th>Id Transaksi</th>
											<th>Tanggal Keluar</th>
											<th>Kode Barang</th>
											<th>Nama Barang</th>			
											<th>Jumlah Keluar</th>
											<th>Tujuan</th>

                                        </tr>
	

                    <?php 	
									$no = 1;
									
$sql = $koneksi->query( "
    SELECT *
    FROM barang_keluar
    WHERE tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir'
");
									// $sql = $koneksi->query("select * from barang_keluar where MONTH(tanggal) = '$bln' and YEAR(tanggal) = '$thn'");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                  <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['id_transaksi'] ?></td>
											<td><?php echo $data['tanggal'] ?></td>
											<td><?php echo $data['kode_barang'] ?></td>
											<td><?php echo $data['nama_barang'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['tujuan'] ?></td>

                                        </tr>
									<?php }?>
					</table>	
					</body>
                                
	<?php 
	}
	?>
	
	<?php

	$koneksi = new mysqli("localhost","root","","inventori");
	

$tgl_awal  = $_POST['tgl_awal'];
$tgl_akhir = $_POST['tgl_akhir'];
	?>
	
	<div class="table-responsive">
							
                                <table  class="display table table-bordered" id="transaksi">
								
                                    <thead>
                                      <tr>
											<th>No</th>
											<th>Id Transaksi</th>
											<th>Tanggal Keluar</th>
											<th>Kode Barang</th>
											<th>Nama Barang</th>			
											<th>Jumlah Keluar</th>
											<th>Tujuan</th>

                                        </tr>
                                    </thead>
		<tbody>
									
		
		<?php
		$no = 1;
		$sql = $koneksi->query( "
			SELECT *
			FROM barang_keluar
			WHERE tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir'
		");
		// $sql = $koneksi->query("select * from barang_keluar where YEAR(tanggal) = '$thn'");
		while ($data = $sql->fetch_assoc()) {
									
		?>
	
						
				  <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['id_transaksi'] ?></td>
											<td><?php echo $data['tanggal'] ?></td>
											<td><?php echo $data['kode_barang'] ?></td>
											<td><?php echo $data['nama_barang'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['tujuan'] ?></td>

                                        </tr>
						<?php 
						}
						?>

					</tbody>
                    </table>
					</div>
					