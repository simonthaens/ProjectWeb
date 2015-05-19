<?php

class default_Controller extends CI_Controller{	
	public function home($page = 'home')
	{
		$this->load->helper('url');
		
		if(!file_exists('application/views/'.$page.'.php')){
			show_404();
		}
		
		$this->load->view('template/nav');
			$this->load->view($page);
			$this->load->view('contact');
			$this->load->view('template/banner');
			$this->load->view('template/footer');
		
		
		//$data['title'] = 'HET WERKT';
		
		/*$this->load->view('template/view_header', $data);
		$this->load->view('view_home');
		$this->load->view('template/view_contact');		
		$this->load->view('template/view_footer');*/
	}	
	
	public function about($page = 'about')
	{
		$this->load->helper('url');
		
		if(!file_exists('application/views/'.$page.'.php')){
			show_404();
		}
		
		$this->load->view('template/nav');
		$this->load->view($page);
		$this->load->view('template/banner');
		$this->load->view('template/footer');
	}	
	
		public function events($page = 'events')
	{
		$this->load->helper('url');
		
		if(!file_exists('application/views/'.$page.'.php')){
			show_404();
		}
		
		$this->load->view('template/nav');
		$this->load->view($page);
		$this->load->view('template/banner');
		$this->load->view('template/footer');
	}
	
	
	
	
}

?>

