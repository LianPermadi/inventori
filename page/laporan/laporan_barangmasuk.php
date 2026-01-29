








 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Barang Masuk</h6>
            </div>
            <div class="card-body">
			
			 
<form id="Myform1" method="post">
    <div class="row form-group">

        <div class="col-md-3">
            <label>Dari Tanggal</label>
            <input type="date" name="tgl_awal" class="form-control" required>
        </div>

        <div class="col-md-3">
            <label>Sampai Tanggal</label>
            <input type="date" name="tgl_akhir" class="form-control" required>
        </div>

        <div class="col-md-6" style="margin-top:25px;">
            <button type="submit" class="btn btn-info">
                Tinjau Data
            </button>

            <button type="submit"
                formaction="page/laporan/export_laporan_barangmasuk_excel.php"
                formtarget="_blank"
                class="btn btn-success">
                Export Excel
            </button>
        </div>

    </div>
</form>
	
	<div class="tampung1">
			
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>Id Transaksi</th>
											<th>Tanggal Masuk</th>
											<th>Kode Barang</th>
											<th>Nama Barang</th>
										
											<th>Pengirim</th>
											
										
										
                                            
											<th>Jumlah Masuk</th>
											<th>Satuan Barang</th>
										
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from barang_masuk");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['id_transaksi'] ?></td>
											<td><?php echo $data['tanggal'] ?></td>
											<td><?php echo $data['kode_barang'] ?></td>
											<td><?php echo $data['nama_barang'] ?></td>
											
											<td><?php echo $data['pengirim'] ?></td>
									
                                         
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
								

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












