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

        public function get_all_from_degree($degree_short_name)
        {
                $this->db->select('sigle, name, credits');
                $this->db->join('DegreesCourses', 'DegreesCourses.idCourse = Courses.idCourse');
                $this->db->from('Courses');
                return $this->db->get()->result();
        }

        public function get_one($sigle)
        {
                $this->db->select('sigle, name, credits');
                $this->db->where('sigle', $sigle);
                return $this->db->get('Courses')->row();
        }
}