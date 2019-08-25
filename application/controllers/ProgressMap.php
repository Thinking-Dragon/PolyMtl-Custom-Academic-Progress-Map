<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgressMap extends CI_Controller {
    private $course_model = "Course_model";

    public function display($degree_short_name)
    {
        $this->load->model($this->course_model);

        $this->load->view('progress_map', ['courses' => $this->{$this->course_model}->get_all_from_degree($degree_short_name)]);
    }
}
