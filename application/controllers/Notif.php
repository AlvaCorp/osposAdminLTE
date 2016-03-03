<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notif extends CI_Controller {
	function __construct()
	{
		parent::__construct();	
		$this->load->model('global_model');
	}
	public function index()
	{
		$this->load->view('page_not_found');
	}
	public function stock_min()
	{
		$query = $this->global_model->get_data("`name`,reorder_level, quantity", "ospos_items", "a INNER JOIN ospos_item_quantities b ON a.item_id=b.item_id WHERE a.`deleted`=0 AND b.`quantity`<=a.reorder_level");
		if($query->num_rows()>0)
		{
			$data['stock']=$query->result();
			$this->load->view('notif/stock_minimal',$data);
			//echo $query->num_rows();
		} else {
			echo "||<li><a href='javascript:void(0)'><i class='fa fa-tag text-aqua'></i> Tidak ada stock item yang hampir habis</a></li>|<a href='".site_url('items')."'>Lihat item</a>";
		}
	}
}
