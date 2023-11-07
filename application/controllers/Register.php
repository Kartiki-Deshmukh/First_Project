<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function register(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname','First Name', 'required');
        $this->form_validation->set_rules('lname','Last Name', 'required');
        $this->form_validation->set_rules('email','Email', 'required');
        $this->form_validation->set_rules('password','Password', 'required');
        $this->form_validation->set_rules('contact','Contact Number', 'required');

        if($this->form_validation->run() == false){

            $this->load->view('registerview');

        }else{

            $this->load->model('register_model');

            $formArray['fname'] = $this->input->post('fname');
            $formArray['lname'] = $this->input->post('lname');
            $formArray['email'] = $this->input->post('email');
            $formArray['password'] = md5($this->input->post('password'));
            $formArray['contact'] = $this->input->post('contact');
            $formArray['created_at'] = date ('Y-m-d H:i:s');
            $formArray['updated_at'] = date ('Y-m-d H:i:s');


            $this->register_model->create($formArray);

            $this->session->set_flashdata('msg', 'Your information registered successfully');
            redirect (base_url(). 'index.php/Register/register');
        }

    }

};


