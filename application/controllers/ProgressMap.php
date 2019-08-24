<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgressMap extends CI_Controller {
    private $course_model = "Course_model";

    public function display()
    {
        $this->load->model($this->course_model);

        $this->load->view('progress_map', ['courses' => $this->{$this->course_model}->get_all()]);
    }
}
