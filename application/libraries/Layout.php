<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/11/2018
 * Time: 15:15
 */

class Layout
{
    private $CI;
    private $var = array(); //contient le titre, le charset, les URL des fichiers css et js, et le HTML de la view demandée
    private $theme = 'connected';

    public function __construct()
    {
        $this->CI = get_instance();

        $this->var['output']='';

        //Nom de la méthode ' - '  nom de la classe
        $this->var['titre'] =   ucfirst($this->CI->router->fetch_method())  . " - " . ucfirst($this->CI->router->fetch_class());

        //Défini dans le fichier config.php
        $this->var['charset'] = $this->CI->config->item('charset');

        $this->CI->load->helper('assets');

        $this->var['css'] = array();
        $this->var['js'] = array();
    }


    /* ***méthodes pour charger les vues****/

    /**
     * Permet d'afficher une vue dans un layout.
     * @param $name Nom de la view à inclure
     * @param array $data
     */
    public function view($name, $data=array())
    {
        $this->var['output'] .= $this->CI->load->view($name,$data, true);

        $this->CI->load->view('../theme/'. $this->theme , $this->var);
    }

    /**
     * Permet de sauvegarder le contenu d'une ou plusieurs vues dans une variable,
     * sans l'afficher immédiatement. Pour l'affichage, il faudra utiliser la méthode view.
     * @param $name Nom de la view à inclure
     * @param array $data Variables dans la page HTML
     * @return
     */
    public function views($name, $data=array())
    {
        $this->var['output'] .= $this->CI->load->view($name,$data, true);
        return $this;
    }
    /***************************************/


    public function setTitre($titre)
    {
        if(is_string($titre) AND !empty($titre))
        {
            $this->var['titre'] = $titre;
            return true;
        }
        return false;
    }

    public function setTheme($theme)
    {
        if(is_string($theme) AND !empty($theme) AND file_exists('./application/theme/' . $theme . '.php'))
        {
            $this->theme = $theme;
            return true;
        }
        return false;
    }


    /*Méthodes pour ajouter des feuilles de CSS et de JavaScript*/

    public function ajouter_css($nom)
    {

        if(is_string($nom) AND !empty($nom) AND file_exists("./assets/css/" . $nom . ".css"))
        {
            $this->var['css'][]= css_url($nom);
            return true;
        }
        return false;
    }

    public function ajouter_js($nom)
    {
        if(is_string($nom)){
            if(!empty($nom)){
                if (file_exists("assets/js/" . $nom . ".js")){
                    $this->var['js'][] = js_url($nom);
                    return true;
                }
                return "le fichier n'existe pas";
            }
            return 1;
        }
        return 0;
/*
        if(is_string($nom) AND !empty($nom) AND file_exists(".assets/js/" . $nom . ".js"))
        {
            $this->var['js'][] = js_url($nom);
            return true;
        }
        return false;
*/
    }

}