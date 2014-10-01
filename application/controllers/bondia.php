<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bondia extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->config->load('codeigniterhelloworld');
	}

	public function index()
	{
		$this->greetings('name');
	}

	public function greetings($name)
	{
		$data = array();

		$data['parametre1'] = $name;
		$data['parametre2'] = $this->config->item('academic_period');

		$this->load->view('greetings',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */