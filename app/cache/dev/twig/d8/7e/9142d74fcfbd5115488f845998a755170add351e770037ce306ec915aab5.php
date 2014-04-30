<?php

/* PgGsbFraisBundle:ListeFrais:Listetouslesfrais.html.twig */
class __TwigTemplate_d87e9142d74fcfbd5115488f845998a755170add351e770037ce306ec915aab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PgGsbFraisBundle::accueil.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueil.html.twig";
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
    <h2> Mes fiches à traiter </h2>
    <h3> Mois à sélectionner : </h3>
    <form method =\"POST\">
        <div class=\"corpsForm\">
            <p>
                <label for=\"lstMois\" accesskey=\"n\"> Mois : </label>
                <select id=\"lstMois\" name =\"lstMois\">
                ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesmois"]) ? $context["lesmois"] : $this->getContext($context, "lesmois")));
        foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
            // line 13
            echo "                    ";
            $context["mois"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "mois");
            // line 14
            echo "                    ";
            $context["numAnnee"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "numAnnee");
            // line 15
            echo "                    ";
            $context["numMois"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "numMois");
            // line 16
            echo "             ";
            if (((isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")) == (isset($context["lemois"]) ? $context["lemois"] : $this->getContext($context, "lemois")))) {
                echo " 
                    <option selected value =\"";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo "  </option>
                    ";
            } else {
                // line 19
                echo "                    <option value =\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo "  </option>
                     ";
            }
            // line 21
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </select>
            </p>
        </div>

        <div class=\"piedForm\">
            </p>
            <input id = \"ok\" class=\"btn btn-success btn-large\" type=\"submit\" value=\"Valider\" name=\"valider\" size = \"20\">
            <input id = \"annuler\" class=\"btn btn-danger btn-large\" type=\"reset\" value=\"Annuler\" name=\"annuler\" size = \"20\"> 
            </p>
        </div>  
    </form> 

<br/>
";
        // line 35
        $this->env->loadTemplate("PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig")->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")), "numannee" => (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "nummois" => (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "libetat" => (isset($context["libetat"]) ? $context["libetat"] : $this->getContext($context, "libetat")), "montantvalide" => (isset($context["montantvalide"]) ? $context["montantvalide"] : $this->getContext($context, "montantvalide")), " datemodif" => (isset($context["datemodif"]) ? $context["datemodif"] : $this->getContext($context, "datemodif")))));
        // line 37
        echo "
<br/>
";
        // line 39
        if ((!(null === (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait"))))) {
            // line 40
            $this->env->loadTemplate("PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig")->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")), "nbjustificatifs" => (isset($context["nbjustificatifs"]) ? $context["nbjustificatifs"] : $this->getContext($context, "nbjustificatifs")))));
        } else {
            // line 42
            echo "Aucun frais hors forfait !
";
        }
        // line 44
        echo " ";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:Listetouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  111 => 42,  108 => 40,  106 => 39,  102 => 37,  100 => 35,  85 => 22,  79 => 21,  69 => 19,  60 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  42 => 12,  31 => 3,  28 => 2,);
    }
}
