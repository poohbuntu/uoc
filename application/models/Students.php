<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getAllProvince()
  {
      $qurey = $this->db->select()->from('ref_province')->get();
      return $qurey;
  }

  public function getAllRace()
  {
    $qurey = $this->db->select()->from( 'ref_race')->get();
    return $qurey;
  }

  public function getAllNation()
  {
    $qurey = $this->db->select()->from( 'ref_nation')->get();
    return $qurey;
  }

  public function getAllFac()
  {
    $qurey = $this->db->select()->from( 'ref_fac')->get();
    return $qurey;
  }

  public function getAllUniv()
  {
    $qurey = $this->db->select()->from( 'ref_univ')->get();
    return $qurey;
  }

  public function getAllStd()
  {
    $qurey = $this->db->select()->from( 'ref_std_status')->get();
    return $qurey;
  }

  public function getAllDeform()
  {
    $qurey = $this->db->select()->from( 'ref_deform')->get();
    return $qurey;
  }

  public function addStudent()
  {
    $data=array(
      'YEAR'=>$this->input->post('year'),
      'semester'=>$this->input->post('semester'),
      'univ_id'=>$this->input->post('univ_id'),
      'citzen_id'=>$this->input->post('citzen_id'),
      'prefix_name_id'=>$this->input->post('prefix_name_id'),
      'std_fname'=>$this->input->post('std_fname'),
      'std_mname'=>$this->input->post('std_mname'),
      'std_lname'=>$this->input->post('std_lname'),
      'gender_id'=>$this->input->post('gender_id'),
      'birthday'=>$this->input->post('birthday'),
      'province_id'=>$this->input->post('province_id'),
      'nation_id'=>$this->input->post('nation_id'),
      'admit_year'=>$this->input->post('admit_year'),
      'fac_id'=>$this->input->post('fac_id'),
      'study_type_id'=>$this->input->post('study_type_id'),
      'study_time_id'=>$this->input->post('study_time_id'),
      'curr_reg_id'=>$this->input->post('curr_reg_id'),
      'class'=>$this->input->post('class'),
      'grad_status_id'=>$this->input->post('grad_status_id'),
      'std_status_id'=>$this->input->post('std_status_id'),
      'gpa'=>$this->input->post('gpa'),
      'acc_gpa'=>$this->input->post('acc_gpa'),
      'acc_credit'=>$this->input->post('acc_credit'),
      'deform_id'=>$this->input->post('deform_id'),
      'fund_status_id'=>$this->input->post('fund_status_id'),
      'talent'=>$this->input->post('talent'),
      'fat_citzen_id'=>$this->input->post('fat_citzen_id'),
      'fat_status_id'=>$this->input->post('fat_status_id'),
      'fat_revenue_id'=>$this->input->post('fat_revenue_id'),
      'fat_occup_id'=>$this->input->post('fat_occup_id'),
      'mot_citzen_id'=>$this->input->post('mot_citzen_id'),
      'mot_status_id'=>$this->input->post('mot_status_id'),
      'mot_revenue_id'=>$this->input->post('mot_revenue_id'),
      'mot_occup_id'=>$this->input->post('mot_occup_id'),
      'par_status_id'=>$this->input->post('par_status_id'),
      'par_citzen_id'=>$this->input->post('par_citzen_id'),
      'par_relative_id'=>$this->input->post('par_relative_id'),
      'religion_id'=>$this->input->post('religion_id'),
      'curr_id'=>$this->input->post('curr_id'),
      'std_id'=>$this->input->post('std_id'),
      'race_id'=>$this->input->post('race_id'),
      'num_credit'=>$this->input->post('num_credit'),
      'passport_number'=>$this->input->post('passport_number'),
      'passport_startdate'=>$this->input->post('passport_startdate'),
      'passport_enddate'=>$this->input->post('passport_enddate'),
      'passport_status'=>$this->input->post('passport_status'),
    );
    $this->db->insert('uoc_student', $data);
  }
}
