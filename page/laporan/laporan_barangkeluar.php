



 
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Barang Keluar</h6>
            </div>
            <div class="card-body">
			
			 
<table>
    <tr>
        <td>LAPORAN BERDASARKAN TANGGAL</td>
    </tr>
    <tr>
        <td width="50%">
            <form action="page/laporan/export_laporan_barangkeluar_excel.php" method="post">
                <div class="row form-group">

                    <div class="col-md-4">
                        <label>Dari Tanggal</label>
                        <input type="date" name="tgl_awal" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label>Sampai Tanggal</label>
                        <input type="date" name="tgl_akhir" class="form-control" required>
                    </div>

                    <div class="col-md-4" style="margin-top:25px;">
                        <input type="submit" name="submit" value="Export to Excel" class="btn btn-success">
                    </div>

                </div>
            </form>
        </td>
    </tr>
</table>

	
	<div class="tampung2">
			
			
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
									$sql = $koneksi->query("select * from barang_keluar");
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

										   </tbody>
                                </table>
							
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












