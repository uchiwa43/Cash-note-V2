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
        $this->liste();
    }
    public function liste()
    {
        echo "Ceci est la liste des achats, vu depuis le formulaire<br/>";
        $this->load->view('achat/a_liste');
    }
}