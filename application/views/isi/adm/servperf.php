<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
function printDiv(elementId) {
 var a = document.getElementById('printing-css').value;
 var b = document.getElementById(elementId).innerHTML;
 window.frames["print_frame"].document.title = document.title;
 window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
 window.frames["print_frame"].window.focus();
 window.frames["print_frame"].window.print();
}
</script>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Analisis Serperf</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                          <form class="form-horizontal" action="" method="get">
            <div class="row clearfix right">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="jenis">Pilih Tahun Survei : </label>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-8 col-xs-7">
                                <select class="custom-select" name='tahun'>
                      <option selected="selected">-- Pilih Tahun --</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                  <option value="2020">2020</option>
                   <option value="2021">2021</option>
                    <option value="2022">2022</option>
                     <option value="2023">2023</option>
                      <option value="2024">2024</option>
                       <option value="2025">2025</option>

                 
                    </select>
                                              </div>
            
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <button type="submit" name="submitted" value="filter" class="btn btn-info"><i class="fas fa-search"></i> <span>Filter</span></button>
              </div>
             
            </div>
          </form>
          <br>
                           <a data-toggle="modal" data-target="#bb">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-info"></i> &nbsp;&nbsp;Info Kuadran</button>
                                </a>

                                <a data-toggle="modal" data-target="#bb2">
                                            <button type="button" class="btn btn-info waves-effect waves-light">
                                    <i class="fa fa-print"></i> &nbsp;&nbsp;Cetak Laporan</button>
                                </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                               Tahun : <?php echo $tahun ?>
                               <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="20">No.</th>
                                            <th></th>
                                            <th>Nama Dimensi</th>
                                            <th>Kriteria</th>
                                            <th>Kinerja</th>
                                            <th>Harapan</th>
                                            <th>Kuadran</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  <?php $no=1; $no2=1; foreach ($hasilSurvey as $hs): ?>  
                                  <?php 
                                    
                                    if ($hs->rata2_kinerja <= $ratarataSumbu->sumbu_x && $hs->rata2_harapan >= $ratarataSumbu->sumbu_y) {
                                      $kelompok = "I";
                                      $color = "#f83f37";
                                      $ket = "Prioritas Utama";
                                    } elseif ($hs->rata2_kinerja >= $ratarataSumbu->sumbu_x && $hs->rata2_harapan >= $ratarataSumbu->sumbu_y) {
                                      $kelompok = "II";
                                      $color = "#22af47";
                                      $ket = "Pertahankan";
                                    }elseif ($hs->rata2_kinerja <= $ratarataSumbu->sumbu_x && $hs->rata2_harapan <= $ratarataSumbu->sumbu_y) {
                                      $kelompok = "III";
                                      $color = "#cdb308";
                                      $ket = "Prioritas Rendah";
                                    }elseif ($hs->rata2_kinerja >= $ratarataSumbu->sumbu_x && $hs->rata2_harapan <= $ratarataSumbu->sumbu_y) {
                                      $kelompok = "IV";
                                      $color = "#6640b2";
                                      $ket = "Berlebihan";
                                    }
                                     ?>      
                                        <tr bgcolor="<?php echo $color; ?>">
                                            <td><font color="white"><?php echo $no++; ?></font></td>
                                            <td align="center"><font color="white">P<?php echo $no2++; ?></font></td>
                                            <td><font color="white"><?php echo $hs->nama_dimensi ?></font></td>
                                            <td><font color="white"><?php echo $hs->kriteria ?></font></td>
                                            <td align="center"><font color="white"><?php echo number_format($hs->rata2_kinerja,2) ?></font></td>
                                            <td align="center"><font color="white"><?php echo number_format($hs->rata2_harapan,2) ?></font></td>
                                            <td align="center"><font color="white"><?php echo $kelompok; ?></font></td>
                                            <td><font color="white"><?php echo $ket; ?></font></td>
                                        </tr>
                                 <?php endforeach; ?> 
                                        <tr>
                                            <td colspan="3"><b><center>Sumbu Potong X dan Y</center></b></td>
                                            <td align="center"><b><?php echo number_format($ratarataSumbu->sumbu_x,2) ?></b></td>
                                            <td align="center"><b><?php echo number_format($ratarataSumbu->sumbu_y,2) ?></b></td>
                                        </tr>
                                        
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
                  <div class="modal fade text-left" id="bb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-lg">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Informasi Kuadran</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      
                      <div class="modal-body">



                         <table  class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>No.</b></th>

                                     <th width="50"><b>Kuadran</b></th>
                                    <th><b>Nama Kuadran</b></th>
                                    <th ><b>Deskripsi</b></th>
                                  
                                </tr>

                                <tr bgcolor="#f83f37">
                                  <td align="center"><font color="white">1</font></td>
                                  <td align="center"><font color="white">I</font></td>
                                  <td align="justify"><font color="white">Prioritas Utama</font></td>
                                  <td align="justify"><font color="white">Jika nilai rata-rata harapan < perpotongan sumbu x dan nilai rata-rata kinerja > perpotongan sumbu y, maka Kuadran I. Kuadran I berarti Prioritas Utama, menunjukan atribut yang diprioritaskan oleh 
    pengunjung untuk ditingkatkan atau diperbaiki.
