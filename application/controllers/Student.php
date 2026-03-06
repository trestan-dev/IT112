<?php 
    class Student extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('student_model');
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
        }  

        public function index(){
            $data['students']=$this->student_model->get_students();
            $this->load->view('student_form', $data);
        }
    }
?>