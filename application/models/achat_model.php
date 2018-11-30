<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/11/2018
 * Time: 17:29
 */

class achat_model extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function getAllAchats(){
        $this->db->select('*');
        $this->db->from('achat');
        return $this->db->get()->result();
    }

    public function getAchats(){
        $query="
        SELECT a.id,a.libelle, c.libelle AS categorie, etat.libelle AS etat, prix_achat_reel AS reel, prix_achat_prevu AS prevu, 
        mp.libelle AS moyen_payement, date_achat_reelle, date_debit, ep.libelle as vendeur, site_url_produit
        FROM achat a
        LEFT JOIN etat ON etat.id = a.id_etat
        LEFT JOIN categorie c on c.id = a.id_categorie
        LEFT JOIN moyen_payement mp ON mp.id = a.id_moyen_payement
        LEFT JOIN entreprise_personne ep ON ep.id = a.id_entr_pers
        ";

        $result = $this->db->query($query)->result();
        return $result;
    }
    /*
        $query="
        SELECT ft.titre, ft.id, ft.id_categorie, ft.id_etat, count(fc.id) AS nb_commentaire,
            (SELECT max(date_crea)FROM forum_commentaire WHERE id_topic=ft.id ) AS last_comment_date
        FROM forum_topic ft
        LEFT JOIN forum_commentaire fc on fc.id_topic = ft.id
        WHERE ft.id_categorie =$id_categorie AND (ft.id_etat=1 OR ft.id_etat=6)
        GROUP BY ft.id
        ORDER BY ft.id_etat, ft.date_creation DESC ";

        $result = $this->db->query($query)->result();
        return $result;
    */

    public function getAchatsSommeTotale(){
        $query=" 
        SELECT SUM(prix_achat_reel) AS valeur_totale
        FROM achat
        WHERE id_etat=1";
        $result = $this->db->query($query)->row();
        return $result;
    }
}