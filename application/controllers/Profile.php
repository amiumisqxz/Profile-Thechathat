<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    
    public function index()
	{
		$this->load->view('css');
		$this->load->view('index_view');
		$this->load->view('js');
	}
	public function about()
	{
		$this->load->view('css');
		$this->load->view('about_view');
		$this->load->view('js');
	}
	public function workings()
	{
		$this->load->view('css');
		$this->load->view('workings_view');
		$this->load->view('js');
	}
}