<?php 
    class student_model extends CI_Model {
        public function insert_student($data) {
            return $this->db->insert('students',$data);
        }

        public function get_students(){
            return $this->db->get('students')->result();
        }
    }
?>