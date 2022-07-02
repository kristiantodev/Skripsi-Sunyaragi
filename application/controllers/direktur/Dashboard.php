  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	public function index(){
	  $this->db->select('dimensi.nama_dimensi');
      $this->db->select_avg('survei_detail.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('survei_detail.skor_harapan','rata2_harapan');
      $this->db->join('survei_detail', 'survei.id_survei = survei_detail.id_survei');
      $this->db->join('kriteria', 'kriteria.id_kriteria = survei_detail.id_kriteria');
      $this->db->join('dimensi', 'dimensi.id_dimensi = kriteria.id_dimensi');
      $this->db->from('survei');
      $this->db->group_by("dimensi.id_dimensi");
      $query = $this->db->get();

         $data=array(
            "hasilSurvey"=>$query->result(),
        );

		$this->Paging('portal', $data);

	}

	public function survei_masuk(){

	  $this->db->select('*');
      $this->db->join('survei_detail', 'survei.id_survei = survei_detail.id_survei');
      $this->db->join('kriteria', 'kriteria.id_kriteria = survei_detail.id_kriteria');
      $this->db->join('dimensi', 'dimensi.id_dimensi = kriteria.id_dimensi');
      $this->db->from('survei');
      $query = $this->db->get();

		$data=array(
            "hasilSurvey"=>$this->db->get('survei')->result(),
            "detailSurvei"=>$query->result(),
        );
		$this->Paging('isi/adm/survei_masuk', $data);

	}
	
}
