<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bondia extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->config->load('codeigniterhelloworld');

		$this->load->helper('url');
	}

	public function index()
	{
		$this->greetings('name');
	}

	public function greetings1()
	{

		$data = array();

		$nom = $this->input->get_post('nom');

		$data['nom'] = $nom;

		$this->load->view('greetings',$data);
	
	}

	public function greetings($name)
	{
		$data = array();

		$data['parametre2'] = $this->config->item('academic_period');

		$this->load->view('greetings',$data);
	}

	public function example_form()
	{
		$data = array();

		$data['firstname'] = "";
		$data['lastname'] = "";

		if (isset($_POST))
		{

			$data['firstname'] = $this->input->post("firstname");
			$data['lastname'] = $this->input->post("lastname");

		}

		$this->load->view('example_form',$data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */