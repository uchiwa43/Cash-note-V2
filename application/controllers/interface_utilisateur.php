<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/11/2018
 * Time: 15:17
 */

class interface_utilisateur extends CI_Controller
{
    public function index()
    {
        $this->connexion();
    }

    public function connexion()
    {
        $this->load->view('i_connexion');
    }

    public function presentation()
    {
        $this->load->view('header');
        $this->load->view('i_presentation');
        $this->load->view('footer');
    }

    public function inscription()
    {
        $this->load->view('header');
        $this->load->view('i_inscription');
        $this->load->view('footer');
    }

    //$id
    public function main_menu()
    {
        $this->load->view('header');
        $this->load->view('i_main_menu');
        $this->load->view('footer');
    }

}