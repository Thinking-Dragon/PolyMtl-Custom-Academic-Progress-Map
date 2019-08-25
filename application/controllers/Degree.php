<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Degree extends CI_Controller {
    private $model_name = "Degree_model";

	public function get_all()
	{
        $this->load->model($this->model_name);
        $data = $this->{$this->model_name}->get_all();
        echo json_encode($data);
    }
    
    public function get_one($name)
    {
        $this->load->model($this->model_name);
        $data = $this->{$this->model_name}->get_one($name);
        echo json_encode($data);
    }
}
