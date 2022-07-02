<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Survei Masuk</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            List Survei Masuk Pengunjung Gua Sunyaragi
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Survei</th>
                                            <th>Kritik Saran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                        <?php $no=1;
         foreach ($hasilSurvey as $hs): ?> 
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $hs->nama_pelanggan ?></td>
                                            <td><?php echo $hs->alamat ?></td>
                                            <td><?php echo $hs->tgl_survei ?></td>
                                            <td><?php echo $hs->kritik_saran ?></td>
                                            <td>

                                              <a data-toggle="modal" data-target="#modal-list<?php echo $hs->id_survei?>">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-folder-open"></i> Lihat Penilaian</button>
                                </a>
                                            </td>
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

             <!-- Modal -->
 <?php $no=2;
         foreach ($hasilSurvey as $hs): ?> 
                  <div class="modal fade text-left" id="modal-list<?php echo $hs->id_survei ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Detail Penilaian (<?php echo $hs->nama_pelanggan ?>)</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      
                      <div class="modal-body">



                         <table  class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>No.</b></th>
                                     <th><b>Dimensi</b></th>
                                    <th><b>Kriteria</b></th>
                                    <th width="50"><b>Penilaian Kinerja</b></th>
                                    <th width="50"><b>Penilaian Harapan</b></th>
                                  
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no2=1; foreach ($detailSurvei as $ds): ?>
                    <?php if ($ds->id_survei == $hs->id_survei){ ?>
                                <tr>
                                 <td><center><?php echo $no2++; ?></center></td> 
                                 <td><?php echo $ds->nama_dimensi?></td> 
                                 <td><?php echo $ds->kriteria?></td>  
                                  <td><center><?php echo $ds->skor_kinerja ?></center></td>  
                                  <td><center><?php echo $ds->skor_harapan ?></center></td>    
                                </tr>
                                <?php } ?>
                                <?php endforeach; ?>
                                                </tbody>
                                            </table>            
      
                      </div>
                      <div class="modal-footer">
                 
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
 <?php endforeach; ?>

            <!-- Modal -->
         <!--          <div class="modal fade text-left" id="bb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-lg">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Detail Penilaian (Nama Pengunjung)</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
             
<table class="table" width="90%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="20">No.</th>
                                            <th>Dimensi</th>
                                            <th>Kriteria</th>
                                            <th>Kinerja</th>
                                            <th>Harapan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>1</td>
                                            <td>Tangible</td>
                                            <td>Pelayanan yang ada pada Gua Sunyaragi Cirebon</td>
                                            <td align="center">4</td>
                                            <td align="center">5</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Tangible</td>
                                            <td>Pelayanan yang ada pada Gua Sunyaragi Cirebon</td>
                                            <td align="center">4</td>
                                            <td align="center">5</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Tangible</td>
                                            <td>Pelayanan yang ada pada Gua Sunyaragi Cirebon</td>
                                            <td align="center">4</td>
                                            <td align="center">5</td>
                                          </tr>
                                          <tr>
                                            <td>4</td>
                                            <td>Tangible</td>
                                            <td>Pelayanan yang ada pada Gua Sunyaragi Cirebon</td>
                                            <td align="center">4</td>
                                            <td align="center">5</td>
                                          </tr>
                                          <tr>
                                            <td>5</td>
                                            <td>Tangible</td>
                                            <td>Pelayanan yang ada pada Gua Sunyaragi Cirebon</td>
                                            <td align="center">4</td>
                                            <td align="center">5</td>
                                          </tr>
                                        </tbody>
                                      </table>

                    </div>
                    </div>
                  </div> -->