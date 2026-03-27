<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load resources
        $this->load->model('student_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index() {
        $data['student'] = $this->student_model->get_students();
        $this->load->view('student_form', $data);
    }

    public function save() {
        // Prepare the data from the form
        $data = array(
            'student_no' => $this->input->post('student_no'),
            'first_name' => $this->input->post('first_name'),
            'last_name'  => $this->input->post('last_name'),
            'course'     => $this->input->post('course')
        );

        // Send to model
        if($this->student_model->insert_student($data)) {
            redirect('student');
        } else {
            echo "Failed to save record.";
        }
    }
} 