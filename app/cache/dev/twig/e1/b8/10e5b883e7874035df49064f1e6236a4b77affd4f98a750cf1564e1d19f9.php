<?php

/* PgGsbFraisBundle:Listefrais:listemois.html.twig */
class __TwigTemplate_e1b810e5b883e7874035df49064f1e6236a4b77affd4f98a750cf1564e1d19f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PgGsbFraisBundle::accueil.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
            'traitemant' => array($this, 'block_traitemant'),
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
                echo "                        <option value =\"";
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
        echo "                    </select>
                </p>
            </div>

            <div class=\"piedForm\">
                </p>
                <input id = \"ok\" type=\"submit\" value=\"Valider\" name=\"valider\" size = \"20\">
                <input id = \"annuler\" type=\"reset\" value=\"Annuler\" name=\"annuler\" size = \"20\"> 
                </p>
            </div>  
        </form>
    ";
        // line 33
        $this->displayBlock('traitemant', $context, $blocks);
        // line 35
        echo " ";
    }

    // line 33
    public function block_traitemant($context, array $blocks = array())
    {
        // line 34
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Listefrais:listemois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  105 => 33,  101 => 35,  99 => 33,  86 => 22,  80 => 21,  70 => 19,  61 => 17,  56 => 16,  53 => 15,  50 => 14,  47 => 13,  43 => 12,  32 => 3,  29 => 2,  41 => 8,  38 => 7,  36 => 5,  33 => 4,  31 => 3,  28 => 2,);
    }
}
