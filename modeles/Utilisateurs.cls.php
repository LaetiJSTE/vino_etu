<?php

class Utilisateur extends Modele{

    /**
     * Prend le courriel de l'utilisateur logé
     */
    public function un($courriel)
    {
        return $this->lireUn(
            "SELECT * FROM utilisateur 
                    WHERE uti_courriel=:courriel",
            ['courriel' => $courriel]
        );
    }

     /**
     * requete SQL INSERT - ajout d'un utilisateur avec la fonction creer  (modele)
     */
 /*    public function ajouter()
    {
      
        $this->creer(
            "INSERT INTO utilisateur (uti_mdp, uti_nom, uti_courriel,uti_role_id)
                    VALUES (:mdp,:nom,:courriel,1)",
            [
                'mdp'       =>  password_hash($uti_mdp, PASSWORD_DEFAULT),
                'nom'       => $uti_nom,
                'courriel'  => $uti_courriel,
            ]
        );
        return $uti_id;
    } */

}
