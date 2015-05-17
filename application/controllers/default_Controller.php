<?php

class default_Controller extends CI_Controller{	
	public function home($page = 'home')
	{
		if(!file_exists('application/views/'.$page.'.php')){
			show_404();
		}
		
		$this->load->view($page);
		
		
		//$data['title'] = 'HET WERKT';
		
		/*$this->load->view('template/view_header', $data);
		$this->load->view('view_home');
		$this->load->view('template/view_contact');		
		$this->load->view('template/view_footer');*/
	}	
}

?>

