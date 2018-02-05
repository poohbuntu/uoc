<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graduate extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
      $this->load->model('Graduates');
  }

	public function index()
	{
		$data['graduate'] = $this->Graduates->getAllgrd()->result();
		$this->load->view('/graduate/index', $data);
	}

	public function get_district()
	{
		$province = $this->input->post('province');

		$query=$this->db->select()
                    ->from('ref_district')
										->where('province_id', $province)
                    ->get();

		echo '<option value="">เลือก</option>';
		foreach($query->result() as $district){

			echo '<option value="'.$district->DISTRICT_ID.'">'.$district->DISTRICT_NAME_TH.'</option>';
		}
	}

	public function get_sub_district_id()
	{
		$district = $this->input->post('district');

		$query=$this->db->select()
                    ->from('ref_sub_district')
										->where('district_id', $district)
                    ->get();

		echo '<option value="">เลือก</option>';
		foreach($query->result() as $sub_district){
			echo '<option value="'.$sub_district->SUB_DISTRICT_ID.'">'.$sub_district->SUB_DISTRICT_NAME_TH.'</option>';
		}
	}

	public function addform()
	{
		$data['provinces'] = $this->Graduates->getAllProvince();
		//$data['districts'] = $this->Graduates->getDistrict();
		//$data['sub_districts'] = $this->Graduates->getSubDistrict();
		$data['univs'] = $this->Graduates->getAllUniv();
		$data['genders'] = $this->Graduates->getAllGender();
		$data['facs'] = $this->Graduates->getAllFac();

		$this->load->view('/graduate/add_grd', $data);
	}

	public function add()
  {
    $this->Graduates->addGraduate();
    $this->load->view('graduate/end');
  }

}
