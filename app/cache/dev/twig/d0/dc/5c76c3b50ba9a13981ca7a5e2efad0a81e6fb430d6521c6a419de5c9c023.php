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

    <form method =\"POST\">
        <div class=\"corpsForm\">
            <p>
                <label for=\"lstVisiteur\" accesskey=\"n\"> Choisir le visiteur : </label>
                <select id=\"lstVisiteur\" name =\"lstVisiteur\" onChange=\"javascript:submit();\">
                     ";
        // line 12
        $context["findVisiteur"] = "false";
        // line 13
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesVisiteurs"]) ? $context["lesVisiteurs"] : $this->getContext($context, "lesVisiteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["unVisiteur"]) {
            // line 14
            echo "                         ";
            if (((isset($context["findVisiteur"]) ? $context["findVisiteur"] : $this->getContext($context, "findVisiteur")) != "true")) {
                // line 15
                echo "                        <option selected value =\"\"></option>
                        ";
                // line 16
                $context["findVisiteur"] = "true";
                // line 17
                echo "                    ";
            }
            // line 18
            echo "                    ";
            $context["visiteur"] = $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "id");
            // line 19
            echo "                    ";
            $context["nomVisiteur"] = $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "nom");
            // line 20
            echo "                    ";
            $context["prenomVisiteur"] = $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "prenom");
            // line 21
            echo "             ";
            if (((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")) == (isset($context["leVisiteur"]) ? $context["leVisiteur"] : $this->getContext($context, "leVisiteur")))) {
                echo " 
                        <option selected value =\"";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, (isset($context["nomVisiteur"]) ? $context["nomVisiteur"] : $this->getContext($context, "nomVisiteur")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["prenomVisiteur"]) ? $context["prenomVisiteur"] : $this->getContext($context, "prenomVisiteur")), "html", null, true);
                echo "  </option>
                 ";
                // line 23
                $context["findVisiteur"] = "true";
                echo "      
               ";
            } else {
                // line 25
                echo "                        ";
                if ((!(null === (isset($context["nomVisiteur"]) ? $context["nomVisiteur"] : $this->getContext($context, "nomVisiteur"))))) {
                    echo " 
                        <option value =\"";
                    // line 26
                    echo twig_escape_filter($this->env, (isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (isset($context["nomVisiteur"]) ? $context["nomVisiteur"] : $this->getContext($context, "nomVisiteur")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["prenomVisiteur"]) ? $context["prenomVisiteur"] : $this->getContext($context, "prenomVisiteur")), "html", null, true);
                    echo "   </option>
                         ";
                }
                // line 28
                echo "                     ";
            }
            // line 29
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unVisiteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </select>
                </p>
            ";
        // line 32
        if ((!(null === (isset($context["leVisiteur"]) ? $context["leVisiteur"] : $this->getContext($context, "leVisiteur"))))) {
            // line 33
            echo "                <p>
                    <label for=\"lstMois\" accesskey=\"n\"> Mois : </label>
                    <select id=\"lstMois\" name =\"lstMois\" onChange=\"javascript:submit();\">
                    ";
            // line 36
            $context["findMois"] = "false";
            // line 37
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesMois"]) ? $context["lesMois"] : $this->getContext($context, "lesMois")));
            foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
                // line 38
                echo "                             ";
                if (((isset($context["findMois"]) ? $context["findMois"] : $this->getContext($context, "findMois")) != "true")) {
                    // line 39
                    echo "                            <option selected value =\"\"></option>
                             ";
                    // line 40
                    $context["findMois"] = "true";
                    // line 41
                    echo "                    ";
                }
                // line 42
                echo "                    ";
                $context["mois"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "mois");
                // line 43
                echo "                    ";
                $context["numAnnee"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "numAnnee");
                // line 44
                echo "                    ";
                $context["numMois"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "numMois");
                // line 45
                echo "             ";
                if (((isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")) == (isset($context["leMois"]) ? $context["leMois"] : $this->getContext($context, "leMois")))) {
                    echo " 
                            <option selected value =\"";
                    // line 46
                    echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                    echo "  </option>
                    ";
                    // line 47
                    $context["findMois"] = "true";
                    // line 48
                    echo "                    ";
                } else {
                    // line 49
                    echo "                            <option value =\"";
                    echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                    echo "  </option>
                     ";
                }
                // line 51
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
                        </select>
                    </p>
            ";
        }
        // line 56
        echo "                    <p>

                    <div style=\"height: 1px; background-color: silver;
                         margin-left: 30px; margin-right: 30px; margin-bottom: 15px;\"></div>
                         <div class=\"encadre\"> 
";
        // line 61
        if ((!(null === (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait"))))) {
            // line 62
            echo "                                 <table style=\"box-shadow: 1px 1px 3px #999; border-radius: 4px; min-width: 300px; margin-bottom: 30px\">
                                     <caption style=\"font-weight: bold; text-align: left; font-size:18px;\">Frais au forfait :</caption>
                                     <tr>
          ";
            // line 65
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                // line 66
                echo "                  ";
                $context["libelle"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "libelle");
                // line 67
                echo "                                             <th style=\"padding:5px\">";
                echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
                echo " </th>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                                
                                             </tr>
                                             <tr>
          ";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                // line 73
                echo "                  ";
                $context["quantite"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "quantite");
                // line 74
                echo "                   ";
                $context["idfrais"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "idfrais");
                // line 75
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
            // line 77
            echo "                                                        
                                                     </tr>

                                                 </table>
                                            ";
        }
        // line 82
        echo "                                             </div>  
";
        // line 83
        if ((!(null === (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait"))))) {
            // line 84
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
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                // line 95
                echo "                                                      ";
                $context["date"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "date");
                // line 96
                echo "                                                      ";
                $context["libelle"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "libelle");
                // line 97
                echo "                                                      ";
                $context["montant"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "montant");
                // line 98
                echo "                                                         <tr>
                                                             <td style=\"padding:5px\"><input type=\"text\" id=\"txtDateHF\" name=\"txtDateHF\" size=\"8\" maxlength=\"256\" value=\"";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
                echo "\"></td>
                                                             <td style=\"padding:5px\"><input type=\"text\" id=\"txtLibelleHF\" name=\"txtLibelleHF\" size=\"36\" maxlength=\"256\" value=\"";
                // line 100
                echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
                echo "\"></td>
                                                             <td style=\"padding:5px\"><input type=\"text\" id=\"txtMontantHF\" name=\"txtMontantHF\" size=\"8\" maxlength=\"256\" value=\"";
                // line 101
                echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
                echo "\"></td>
                                                             <td style=\"padding:5px\">
                                                                 <select id=\"lstSitHF\" name =\"lstSitHF\">
                                                                     <option value =\"CL\">Enregistré</option>
                                                                     <option value =\"VA\">Validé</option>
                                                                     <option value =\"RB\">Remboursé</option>
                                                                 </select>
                                                             </td>
                                                         </tr>
                                                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                                 </table>

                                             </div>  
                                       ";
        }
        // line 115
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
        return array (  314 => 115,  308 => 111,  292 => 101,  288 => 100,  284 => 99,  281 => 98,  278 => 97,  275 => 96,  272 => 95,  268 => 94,  256 => 84,  254 => 83,  251 => 82,  244 => 77,  233 => 75,  230 => 74,  227 => 73,  223 => 72,  218 => 69,  209 => 67,  206 => 66,  202 => 65,  197 => 62,  195 => 61,  188 => 56,  182 => 52,  176 => 51,  166 => 49,  163 => 48,  161 => 47,  153 => 46,  148 => 45,  145 => 44,  142 => 43,  139 => 42,  136 => 41,  134 => 40,  131 => 39,  128 => 38,  123 => 37,  121 => 36,  116 => 33,  114 => 32,  110 => 30,  104 => 29,  101 => 28,  92 => 26,  87 => 25,  82 => 23,  74 => 22,  69 => 21,  66 => 20,  63 => 19,  60 => 18,  57 => 17,  55 => 16,  52 => 15,  49 => 14,  44 => 13,  42 => 12,  31 => 3,  28 => 2,);
    }
}
