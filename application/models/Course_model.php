<?php

class Course_model extends CI_Model {
        public $sigle;
        public $name;
        public $credits;

        function __construct()
        {
            parent::__construct();
        }

        public function get_all()
        {
                $this->db->select('sigle, name, credits');
                return $this->db->get('Courses')->result();
        }

        public function get_one($sigle)
        {
                $this->db->select('sigle, name, credits');
                $this->db->where('sigle', $sigle);
                return $this->db->get('Courses')->row();
        }
}