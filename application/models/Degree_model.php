<?php

class Degree_model extends CI_Model {
        public $name;

        function __construct()
        {
            parent::__construct();
        }

        public function get_all()
        {
                $this->db->select('name');
                return $this->db->get('Degrees')->result();
        }

        public function get_one($name)
        {
                $this->db->select('name');
                $this->db->where('name', $name);
                return $this->db->get('Courses')->row();
        }
}