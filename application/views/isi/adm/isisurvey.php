<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Hasil Survey</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           Hasil Survei Kepuasan Pengunjung Gua Sunyaragi
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                               <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="20">No.</th>
                                            <th></th>
                                            <th>Nama Dimensi</th>
                                            <th>Kriteria</th>
                                            <th>Kinerja</th>
                                            <th>Harapan</th>
                                            <th>GAP</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                          <?php $no=1; $no2=1; foreach ($hasilSurvey as $hs): ?> 
                          <?php  $gap = $hs->rata2_kinerja - $hs->rata2_harapan;
                                
                                         if ($gap < 0) {
                                           $warna = '#f3d7d0';
                                           $keterangan = "Kurang";
                                       }else{
                                          $warna = '';
                                          $keterangan = "Baik";
                                         }
                                   ?>              
                                        <tr bgcolor="<?php echo $warna; ?>">
                                            <td><?php echo $no++; ?></td>
                                            <td align="center">P<?php echo $no2++; ?></td>
                                            <td><?php echo $hs->nama_dimensi ?></td>
                                            <td><?php echo $hs->kriteria ?></td>
                                            <td><?php echo number_format($hs->rata2_kinerja,2) ?></td>
                                            <td><?php echo number_format($hs->rata2_harapan,2) ?></td>
                                            <td><?php echo number_format($gap,2) ?></td>
                                            <td><?php echo $keterangan; ?></td>
                                        </tr>
                  <?php endforeach; ?>                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           