<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Philo\Blade\Blade;

class MY_Loader extends CI_Loader {

	public function __construct()
	{
		parent::__construct();

		define('EXT_BLADE', '.blade.php');
	}

	public function blade($file, $vars = array())
	{
		

		$blade = new Blade(VIEWPATH, CACHEPATH);
		echo $blade->view()->make($file, $vars)->render();
	}

}

/* End of file MY_Loader.php */
/* Location: ./application/core/MY_Loader.php */