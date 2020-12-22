<?php 

class AModel extends CI_Controller{
   
    public function __construct()
     {
     	parent::__construct();

     	$this->load->model('tabel_a');
     }

	public function index($url_id = '',$url_stok = '')
	{
   
    $data['tbl_tabel_a'] = $this->AModel->getAll();

   	$this->load->view('tabel_a/v_index', $data);
}
  
   public function tambah()
   {
    $this->load->view('tabel_a/v_tambah');
   }

   public function simpan_data()
   {
      $data = [
      'Id' => $this->input->post('id'),
      'Merk' => $this->input->post('Merk'),
      'Jenis' => $this->input->post('Jenis'),
      'Stok' => $this->input->post('stok'),
    ];

    $this->AModel->create($data);
    redirect('tabel_a/index','refresh');
    }

}
?>