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
                return $this->db->get('Courses')->result();
        }

        public function get_one($sigle)
        {
                $this->db->where('sigle', $sigle);
                return $this->db->get('Courses')->row();
        }
}