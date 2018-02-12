<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
      $this->load->model('Staffs');
  }

	public function index()
	{
		$data['staff'] = $this->Staffs->getAllstaff()->result();
		$this->load->view('/staff/index', $data);
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

	public function add_staff()
	{
		$data['provinces'] = $this->Staffs->getAllProvince();
		//$data['districts'] = $this->Staffs->getDistrict();
		//$data['sub_districts'] = $this->Staffs->getSubDistrict();
		$data['univs'] = $this->Staffs->getAllUniv();
		$data['genders'] = $this->Staffs->getAllGender();
		$data['races'] = $this->Staffs->getAllRace();
		$data['religions'] = $this->Staffs->getAllReligion();
		$data['facs'] = $this->Staffs->getAllFac();
		$data['nations'] = $this->Staffs->getAllNation();

		$this->load->view('/staff/add_form', $data);
	}

	public function add()
  {
    $this->Staffs->addStaff();
    $this->load->view('staff/end');
  }

}
