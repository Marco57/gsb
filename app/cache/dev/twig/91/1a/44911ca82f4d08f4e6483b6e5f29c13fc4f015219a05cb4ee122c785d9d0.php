<?php

/* PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig */
class __TwigTemplate_911a44911ca82f4d08f4e6483b6e5f29c13fc4f015219a05cb4ee122c785d9d0 extends Twig_Template
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
        // line 1
        echo "<h3>Fiche de frais du mois ";
        echo twig_escape_filter($this->env, (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "html", null, true);
        echo " : </h3>
<div class=\"encadre\"> 
    <p>
        Etat : ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["libetat"]) ? $context["libetat"] : $this->getContext($context, "libetat")), "html", null, true);
        echo " depuis le ";
        echo twig_escape_filter($this->env, (isset($context["datemodif"]) ? $context["datemodif"] : $this->getContext($context, "datemodif")), "html", null, true);
        echo " <br /> Montant validé : ";
        echo twig_escape_filter($this->env, (isset($context["montantvalide"]) ? $context["montantvalide"] : $this->getContext($context, "montantvalide")), "html", null, true);
        echo "
    </p>

     
    
    <table style=\"box-shadow: 1px 1px 3px #999; border-radius: 4px; min-width: 300px; margin-bottom: 30px\">
        <caption style=\"font-weight: bold; text-align: left; font-size:18px;\">Eléments forfaitisés</caption>
        <tr>
          ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 13
            echo "                  ";
            $context["libelle"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "libelle");
            // line 14
            echo "                <th style=\"padding:5px\">";
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo " </th>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </tr>
        <tr>
          ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 19
            echo "                  ";
            $context["quantite"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "quantite");
            // line 20
            echo "                        <td style=\"padding:0px 5px 5px 5px\" >";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo " </td>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "       </tr>\t
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  70 => 20,  67 => 19,  63 => 18,  59 => 16,  50 => 14,  47 => 13,  43 => 12,  28 => 4,  19 => 1,);
    }
}
