<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staffs extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getAllProvince()
  {
    $query=$this->db->select()
                    ->from('ref_province')
                    ->get();
    return $query;
  }

  public function getDistrict()
  {
    $query=$this->db->select()
                    ->from('ref_district')
                    ->get();
    return $query;
  }

  public function getSubDistrict()
  {
    $query=$this->db->select()
                    ->from('ref_sub_district')
                    ->get();
    return $query;
  }

  public function getAllUniv()
  {
    $query=$this->db->select()
                    ->from('ref_univ')
                    ->get();
    return $query;
  }

  public function getAllGender()
  {
    $query=$this->db->select()
                    ->from('ref_gender')
                    ->get();
    return $query;
  }

  public function getAllRace()
  {
    $query=$this->db->select()
                    ->from('ref_race')
                    ->get();
    return $query;
  }

  public function getAllReligion()
  {
    $query=$this->db->select()
                    ->from('ref_religion')
                    ->get();
    return $query;
  }

  public function getAllFac()
  {
    $query=$this->db->select()
                    ->from('ref_fac')
                    ->get();
    return $query;
  }

  public function getAllNation()
  {
    $query=$this->db->select()
                    ->from('ref_nation')
                    ->get();
    return $query;
  }

  public function getAllstaff()
  {
    $query=$this->db->select('uoc_staff.*,
                              ref_univ.UNIV_NAME_TH,
                              ref_prefix_name.FULLNAME,
                              ref_gender.GENDER_NAME,
                              ref_sub_district.SUB_DISTRICT_NAME_TH,
                              ref_nation.NATION_NAME_TH,
                              ref_stafftype.STAFFTYPE_NAME,
                              ref_time_contact.TIME_CONTACT_NAME,
                              ref_budget.BUDGET_NAME,
                              ref_substafftype.SUBSTAFFTYPE_NAME,
                              ref_admin.ADMIN_NAME,
                              ref_position.POSITION_NAME_TH,
                              ref_fac.FAC_NAME,
                              ref_special.ISCED_NAME,
                              ref_deform.DEFORM_NAME,
                              ref_religion.RELIGION_NAME_TH,
                              ref_movement_type.MOVEMENT_TYPE_NAME,
                              '
                            )
                    ->from('uoc_staff')
                    ->join('ref_univ','ref_univ.UNIV_ID = uoc_staff.UNIV_ID', 'left')
                    ->join('ref_prefix_name','ref_prefix_name.PREFIX_NAME_ID = uoc_staff.PREFIX_NAME_ID', 'left')
                    ->join('ref_gender','ref_gender.GENDER_ID = uoc_staff.GENDER_ID', 'left')
                    //->join('ref_province','ref_province.PROVINCE_ID = uoc_staff.PROVINCE_ID', 'left')
                    //->join('ref_district','ref_district.DISTRICT_ID = uoc_staff.DISTRICT_ID', 'left')
                    ->join('ref_sub_district','ref_sub_district.SUB_DISTRICT_ID = uoc_staff.SUB_DISTRICT_ID', 'left')
                    //->join('ref_race','ref_race.RACE_ID = uoc_staff.RACE_ID', 'left')
                    ->join('ref_nation','ref_nation.NATION_ID = uoc_staff.NATION_ID', 'left')
                    ->join('ref_stafftype','ref_stafftype.STAFFTYPE_ID = uoc_staff.STAFFTYPE_ID', 'left')
                    ->join('ref_time_contact','ref_time_contact.TIME_CONTACT_ID = uoc_staff.TIME_CONTACT_ID', 'left')
                    ->join('ref_budget','ref_budget.BUDGET_ID = uoc_staff.BUDGET_ID', 'left')
                    ->join('ref_substafftype','ref_substafftype.SUBSTAFFTYPE_ID = uoc_staff.SUBSTAFFTYPE_ID', 'left')
                    ->join('ref_admin','ref_admin.ADMIN_ID = uoc_staff.ADMIN_POSITION_ID', 'left')
                    ->join('ref_position','ref_position.POSITION_ID = uoc_staff.POSITION_ID', 'left')
                    ->join('ref_fac','ref_fac.FAC_ID = uoc_staff.DEPARTMENT_ID', 'left')
                    ->join('ref_special','ref_special.ISCED_ID = uoc_staff.SPECIAL_NAME_ID', 'left')
                    //->join('ref_special','ref_special.ISCED_ID = uoc_staff.TEACH_ISCED_ID', 'left')
                    ->join('ref_deform','ref_deform.DEFORM_ID = uoc_staff.DEFORM_ID', 'left')
                    ->join('ref_religion','ref_religion.RELIGION_ID = uoc_staff.RELIGION_ID', 'left')
                    ->join('ref_movement_type','ref_movement_type.MOVEMENT_TYPE_ID = uoc_staff.MOVEMENT_TYPE_ID', 'left')

                    ->get();
    return $query;
  }

  public function addStaff()
  {
    $data=array(
      'year'=>$this->input->post('year'),
      'univ_id'=>$this->input->post('univ_id'),
      //'univ_id'=>'21200',
      'citizen_id'=>$this->input->post('citizen_id'),
      'std_id'=>$this->input->post('std_id'),
      'prefix_name_id'=>$this->input->post('prefix_name_id'),
      'std_fname'=>$this->input->post('std_fname'),
      'std_mname'=>$this->input->post('std_mname'),
      'std_lname'=>$this->input->post('std_lname'),
      'gender_id'=>$this->input->post('gender_id'),
      'birthday'=>$this->input->post('birthday'),
      'fac_id'=>$this->input->post('fac_id'),
      //'fac_id'=>'00048',
      'gpa'=>$this->input->post('gpa'),
      'house_id'=>$this->input->post('house_id'),
      'house_number'=>$this->input->post('house_number'),
      'houseadd_name'=>$this->input->post('houseadd_name'),
      'moo'=>$this->input->post('moo'),
      'soi'=>$this->input->post('soi'),
      'street'=>$this->input->post('street'),
      'province_id'=>$this->input->post('province'),
      'district_id'=>$this->input->post('district'),
      'sub_district_id'=>$this->input->post('sub_district_id'),
      'telephone'=>$this->input->post('telephone'),
      'zipcode'=>$this->input->post('zipcode'),
      'race_id'=>$this->input->post('race_id'),
      'religion_id'=>$this->input->post('religion_id'),
      'email'=>$this->input->post('email'),
      'dategraduation'=>$this->input->post('dategraduation'),
      'curr_id'=>$this->input->post('curr_id'),
      //'curr_id'=>'25322121100124',
      'degree_num'=>$this->input->post('degree_num'),
      //'degree_num'=>'1',
      'nation_id'=>$this->input->post('nation_id'),
      'passport_number'=>$this->input->post('passport_number'),
      'passport_startdate'=>$this->input->post('passport_startdate'),
      'passport_enddate'=>$this->input->post('passport_enddate'),
      'std_fname_en'=>$this->input->post('std_fname_en'),
      'std_mname_en'=>$this->input->post('std_mname_en'),
      'std_lname_en'=>$this->input->post('std_lname_en'),

    );
    $this->db->insert('uoc_staff', $data);
  }

}
