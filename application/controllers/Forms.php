<?php

class Forms extends CI_Controller
{


    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();

        /*load database libray manually*/
        $this->load->database();

        /*load Model*/
        $this->load->model('Form_model');
    }
    /*Display*/
    public function displaydata()
    {
        $result['data'] = $this->Form_model->display_records();
        $this->load->view('views/forms/form', $result);
    }


    public function view($form = 'home')
    {
        if (!file_exists(APPPATH . 'views/forms/' . $form . '.php')) {
            show_404();
        }


        $data['title'] = ucfirst($form);
        $data['data'] = $this->Form_model->display_records();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('forms/' . $form, $data);
        $this->load->view('templates/footer');
    }
}
