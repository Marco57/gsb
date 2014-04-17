<?php

namespace Pg\GsbFraisBundle\Controller;

require_once 'include/fct.inc.php';
require_once 'include/class.pdogsb.inc.php';

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \PdoGsb;

class ValiderFraisController extends Controller {

    public function IndexAction() {
        $pdo = PdoGsb::getPdoGsb();
        $request = $this->getRequest();

        $aValider = "false";
        $lesVisiteurs = $pdo->getLesVisiteurs();
        $idVisiteur = $request->request->get('lstVisiteur');
        $leMois = $request->request->get('lstMois');
        // Si on n'a pas sélectionné de visiteur
        if ($idVisiteur == null) {
            return $this->render('PgGsbFraisBundle:Compta:ValiderFrais.html.twig', array('lesVisiteurs' => $lesVisiteurs,
                        'leVisiteur' => NULL,
                        'lesMois' => NULL,
                        'leMois' => NULL,
                        'lesfraisforfait' => NULL,
                        'lesfraishorsforfait' => NULL,
                        'libetat' => NULL,
                        'montantvalide' => NULL,
                        'nbjustificatifs' => NULL,
                        'datemodif' => NULL));
        }
        // Si on a sélectionné un visiteur, on le renvoie dans la liste 
        // et on affiche les mois disponibles
        else if ($idVisiteur != null && $leMois == null) {
            $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
            return $this->render('PgGsbFraisBundle:Compta:ValiderFrais.html.twig', array('lesVisiteurs' => $lesVisiteurs,
                        'leVisiteur' => $idVisiteur,
                        'lesMois' => $lesMois,
                        'leMois' => NULL,
                        'lesfraisforfait' => NULL,
                        'lesfraishorsforfait' => NULL,
                        'libetat' => NULL,
                        'montantvalide' => NULL,
                        'nbjustificatifs' => NULL,
                        'datemodif' => NULL));
        }
        // Si on a sélecionné un visiteur et un mois, on les renvoie dans
        // leur liste respective et on affiche la liste des frais
        else if ($idVisiteur != null && $leMois != null) {
            $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur, $leMois);
            $lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur, $leMois);
            $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur, $leMois);
            $libEtat = $lesInfosFicheFrais['libEtat'];
            $montantValide = $lesInfosFicheFrais['montantValide'];
            $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
            $dateModif = $lesInfosFicheFrais['dateModif'];
            $dateModif = dateAnglaisVersFrancais($dateModif);
            if ($aValider == "true") {
                $pdo->majEtatFicheFrais($idVisiteur, $leMois, "VA");
            }
            $aValider = "true";
            return $this->render('PgGsbFraisBundle:Compta:ValiderFrais.html.twig', array('lesVisiteurs' => $lesVisiteurs,
                        'leVisiteur' => $idVisiteur,
                        'lesMois' => $lesMois,
                        'leMois' => $leMois,
                        'lesfraisforfait' => $lesFraisForfait,
                        'lesfraishorsforfait' => $lesFraisHorsForfait,
                        'libetat' => $libEtat,
                        'montantvalide' => $montantValide,
                        'nbjustificatifs' => $nbJustificatifs,
                        'datemodif' => $dateModif));
        }
    }

    public function AnnulerAction() {
        $pdo = PdoGsb::getPdoGsb();
        $request = $this->getRequest();
        
        $lesVisiteurs = $pdo->getLesVisiteurs();
        $idVisiteur = $request->request->get('lstVisiteur');
        $leMois = $request->request->get('lstMois');
        if ($idVisiteur != null && $leMois != null) {
            $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur, $leMois);
            $lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur, $leMois);
            $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur, $leMois);
            $libEtat = $lesInfosFicheFrais['libEtat'];
            $montantValide = $lesInfosFicheFrais['montantValide'];
            $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
            $dateModif = $lesInfosFicheFrais['dateModif'];
            $dateModif = dateAnglaisVersFrancais($dateModif);
            // Annulation de la validation !
           // $pdo->majEtatFicheFrais($idVisiteur, $leMois, "RB");

            return $this->render('PgGsbFraisBundle:Compta:ValiderFrais.html.twig',
                    array('lesVisiteurs' => $lesVisiteurs,
                        'leVisiteur' => $idVisiteur,
                        'lesMois' => $lesMois,
                        'leMois' => $leMois,
                        'lesfraisforfait' => $lesFraisForfait,
                        'lesfraishorsforfait' => $lesFraisHorsForfait,
                        'libetat' => $libEtat,
                        'montantvalide' => $montantValide,
                        'nbjustificatifs' => $nbJustificatifs,
                        'datemodif' => $dateModif));
        }
    }

}
