<?php

class Twigtest extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		// Load Twig
		$this->load->library('twig');
		
		$data['page']['title'] = "Twig Test Template";
		$data['page']['content'] = "<p>The code you are seeing is being generated by Ci Twig, how swell is that? You can have whatever you want in the content.</p><p>Here is another paragraph just to show the awesome content working in Twig.</p>";
		
		// Load our Twig template
		$this->twig->parse('twig/index.twig', $data);
	}
	
}