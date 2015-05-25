<?php 

class Join_Controller extends CI_Controller {
               
public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
    }

    function index()
    {
        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|callback_alpha_space_only');
        $this->form_validation->set_rules('firstName', 'First Name', 'trim|required|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('school', 'University/School', 'trim|required');
        $this->form_validation->set_rules('study', 'Field of Study', 'trim|required');
        $this->form_validation->set_rules('motivation', 'Motivation', 'trim|required');
        $this->form_validation->set_rules('help', 'Help', 'trim|required');



        //run validation on form input.
        if ($this->form_validation->run() == FALSE)
        {
            $page = 'about';

            //validation fails
            $this->load->helper('url');
        
            if(!file_exists('application/views/'.$page.'.php')){
                show_404();
            }
            
            $this->load->view('template/nav');
            $this->load->view($page);
            $this->load->view('template/banner');
            $this->load->view('template/footer');
        
        }
        else
        {
            //get the form data
            $name = $this->input->post('name');
            $firstName = $this->input->post('firstName');
            $from_email = $this->input->post('email');
            $school = $this->input->post('school');
            $study = $this->input->post('study');
            $motivation = $this->input->post('motivation');
            $help = $this->input->post('help');
            $subject = "Someone wants to join your team!";
           
            //set to_email id to which you want to receive mails
            $to_email = "joshua.gielen@gmail.com";

            //configure email settings
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smpt_user' => 'joshua.gielen@gmail.com',
                'smpt_pass' => 'AD7abyrf'
            );

            //load library
            $this->load->library('email',$config); 
            $this->email->set_newline("\r\n");

            //send mail
            $this->email->from('joshua.gielen@gmail.com', $firstName . " " . $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message("From: " . $firstName . " " . $name . "\n" . 
                "Email: " . $from_email . "\n" .
                "School: " . $school  . "\n" .
                "Study: " . $study . "\n" .
                "Motivation: " . $motivation . "\n" .
                "Help: " . $help  
                );

            if($this->email->send()){
                $url = base_url() . "Default_Controller/about#join" ;
                redirect($url);
            }else{
                show_error($this->email->print_debugger());
            }
        }

    }
    
    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }


}
?>