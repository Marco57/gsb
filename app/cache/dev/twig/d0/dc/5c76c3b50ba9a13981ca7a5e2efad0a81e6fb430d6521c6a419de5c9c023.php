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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesVisiteurs"]) ? $context["lesVisiteurs"] : $this->getContext($context, "lesVisiteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["unVisiteur"]) {
            // line 13
            echo "                    ";
            $context["visiteur"] = $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "id");
            // line 14
            echo "                    ";
            $context["nomVisiteur"] = $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "nom");
            // line 15
            echo "                    ";
            $context["prenomVisiteur"] = $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "prenom");
            // line 16
            echo "             ";
            if (((isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")) == (isset($context["leVisiteur"]) ? $context["leVisiteur"] : $this->getContext($context, "leVisiteur")))) {
                echo " 
                        <option selected value =\"";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, (isset($context["nomVisiteur"]) ? $context["nomVisiteur"] : $this->getContext($context, "nomVisiteur")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["prenomVisiteur"]) ? $context["prenomVisiteur"] : $this->getContext($context, "prenomVisiteur")), "html", null, true);
                echo "  </option>
                    ";
            } else {
                // line 19
                echo "                        <option value =\"";
                echo twig_escape_filter($this->env, (isset($context["visiteur"]) ? $context["visiteur"] : $this->getContext($context, "visiteur")), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, (isset($context["nomVisiteur"]) ? $context["nomVisiteur"] : $this->getContext($context, "nomVisiteur")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["prenomVisiteur"]) ? $context["prenomVisiteur"] : $this->getContext($context, "prenomVisiteur")), "html", null, true);
                echo "   </option>
                     ";
            }
            // line 21
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unVisiteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </select>
                </p>
            ";
        // line 24
        if ((!(null === (isset($context["leVisiteur"]) ? $context["leVisiteur"] : $this->getContext($context, "leVisiteur"))))) {
            // line 25
            echo "                <p>
                    <label for=\"lstMois\" accesskey=\"n\"> Mois : </label>
                    <select id=\"lstMois\" name =\"lstMois\" onChange=\"javascript:submit();\">
                    ";
            // line 28
            $context["find"] = "false";
            // line 29
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesMois"]) ? $context["lesMois"] : $this->getContext($context, "lesMois")));
            foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
                // line 30
                echo "                    ";
                $context["mois"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "mois");
                // line 31
                echo "                    ";
                $context["numAnnee"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "numAnnee");
                // line 32
                echo "                    ";
                $context["numMois"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "numMois");
                // line 33
                echo "             ";
                if (((isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")) == (isset($context["leMois"]) ? $context["leMois"] : $this->getContext($context, "leMois")))) {
                    echo " 
                            <option selected value =\"";
                    // line 34
                    echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                    echo "  </option>
                    ";
                    // line 35
                    $context["find"] = "true";
                    // line 36
                    echo "                    ";
                } else {
                    // line 37
                    echo "                            <option value =\"";
                    echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                    echo "  </option>
                     ";
                }
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    ";
            if (((isset($context["find"]) ? $context["find"] : $this->getContext($context, "find")) != "true")) {
                // line 41
                echo "                            <option selected value =\"\"></option>
                    ";
            }
            // line 43
            echo "                        </select>
                    </p>
            ";
        }
        // line 46
        echo "                    <p>

                    <div style=\"height: 1px; background-color: silver;
                         margin-left: 30px; margin-right: 30px; margin-bottom: 15px;\"></div>
                         <div class=\"encadre\"> 
";
        // line 51
        if ((!(null === (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait"))))) {
            // line 52
            echo "                                 <table style=\"box-shadow: 1px 1px 3px #999; border-radius: 4px; min-width: 300px;\">
                                     <caption style=\"font-weight: bold; text-align: left; font-size:18px;\">Frais au forfait :</caption>
                                     <tr>
          ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                // line 56
                echo "                  ";
                $context["libelle"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "libelle");
                // line 57
                echo "                                             <th style=\"padding:5px\">";
                echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
                echo " </th>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                                             </tr>
                                             <tr>
          ";
            // line 61
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                // line 62
                echo "                  ";
                $context["quantite"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "quantite");
                // line 63
                echo "                                                     <td style=\"padding-left:6px;\" >";
                echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
                echo " </td>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                                 </tr>\t
                                             </table>
 ";
        }
        // line 68
        echo "                                         </div>  

                                         </p>
                                     </div>
                                     <div class=\"piedForm\">
                                         </p>
                                         <input id = \"ok\" class=\"btn btn-success btn-large\" type=\"submit\" value=\"Valider\" name=\"valider\" size = \"20\">
                                         <input id = \"annuler\" class=\"btn btn-danger btn-large\" type=\"reset\" value=\"Annuler\" name=\"annuler\" size = \"20\"> 
                                         </p>
                                     </div>  
                                     <div><a href= \"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_annvaliderfrais");
        echo "\" title=\"Annuler validation\">Annuler la validation ! (debug)</a></div>
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
        return array (  225 => 78,  213 => 68,  208 => 65,  199 => 63,  196 => 62,  192 => 61,  188 => 59,  179 => 57,  176 => 56,  172 => 55,  167 => 52,  165 => 51,  158 => 46,  153 => 43,  149 => 41,  146 => 40,  140 => 39,  130 => 37,  127 => 36,  125 => 35,  117 => 34,  112 => 33,  109 => 32,  106 => 31,  103 => 30,  98 => 29,  96 => 28,  91 => 25,  89 => 24,  85 => 22,  79 => 21,  69 => 19,  60 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  42 => 12,  31 => 3,  28 => 2,);
    }
}