</font></td>
                                </tr>

                                <tr bgcolor="#22af47">
                                  <td align="center"><font color="white">2</font></td>
                                  <td align="center"><font color="white">II</font></td>
                                  <td align="justify"><font color="white">Pertahankan</font></td>
                                  <td align="justify"><font color="white">Jika nilai rata-rata harapan > perpotongan sumbu x dan nilai rata-rata kinerja   > perpotongan sumbu y, maka Kuadran II. Kuadran II berarti Pertahankan Prestasi, menunjukan kinerja atribut yang berhasil
  memuaskan pengunjung, untuk itu atribut ini perlu dipertahankan.

</font></td>
                                </tr>

                                <tr bgcolor="#cdb308">
                                  <td align="center"><font color="white">3</font></td>
                                  <td align="center"><font color="white">III</font></td>
                                  <td align="justify"><font color="white">Prioritas Rendah</font></td>
                                  <td align="justify"><font color="white">Jika nilai rata-rata harapan < perpotongan sumbu x dan nilai rata-rata kinerja < perpotongan sumbu y, maka Kuadran III. Kuadran III berarti Prioritas Rendah, menunjukan kinerja atribut yang tidak terlalu 
       berpengaruh bagi pengunjung, kinerjanya pun rendah.

</font></td>
                                </tr>

                                <tr bgcolor="#6640b2">
                                  <td align="center"><font color="white">4</font></td>
                                  <td align="center"><font color="white">IV</font></td>
                                  <td align="justify"><font color="white">Berlebihan</font></td>
                                  <td align="justify"><font color="white">4.  Jika nilai rata-rata harapan > perpotongan sumbu x dan nilai rata-rata kinerja < perpotongan sumbu y, maka Kuadran IV. Kuadran IV berarti Berlebihan, atribut yang tidak terlalu penting bagi pengunjung.
       Namun, kinerja atribut tersebut sangat memuaskan.

</font></td>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             
                                                </tbody>
                                            </table>            
      
                      </div>
                      <div class="modal-footer">
                 
                        
                      </div>
                      
                 
                    </div>
                    </div>
                  </div>

                    <!-- Modal -->
                  <div class="modal fade text-left" id="bb2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-lg">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Cetak Laporan</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      
                      <div class="modal-body">
                        <div id="box">
<center><h5><b>Laporan Analisis Kepuasan <br>Metode Servperf</b></h5></center>
 <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="20">No.</th>
                                            <th></th>
                                            <th>Nama Dimensi</th>
                                            <th>Kriteria</th>
                                            <th>Kinerja</th>
                                            <th>Harapan</th>
                                            <th>Kuadran</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  <?php $no=1; $no2=1; foreach ($hasilSurvey as $hs): ?>  
                                  <?php 
                                    
                                    if ($hs->rata2_kinerja <= $ratarataSumbu->sumbu_x && $hs->rata2_harapan >= $ratarataSumbu->sumbu_y) {
                                      $kelompok = "I";
                                      $color = "#f83f37";
                                      $ket = "Prioritas Utama";
                                    } elseif ($hs->rata2_kinerja >= $ratarataSumbu->sumbu_x && $hs->rata2_harapan >= $ratarataSumbu->sumbu_y) {
                                      $kelompok = "II";
                                      $color = "#22af47";
                                      $ket = "Pertahankan";
                                    }elseif ($hs->rata2_kinerja <= $ratarataSumbu->sumbu_x && $hs->rata2_harapan <= $ratarataSumbu->sumbu_y) {
                                      $kelompok = "III";
                                      $color = "#cdb308";
                                      $ket = "Prioritas Rendah";
                                    }elseif ($hs->rata2_kinerja >= $ratarataSumbu->sumbu_x && $hs->rata2_harapan <= $ratarataSumbu->sumbu_y) {
                                      $kelompok = "IV";
                                      $color = "#6640b2";
                                      $ket = "Berlebihan";
                                    }
                                     ?>      
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td align="center">P<?php echo $no2++; ?></td>
                                            <td><?php echo $hs->nama_dimensi ?></td>
                                            <td><?php echo $hs->kriteria ?></td>
                                            <td align="center"><?php echo number_format($hs->rata2_kinerja,2) ?></td>
                                            <td align="center"><?php echo number_format($hs->rata2_harapan,2) ?></td>
                                            <td align="center"><?php echo $kelompok; ?></td>
                                            <td><?php echo $ket; ?></td>
                                        </tr>
                                 <?php endforeach; ?> 
                                        <tr>
                                            <td colspan="3"><b><center>Sumbu Potong X dan Y</center></b></td>
                                            <td align="center"><b><?php echo number_format($ratarataSumbu->sumbu_x,2) ?></b></td>
                                            <td align="center"><b><?php echo number_format($ratarataSumbu->sumbu_y,2) ?></b></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                              </div>
                      </div>
                      <div class="modal-footer">
                 
                        <center>
        <a href="javascript:printDiv('box');">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-print"></i> &nbsp;&nbsp;Cetak&nbsp;&nbsp;&nbsp;</button>
                                </a></center>
                      </div>
                      
                 
                    </div>
                    </div>
                  </div>

           