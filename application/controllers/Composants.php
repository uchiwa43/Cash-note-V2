<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/11/2018
 * Time: 17:31
 */

class Composants extends CI_Controller
{

    public function index()
    {
        $this->secondary_menu();
    }

    public function secondary_menu()
    {
        $this->load->view('header');
        $this->load->view('composants/sec_menu');
        $this->load->view('footer');
    }
}