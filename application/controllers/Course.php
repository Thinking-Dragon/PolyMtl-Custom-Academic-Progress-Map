<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
    private $model_name = "Course_model";

	public function get_all()
	{
        $this->load->model($this->model_name);
        $data = $this->{$this->model_name}->get_all();
        echo json_encode($data);
    }
    
    public function get_one($sigle)
    {
        $this->load->model($this->model_name);
        $data = $this->{$this->model_name}->get_one($sigle);
        echo json_encode($data);
    }
}
