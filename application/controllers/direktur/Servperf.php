  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servperf extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	public function index(){

            $tahun = $this->input->get('tahun');
    $submitted = $this->input->get('submitted');

    if(empty($tahun) && empty($submitted)){

      $this->db->select_avg('survei_detail.skor_kinerja','sumbu_x');
      $this->db->select_avg('survei_detail.skor_harapan','sumbu_y');
      $this->db->join('survei_detail', 'survei.id_survei = survei_detail.id_survei');
      $this->db->join('kriteria', 'kriteria.id_kriteria = survei_detail.id_kriteria');
      $this->db->join('dimensi', 'dimensi.id_dimensi = kriteria.id_dimensi');
      $this->db->from('survei');
      $query = $this->db->get();

      $this->db->select('*');
      $this->db->select_avg('survei_detail.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('survei_detail.skor_harapan','rata2_harapan');
      $this->db->join('survei_detail', 'survei.id_survei = survei_detail.id_survei');
      $this->db->join('kriteria', 'kriteria.id_kriteria = survei_detail.id_kriteria');
      $this->db->join('dimensi', 'dimensi.id_dimensi = kriteria.id_dimensi');
      $this->db->from('survei');
      $this->db->group_by("kriteria.id_kriteria");
      $this->db->order_by("dimensi.id_dimensi");
      $queryHasilSurvey = $this->db->get();

      $data=array(
            "ratarataSumbu"=>$query->row(),
            "hasilSurvey"=>$queryHasilSurvey->result(),
            "tahun"=>"All Data"
      );

            $this->Paging('isi/adm/servperf', $data);
      

    }else {

    $this->db->select_avg('survei_detail.skor_kinerja','sumbu_x');
      $this->db->select_avg('survei_detail.skor_harapan','sumbu_y');
      $this->db->join('survei_detail', 'survei.id_survei = survei_detail.id_survei');
      $this->db->join('kriteria', 'kriteria.id_kriteria = survei_detail.id_kriteria');
      $this->db->join('dimensi', 'dimensi.id_dimensi = kriteria.id_dimensi');
      $this->db->where('YEAR(survei.tgl_survei)', $tahun);
      $this->db->from('survei');
      $query = $this->db->get();

      $this->db->select('*');
      $this->db->select_avg('survei_detail.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('survei_detail.skor_harapan','rata2_harapan');
      $this->db->join('survei_detail', 'survei.id_survei = survei_detail.id_survei');
      $this->db->join('kriteria', 'kriteria.id_kriteria = survei_detail.id_kriteria');
      $this->db->join('dimensi', 'dimensi.id_dimensi = kriteria.id_dimensi');
      $this->db->where('YEAR(survei.tgl_survei)', $tahun);
      $this->db->from('survei');
      $this->db->group_by("kriteria.id_kriteria");
      $this->db->order_by("dimensi.id_dimensi");
      $queryHasilSurvey = $this->db->get();

      $data=array(
            "ratarataSumbu"=>$query->row(),
            "hasilSurvey"=>$queryHasilSurvey->result(),
            "tahun"=> $tahun
      );

            $this->Paging('isi/adm/servperf', $data);

    }

      

      }
	
}
