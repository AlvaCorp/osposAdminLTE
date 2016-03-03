<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Sample extends CI_Controller {
	public function __construct() {
		parent::__construct();
		//$this->load->model('global_model');
	}
	function list_posting(){
		//Parameter pertama adalah field yang ingin di ambil contoh : * atau nama field
		//Parameter kedua adalah nama tabel
		//Parameter ketiga adalah rulesnya contoh : WHERE id=0  
		 
		$this->global_model->get_data('*', 'utd_post', 'ORDER BY post_date DESC')->result();
	}
         
	function save_mahasiswa(){
		$data['nama_mahasiswa'] = 'Jin Toples';
		$data['NPM'] = '201110225xxx';
		 
		//Parameter pertama adalah data yang ingin di simpan
		//Parameter kedua adalah nama tabel            
		 
		$this->global_model->save_data($data, 'tbl_mahasiswa');
		/*
		*Perhatikan pada bagian fungsi save_mahasiswa dan update_mahasiswa setiap data array yang di lempar index arraynya harus sama dengan field yang ada dalam tabel tersebut seperti contoh di atas $data['npm'] hal ini berarti data tersebut akan di simpan dalam field npm yang ada dalam tabel.
		*/
	}
	 
	function delete_mahasiswa($id){
		//Parameter pertama adalah id atau index yang ingin di cocokan dengan field
		//Parameter kedua adalah nama field yang di cocokan dengan id
		//Parameter ketiga adalah nama tabel
		 
		$this->global_model->delete_data($id, 'id_mahasiswa', 'tbl_mahasiswa');
	}
	 
	function edit_mahasiswa($id){
		//Parameter pertama adalah field yang ingin di ambil
		//Parameter kedua adalah nama tabel
		//Parameter ketiga adalah rulesnya contoh : WHERE id_mahasiswa=$id 
		 
		$this->global_model->get_data('*', 'tbl_mahasiswa', 'WHERE id_mahasiswa="'.$id.'"')->result();
	}
	 
	function update_mahasiswa($id){
		$data['nama_mahasiswa'] = 'Jin Baru';
		$data['NPM'] = '201110225xyz';
		 
		//Parameter pertama adalah id atau index yang ingin di cocokan dengan field
		//Parameter kedua adalah nama field yang di cocokan dengan id
		//Parameter ketiga adalah nama data yang akan di update
		//Parameter keempat adalah nama tabel           
		 
		$this->global_model->update_data($id, 'id_mahasiswa', $data, 'tbl_mahasiswa');
	}
}
/* End of file sample.php */
/* Location: ./application/controllers/sample.php */