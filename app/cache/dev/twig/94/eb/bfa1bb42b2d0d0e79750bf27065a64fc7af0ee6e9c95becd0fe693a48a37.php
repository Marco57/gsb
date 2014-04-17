<?php

/* PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig */
class __TwigTemplate_94ebbfa1bb42b2d0d0e79750bf27065a64fc7af0ee6e9c95becd0fe693a48a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<h2>Renseigner ma fiche de frais du mois ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "html", null, true);
        echo " </h2>
<div class ='container'>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <form  action= \"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" method =\"POST\">
                <div class=\"corpsForm\">
                    <fieldset>
                        <legend>Eléments forfaitisés</legend>
                 ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 12
            echo "                    ";
            $context["idfrais"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "idfrais");
            // line 13
            echo "                    ";
            $context["libelle"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "libelle");
            // line 14
            echo "                    ";
            $context["quantite"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "quantite");
            // line 15
            echo "                        <p>
                            <label for=\"idFrais\">";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</label>
                            <input type=\"text\" id=\"idFrais\" name=\"lesFrais[";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["idfrais"]) ? $context["idfrais"] : $this->getContext($context, "idfrais")), "html", null, true);
            echo "]\" size=\"10\" maxlength=\"5\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo "\" >
                        </p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </fieldset>
                </div>
                <div class=\"piedForm\">
                    <p>
                        <input id=\"ok\" class=\"btn btn-success btn-large\"  type=\"submit\" value=\"Valider\" size=\"20\" />
                        <input id=\"annuler\" class=\"btn btn-danger btn-large\" type=\"reset\" value=\"Effacer\" size=\"20\" />
                    </p> 
                </div>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  58 => 17,  54 => 16,  51 => 15,  48 => 14,  45 => 13,  42 => 12,  38 => 11,  31 => 7,  22 => 3,  19 => 2,);
    }
}
