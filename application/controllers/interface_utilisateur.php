<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/11/2018
 * Time: 15:17
 */

class interface_utilisateur extends CI_Controller
{

    public  function __construct()
    {
        parent::__construct();
        //inclusion de la library layout dans l'autoload
        //$result = $this->layout->ajouter_css('not_connected');
        $result = $this->layout->setTheme('not_connected');
    }

    public function index()
    {
        $this->connexion();
    }

    public function connexion()
    {
        $this->layout->setTitre("Connexion");
        $this->layout->view('i_connexion');
    }

    public function presentation()
    {
        /*$this->load->view('header');
        $this->load->view('i_presentation');
        $this->load->view('footer');*/
        $this->layout->setTitre("Présentation");
        $this->layout->view('i_presentation');
    }

    public function inscription()
    {
        $this->layout->setTitre("Inscription");
        $this->layout->view('i_inscription');
    }

    //$id pour connaitre les droits des modules accessibles
    public function main_menu()
    {
        $result = $this->layout->setTheme('connected');

        $this->layout->setTitre("Menu principal");
        $this->layout->view('i_main_menu');
    }

}