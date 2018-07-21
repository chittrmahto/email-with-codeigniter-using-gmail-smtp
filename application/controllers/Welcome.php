<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	function general()
	{
		$data['layout']= 'public/layout/layout';
		$data['header']= 'public/layout/header';
		$data['footer']= 'public/layout/footer';
		return $data;
	}
	public function index()
	{
		$data = $this->general();
		
		// Set SMTP Configuration
        $emailConfig = [
            'protocol' => 'smtp', 
            'smtp_host' => 'ssl://smtp.googlemail.com', 
            'smtp_port' => 465, 
            'smtp_user' => 'yourgmailaccount@gmail.com', 
            'smtp_pass' => 'YourGmailPassword', 
            'mailtype' => 'html', 
            'charset' => 'iso-8859-1'
        ];

        // Set your email information
        $from = [
            'email' => 'fromemailaddress@gmail.com',
            'name' => 'from name'
        ];
       
        $subject = 'Your gmail subject here';
      	$message = 'Type your gmail message here';
        // Load CodeIgniter Email library
        $this->load->library('email', $emailConfig);
        // Sometimes you have to set the new line character for better result
        $this->email->initialize($emailConfig);
        $this->email->set_newline("\r\n");
        // Set email preferences
        $this->email->from($from['email'], $from['name']);
        $this->email->to('toEmail@example.com');
        $this->email->subject($subject);
        $this->email->message($message);
        // Ready to send email and check whether the email was successfully sent
        if (!$this->email->send()) {
            // Raise error message
            show_error($this->email->print_debugger());
        } else {
            // Show success notification or other things here
            echo 'Success to send email';
        }

		$data['pagename'] = "home";
		$data['pagetitle'] = "";
		$data['metadesc'] = "";
		$data['metakey'] = "";
		$data['content'] = 'public/home/home';
		$this->load->view('public/mainpage', $data);
	}
	
}