  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

	}

	public function index(){
		$this->load->view('isi/home');

	}

	public function survei(){
		$this->db->select('*');
         $this->db->join('dimensi', 'kriteria.id_dimensi = dimensi.id_dimensi');
         $this->db->from('kriteria');
         $query = $this->db->get();

         $data=array(
            "surveys"=>$query->result()
        );

	    $this->load->view('survei', $data);	
	}

	public function sejarah(){
		$data=array(
            "perusahaan" => $this->db->get_where('profil_perusahaan', ['id'=> 1])->row()
        );
	    $this->load->view('isi/sejarah', $data);	
	}

public function kontak(){
	$data=array(
            "perusahaan" => $this->db->get_where('profil_perusahaan', ['id'=> 1])->row()
        );
	    $this->load->view('isi/kontak', $data);	
	}


	public function proses_survey()
    {
        $this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('portal/survei');
        }else{

            $id_survei = rand();
          

            $i=1;
            while (isset($_POST['id_kriteria'.$i])) {

                 $id_kriteria = $_POST['id_kriteria'.$i];
                 $skor_kinerja = $_POST['skor_kinerja'.$i];
                 $skor_harapan = $_POST['skor_harapan'.$i];

                 $data=array(
                     "id_survei"=>$id_survei,
                     "id_kriteria"=>$id_kriteria,
                     "skor_kinerja"=>$skor_kinerja,
                     "skor_harapan"=>$skor_harapan
            );
                 $this->db->insert('survei_detail',$data);
                 $i++;
            }
            $data2=array(
                     "id_survei"=>$id_survei,
                     "nama_pelanggan"=>$_POST['nama_pelanggan'],
                     "jk"=>$_POST['jk'],
                     "alamat"=>$_POST['alamat'],
                     "kritik_saran"=>$_POST['kritik_saran']
            );

            $this->db->insert('survei',$data2);
            $this->session->set_flashdata('sukses',"Survei anda telah kami rekam. Terimakasih :)");
            redirect('portal/survei');
        }
    }
	
}
