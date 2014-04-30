<?php

/* PgGsbFraisBundle:Compta:ValiderFrais.html.twig */
class __TwigTemplate_d0dc5c76c3b50ba9a13981ca7a5e2efad0a81e6fb430d6521c6a419de5c9c023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PgGsbFraisBundle::accueilCompta.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueilCompta.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_section($context, array $blocks = array())
    {
        // line 3
        echo "
<div id=\"contenu\">
    <h2> Validation des frais </h2>
 <label style=\"text-align:center; width:100%; font-size:20px\"> ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["libValid"]) ? $context["libValid"] : $this->getContext($context, "libValid")), "html", null, true);
        echo " </label>
    <form method =\"POST\">
        <div class=\"corpsForm\">
            ";
        // line 9
        if (((null === (isset($context["leVisiteur"]) ? $context["leVisiteur"] : $this->getContext($context, "leVisiteur"))) || (null === (isset($context["leMois"]) ? $context["leMois"] : $this->getContext($context, "leMois"))))) {
            echo " 
            <p>
                <label for=\"lstVisiteur\" accesskey=\"n\"> Choisir le visiteur : </label>
                <select id=\"lstVisiteur\" name =\"lstVisiteur\" onChange=\"javascript:submit(); this.enable = false;\">
                     ";
            // line 13
            $context["findVisiteur"] = "false";
            // line 14
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesVisiteurs"]) ? $context["lesVisiteurs"] : $this->getContext($context, "lesVisiteurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["unVisiteur"]) {
                // line 15
                echo "                         ";
                if (((isset($context["findVisiteur"]) ? $context["findVisiteur"] : $this->getContext($context, "findVisiteur")) != "true")) {
                    // line 16
                    echo "                        <option selected value =\"\"></option>
                        ";
                    // line 17
                    $context["findVisiteur"] = "true";
                    // line 18
                    echo "                    ";
                }
                // line 19
                echo "                    ";
                $context["visiteur"] = $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "id");
                // line 20
                echo "                    ";
                $context["nomVisiteur"] = $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "nom");
                // line 21
                echo "                    ";
                $context["prenomVisiteur"] = $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "prenom");
                // line 22
                echo "             ";
                if (((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")) == (isset($context["leVisiteur"]) ? $context["leVisiteur"] : $this->getContext($context, "leVisiteur")))) {
                    echo " 
                        <option selected value =\"";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (isset($context["nomVisiteur"]) ? $context["nomVisiteur"] : $this->getContext($context, "nomVisiteur")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["prenomVisiteur"]) ? $context["prenomVisiteur"] : $this->getContext($context, "prenomVisiteur")), "html", null, true);
                    echo "  </option>
                 ";
                    // line 24
                    $context["findVisiteur"] = "true";
                    echo "      
               ";
                } else {
                    // line 26
                    echo "                        ";
                    if ((!(null === (isset($context["nomVisiteur"]) ? $context["nomVisiteur"] : $this->getContext($context, "nomVisiteur"))))) {
                        echo " 
                        <option value =\"";
                        // line 27
                        echo twig_escape_filter($this->env, (isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, (isset($context["nomVisiteur"]) ? $context["nomVisiteur"] : $this->getContext($context, "nomVisiteur")), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, (isset($context["prenomVisiteur"]) ? $context["prenomVisiteur"] : $this->getContext($context, "prenomVisiteur")), "html", null, true);
                        echo "   </option>
                         ";
                    }
                    // line 29
                    echo "                     ";
                }
                // line 30
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unVisiteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    </select>
                </p>
                
            ";
            // line 34
            if ((!(null === (isset($context["leVisiteur"]) ? $context["leVisiteur"] : $this->getContext($context, "leVisiteur"))))) {
                // line 35
                echo "                <p>
                    <label for=\"lstMois\" accesskey=\"n\"> Mois : </label>
                    <select id=\"lstMois\" name =\"lstMois\" onChange=\"javascript:submit();\">
                    ";
                // line 38
                $context["findMois"] = "false";
                // line 39
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lesMois"]) ? $context["lesMois"] : $this->getContext($context, "lesMois")));
                foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
                    // line 40
                    echo "                             ";
                    if (((isset($context["findMois"]) ? $context["findMois"] : $this->getContext($context, "findMois")) != "true")) {
                        // line 41
                        echo "                            <option selected value =\"\"></option>
                             ";
                        // line 42
                        $context["findMois"] = "true";
                        // line 43
                        echo "                    ";
                    }
                    // line 44
                    echo "                    ";
                    $context["mois"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "mois");
                    // line 45
                    echo "                    ";
                    $context["numAnnee"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "numAnnee");
                    // line 46
                    echo "                    ";
                    $context["numMois"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "numMois");
                    // line 47
                    echo "             ";
                    if (((isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")) == (isset($context["leMois"]) ? $context["leMois"] : $this->getContext($context, "leMois")))) {
                        echo " 
                            <option selected value =\"";
                        // line 48
                        echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                        echo "  </option>
                    ";
                        // line 49
                        $context["findMois"] = "true";
                        // line 50
                        echo "                    ";
                    } else {
                        // line 51
                        echo "                            <option value =\"";
                        echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                        echo "  </option>
                     ";
                    }
                    // line 53
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "
                        </select>
                    </p>
            ";
            }
            // line 58
            echo "                    ";
        } else {
            echo " 
                    <input type=\"text\" style=\"display:none\" id=\"txtVisiteur\" name=\"lstVisiteur\" size=\"8\" maxlength=\"256\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["leVisiteur"]) ? $context["leVisiteur"] : $this->getContext($context, "leVisiteur")), "html", null, true);
            echo "\" readonly>
                    <input type=\"text\" style=\"display:none\" id=\"txtMois\" name=\"lstMois\" size=\"8\" maxlength=\"256\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["leMois"]) ? $context["leMois"] : $this->getContext($context, "leMois")), "html", null, true);
            echo "\" readonly>
                     <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerfrais");
            echo "\" title=\"Choisir un autre visiteur\">Choisir un autre visiteur</a>
         ";
        }
        // line 62
        echo " 
                    <p>

                    <div style=\"height: 1px; background-color: silver;
                         margin-left: 30px; margin-right: 30px; margin-bottom: 15px;\"></div>
                         <div class=\"encadre\"> 
";
        // line 68
        if ((!(null === (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait"))))) {
            // line 69
            echo "                                 <table style=\"box-shadow: 1px 1px 3px #999; border-radius: 4px; min-width: 300px; margin-bottom: 30px\">
                                     <caption style=\"font-weight: bold; text-align: left; font-size:18px;\">Frais au forfait :</caption>
                                     <tr>
          ";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                // line 73
                echo "                  ";
                $context["libelle"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "libelle");
                // line 74
                echo "                                             <th style=\"padding:5px\">";
                echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
                echo " </th>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                                
                                             </tr>
                                             <tr>
          ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                // line 80
                echo "                  ";
                $context["quantite"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "quantite");
                // line 81
                echo "                   ";
                $context["idfrais"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "idfrais");
                // line 82
                echo "                                                     <td style=\"padding-left:6px; padding-bottom: 5px; padding-right: 5px;\" ><input type=\"text\" id=\"txtFraisForfait\" name=\"lesFrais[";
                echo twig_escape_filter($this->env, (isset($context["idfrais"]) ? $context["idfrais"] : $this->getContext($context, "idfrais")), "html", null, true);
                echo "]\" size=\"14\" maxlength=\"256\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
                echo "\"  > </td>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                                        
                                                     </tr>

                                                 </table>
                                            ";
        }
        // line 89
        echo "                                             </div>  
";
        // line 90
        if ((!(null === (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait"))))) {
            // line 91
            echo "                                             <div class=\"encadre\"> 

                                                 <table style=\"box-shadow: 1px 1px 3px #999; border-radius: 4px; min-width: 300px;\">
                                                     <captio style=\"font-weight: bold; text-align: left; font-size:18px;\">Hors Forfait </caption>
                                                         <tr>
                                                             <th style=\"padding:5px\">Date</th>
                                                             <th style=\"padding:5px\">Libellé</th>
                                                             <th style=\"padding:5px\">Montant</th>
                                                             <th style=\"padding:5px\">Situation</th> 
                                                         </tr> 
                                                         ";
            // line 101
            $context["i"] = 0;
            // line 102
            echo "                                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                // line 103
                echo "                                                      ";
                $context["id"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "id");
                // line 104
                echo "                                                      ";
                $context["date"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "date");
                // line 105
                echo "                                                      ";
                $context["libelle"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "libelle");
                // line 106
                echo "                                                      ";
                $context["montant"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "montant");
                // line 107
                echo "                                                         <tr>
                                                             <td style=\"padding:5px\"><input type=\"text\" style=\"display:none\" id=\"txtIdHF\" name=\"lesHF[";
                // line 108
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "][0]\" size=\"8\" maxlength=\"256\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" readonly>                                                                   
                                                                 <input type=\"text\" id=\"txtDateHF\" name=\"lesHF[";
                // line 109
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "][1]\" size=\"8\" maxlength=\"256\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
                echo "\"></td>
                                                             <td style=\"padding:5px\"><input type=\"text\" id=\"txtLibelleHF\" name=\"lesHF[";
                // line 110
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "][2]\" size=\"36\" maxlength=\"256\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
                echo "\"></td>
                                                             <td style=\"padding:5px\"><input type=\"text\" id=\"txtMontantHF\" name=\"lesHF[";
                // line 111
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "][3]\" size=\"8\" maxlength=\"256\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
                echo "\"></td>
                                                             <td style=\"padding:5px\">
                                                                 <select id=\"lstSitHF\" name =\"lesHF[";
                // line 113
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "][4]\">
                                                                     <option value =\"VA\">Validé</option>
                                                                     <option value =\"RE\">Refusé</option>
                                                                     <option value =\"SU\">Supprimé</option>
                                                                 </select>
                                                             </td>
                                                         </tr>
                                                         ";
                // line 120
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 121
                echo "                                                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                                                 </table>

                                             </div>  
                                       ";
        }
        // line 126
        echo "
                                             </p>
                                        
                                         </div>
                                         <div class=\"piedForm\">
                                             </p>
                                             <input id = \"ok\" class=\"btn btn-success btn-large\" type=\"submit\" value=\"Valider\" name=\"valider\" size = \"20\">
                                             <input id = \"annuler\" class=\"btn btn-danger btn-large\" type=\"reset\" value=\"Annuler\" name=\"annuler\" size = \"20\"> 
                                             </p>
                                         </div>  
                                     </form> 
                                 ";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Compta:ValiderFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 126,  360 => 122,  354 => 121,  352 => 120,  342 => 113,  335 => 111,  329 => 110,  323 => 109,  317 => 108,  314 => 107,  311 => 106,  308 => 105,  305 => 104,  302 => 103,  297 => 102,  295 => 101,  283 => 91,  281 => 90,  278 => 89,  271 => 84,  260 => 82,  257 => 81,  254 => 80,  250 => 79,  245 => 76,  236 => 74,  233 => 73,  229 => 72,  224 => 69,  222 => 68,  214 => 62,  209 => 61,  205 => 60,  201 => 59,  196 => 58,  190 => 54,  184 => 53,  174 => 51,  171 => 50,  169 => 49,  161 => 48,  156 => 47,  153 => 46,  150 => 45,  147 => 44,  144 => 43,  142 => 42,  139 => 41,  136 => 40,  131 => 39,  129 => 38,  124 => 35,  122 => 34,  117 => 31,  111 => 30,  108 => 29,  99 => 27,  94 => 26,  89 => 24,  81 => 23,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  64 => 18,  62 => 17,  59 => 16,  56 => 15,  51 => 14,  49 => 13,  42 => 9,  36 => 6,  31 => 3,  28 => 2,);
    }
}
