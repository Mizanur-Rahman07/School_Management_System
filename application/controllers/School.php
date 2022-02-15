<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {


	public function category()
	{

		if($this->input->method()=='POST')
		{
			print_r($_POST);
		}
		else
		{

        
		$this->load->view('admin/category');
	}
}
}
?>




