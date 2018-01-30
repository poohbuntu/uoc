<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

		$this->load->model('Students');
  }

	public function index()
	{
		$this->load->view('student/index');
	}

	public function add_student()
	{
		$data["provinces"]=$this->Students->getAllProvince();
    $data["races"]=$this->Students->getAllRace();
    $data["nations"]=$this->Students->getAllNation();
    $data["facs"]=$this->Students->getAllFac();
    $data["univs"]=$this->Students->getAllUniv();
    $data["stds"]=$this->Students->getAllStd();
    $data["deforms"]=$this->Students->getAllDeform();
    $this->load->view('student/add_form',$data);
  }


  public function add()
  {
    $this->Students->addStudent();
    redirect('student/index');
  }
}
