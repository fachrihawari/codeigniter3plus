<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('parser');
	    $this->load->helper('url');

	    $this->data['base'] = 'http://ci.dev';
	    $this->data['controller'] = $this->router->fetch_class();
	    $this->data['method'] = $this->router->fetch_method();


		$this->_body = $this->parser->parse('main/body.html', $this->data, true);
		$this->_header = $this->parser->parse('main/header.html', $this->data, true);
		$this->_footer = $this->parser->parse('main/footer.html', $this->data, true);
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */