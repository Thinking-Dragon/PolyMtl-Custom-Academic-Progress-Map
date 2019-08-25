<?php

class Degree_model extends CI_Model {
        public $name;

        function __construct()
        {
            parent::__construct();
        }

        public function get_all()
        {
                $this->db->select('short_name');
                return $this->db->get('Degrees')->result();
        }

        public function get_one($short_name)
        {
                $this->db->select('name, short_name');
                $this->db->where('short_name', $short_name);
                return $this->db->get('Courses')->row();
        }
}