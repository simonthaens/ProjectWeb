<?php 

class Contact_controller extends CI_Controller {
               
public function __construct()
    {
        parent::__construct();
       
    }

    function index()
    {
        $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smpt_user' => 'joshua.gielen@gmail.com',
                'smpt_pass' => 'AD7abyrf'
        );



        $this->load->library('email',$config); 
        $this->email->set_newline("\r\n");

        $this->email->from('joshua.gielen@gmail.com', 'Joshua Gielen');
        $this->email->to('joshua.gielen@gmail.com');
        $this->email->subject('test');
        $this->email->message('this is a test, hope its working');

        if($this->email->send()){
            echo "email successfully send";
        }else{
            show_error($this->email->print_debugger());
        }
/*

        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        //run validation on form input
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
        
            //google maps
            $this->load->library('googlemaps');
            $config['center'] = 'UHasselt Diepenbeek';
            $config['zoom'] = '15';
            $this->googlemaps->initialize($config);
            $marker = array();
            $marker['position'] = 'UHasselt Diepenbeek';
            $this->googlemaps->add_marker($marker);
            $data['map'] = $this->googlemaps->create_map();

            $this->load->view('template/nav');
            $this->load->view($page='home');
            $this->load->view('contact',$data);
            $this->load->view('template/banner');
            $this->load->view('template/footer');


            
        }
        else
        {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = "Message from contact form TEDx";
            $message = $this->input->post('message');

            //set to_email id to which you want to receive mails
            $to_email = 'joshua.gielen@gmail.com';

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'joshua.gielen@gmail.com';
            $config['smtp_pass'] = 'AD7abyrf';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);                        

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect('contactform/index');
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('contactform/index');
            }
        }*/
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