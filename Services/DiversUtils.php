<?php

namespace App\Services;

use App\Entity\CompteurmatriculeEleve;
use Doctrine\ORM\EntityManagerInterface;

class DiversUtils {

    public function numeroMatriculeEleve(EntityManagerInterface $entityManager)
    {
        $numCompteur = 0;

        //on récupère lde dernier enregistrement de la table compteur eleve       
        $last_numCompteur=$entityManager->getRepository(CompteurmatriculeEleve::class)->findBy(array(),array('id'=>'desc'),1,0);

        if(count($last_numCompteur)>0){
            $numCompteur= $last_numCompteur[0]->getId();
        }

        $numCompteur++;

        $sNumCompteur=strval($numCompteur);
        $zeros="000000000";
        $zeros=substr($zeros,0,10-strlen($sNumCompteur));
        $numeroMatroculeSuivant=$zeros.$sNumCompteur;

        return $numeroMatroculeSuivant;
    }
}

