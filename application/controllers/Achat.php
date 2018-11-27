<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/11/2018
 * Time: 17:24
 */

class Achat extends CI_Controller
{
    public function index()
    {
        $this->afficherListe();
    }

    public function afficherListe()
    {
        $this->load->view('header');
        $this->load->view('achat/a_liste');
    }

    public function ajouter()
    {

    }

    public function modifier()
    {

    }

    public function afficherDetail()
    {

    }

    public function ajoutRapide()
    {

    }

    public function aide()
    {

    }

}