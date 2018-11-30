<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/11/2018
 * Time: 17:24
 */

class Achat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('achat_model','model');
    }

    public function index(){
        $this->afficherListe();
    }

    public function afficherListe()
    {
        $data['achats'] = $this->model->getAchats();
        $data['total'] = $this->model->getAchatsSommeTotale();
        $this->layout->view('achat/a_liste',$data);
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
        $this->layout->ajouter_js('fill_fields_achat_rapide');
        $this->layout->view('achat/a_ajout_rapide');
    }

    public function test_model()
    {
        $this->load->model('achat_model','model');
/*
        echo '<pre>';
        print_r($this->model->getAchatsSommeTotale());
        echo '</pre>';
*/

        $data['achats'] = $this->model->getAchats();
        $data['total'] = $this->model->getAchatsSommeTotale();

        $this->layout->view('achat/test_model',$data);
    }

    public function aide()
    {
    }

}