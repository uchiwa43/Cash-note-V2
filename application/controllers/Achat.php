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
        $this->layout->view('achat/a_liste');
    }

    public function ajouter()
    {
        $this->layout->ajouter_js('show_fields_achat');
        $this->layout->view('achat/a_ajout');
        /*
        $this->layout->views('achat/a_liste')
        ->view('achat/a_ajout');*/
    }

    public function modifier()
    {

        $this->layout->ajouter_js('show_fields_achat');
        $this->layout->view('achat/a_modif');
    }

    public function afficherDetail()
    {
        $this->layout->view('achat/a_detail');

    }

    public function ajoutRapide()
    {

    }

    public function aide()
    {

    }

}