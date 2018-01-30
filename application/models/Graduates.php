<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graduates extends CI_Model{

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

public function getAllgrd()
{
  $query=$this->db->select('uoc_graduate.*,ref_race.race_name,ref_fac.fac_name,ref_sub_district.sub_district_name_th,ref_prefix_name.fullname,ref_religion.religion_name_th,ref_gender.gender_name,ref_univ.univ_name_th')
                  ->from('uoc_graduate')
                  ->join('ref_race','ref_race.race_id = uoc_graduate.race_id', 'left')
                  ->join('ref_fac','ref_fac.fac_id = uoc_graduate.fac_id', 'left')
                  ->join('ref_sub_district','ref_sub_district.sub_district_id = uoc_graduate.sub_district_id' ,'left')
                  ->join('ref_prefix_name','ref_prefix_name.prefix_name_id = uoc_graduate.prefix_name_id', 'left')
                  ->join('ref_religion','ref_religion.religion_id = uoc_graduate.religion_id', 'left')
                  ->join('ref_gender','ref_gender.gender_id = uoc_graduate.gender_id', 'left')
                  ->join('ref_univ','ref_univ.univ_id = uoc_graduate.univ_id', 'left')
                  ->get();
  return $query;
}

  public function addGraduate()
  {
    $data=array(
      'year'=>$this->input->post('year'),
      'univ_id'=>$this->input->post('univ_id'),
      'citizen_id'=>$this->input->post('citizen_id'),
      'std_id'=>$this->input->post('std_id'),
      'prefix_name_id'=>$this->input->post('prefix_name_id'),
      'std_fname'=>$this->input->post('std_fname'),
      'std_mname'=>$this->input->post('std_mname'),
      'std_lname'=>$this->input->post('std_lname'),
      'gender_id'=>$this->input->post('gender_id'),
      'birthday'=>$this->input->post('birthday'),
      'fac_id'=>$this->input->post('fac_id'),
      'gpa'=>$this->input->post('gpa'),
      'house_id'=>$this->input->post('house_id'),
      'house_number'=>$this->input->post('house_number'),
      'houseadd_name'=>$this->input->post('houseadd_name'),
      'moo'=>$this->input->post('moo'),
      'soi'=>$this->input->post('soi'),
      'street'=>$this->input->post('street'),
      'sub_district_id'=>$this->input->post('sub_district_id'),
      'telephone'=>$this->input->post('telephone'),
      'zipcode'=>$this->input->post('zipcode'),
      'race_id'=>$this->input->post('race_id'),
      'religion_id'=>$this->input->post('religion_id'),
      'email'=>$this->input->post('email'),
      'dategraduation'=>$this->input->post('dategraduation'),
      'curr_id'=>$this->input->post('curr_id'),
      'degree_num'=>$this->input->post('degree_num'),
      'nation_id'=>$this->input->post('nation_id'),
      'passport_number'=>$this->input->post('passport_number'),
      'passport_startdate'=>$this->input->post('passport_startdate'),
      'passport_enddate'=>$this->input->post('passport_enddate'),

    );
    $this->db->insert('uoc_graduate', $data);
  }

}
