<?php

namespace Pg\GsbFraisBundle\Controller;

require_once 'include\Class.pdogsb.inc.php';
require_once 'include\Fct.inc.php';

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \PdoGsb;

class HomeController extends Controller {

    public function indexAction() {
        // ATTENTION CHANGEMENTS A VERIFIER
        $session = $this->get('session');
       // if (estconnecte($session)) {
       if ($session->get('id') != null) {
           if ($session->get('role') == 'visiteur') {
              return $this->render('PgGsbFraisBundle:Home:pageAccueil.html.twig'); 
           }
           else if ($session->get('role') == 'comptable') {
               return $this->render('PgGsbFraisBundle:Home:pageAccueilCompta.html.twig'); 
           }
            
        }
        else
            return $this->render('PgGsbFraisBundle:Home:connexion.html.twig');
    }

    public function validerconnexionAction() {
        $session = $this->get('session');
        //$session= $this->get('request')->getSession(); 
        //$login = $session->get('login');
        //$mdp = $session->get('mdp');

        $request = $this->get('request');
        // les variables sont passées par un formulaire donc en "POST"
        // on utilise le service request
        $login = $request->request->get('login');
        $mdp = $request->request->get('mdp');
        $pdo = PdoGsb::getPdoGsb();

        $visiteur = $pdo->getInfosVisiteur($login, $mdp);
        $comptable = $pdo->getInfosComptable($login, $mdp);
        if (!is_array($visiteur) && !is_array($comptable)) {
            return $this->render('PgGsbFraisBundle:Home:connexion.html.twig', array(
                        'message' => 'Erreur de login ou de mot de passe ',
            ));
        } else {
            if (is_array($visiteur)) {

                $session->set('id', $visiteur['id']);
                $session->set('nom', $visiteur['nom']);
                $session->set('prenom', $visiteur['prenom']);
                $session->set('role', 'visiteur');
                return $this->render('PgGsbFraisBundle:Home:pageAccueil.html.twig');
            } else if (is_array($comptable)) {
                $session->set('id', $comptable['id']);
                $session->set('nom', $comptable['nom']);
                $session->set('prenom', $comptable['prenom']);
                $session->set('role', 'comptable');
                return $this->render('PgGsbFraisBundle:Home:pageAccueilCompta.html.twig');
            }
        }
    }

    public function deconnexionAction() {
        // ATTENTION CHANGEMENTS A VERIFIER
        $session = $this->get('session');
        $session->clear();
        return $this->render('PgGsbFraisBundle:Home:connexion.html.twig');
    }
    
    public function SuivreFraisAction(){
                return $this->render('PgGsbFraisBundle:Compta:SuivreFrais.html.twig');
    }
    
     public function ValiderFraisAction(){
                return $this->render('PgGsbFraisBundle:Compta:ValiderFrais.html.twig');

    }

}
