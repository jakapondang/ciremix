<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function index($params)
	{
		$this->load->library('twig');
		
		$data['page']['title'] = "Twig Test Template";
		$data['page']['content'] = "<p>The code you are seeing is being generated by Ci Twig, how swell is that? You can have whatever you want in the content.</p><p>Here is another paragraph just to show the awesome content working in Twig.</p>";
		
		// Load our Twig template
		$data['test_word'] = $params;
		
		$this->twig->parse('index.twig', $data);
		//$this->load->view('test',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */