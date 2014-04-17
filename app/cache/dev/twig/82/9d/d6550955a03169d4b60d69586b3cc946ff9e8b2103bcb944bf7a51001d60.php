<?php

/* PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig */
class __TwigTemplate_829dd6550955a03169d4b60d69586b3cc946ff9e8b2103bcb944bf7a51001d60 extends Twig_Template
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
        echo "<div class ='container'>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"listeLegere\">
                <legend>Descriptif des éléments hors forfait </legend>
                <tr>
                    <th class =\"date\">Date</th>
                    <th class =\"libelle\">Libellé</th>
                    <th class =\"montant\">Montant</th>
                    <th class = \"action\">&nbsp;</th>
                </tr> 
              ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 14
            echo "                    ";
            $context["date"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "date");
            // line 15
            echo "                    ";
            $context["libelle"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "libelle");
            // line 16
            echo "                    ";
            $context["montant"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "montant");
            // line 17
            echo "                    ";
            $context["idfrais"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "id");
            // line 18
            echo "                <tr>
                    <td> ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
                    <td> ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</td>
                    <td> ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
            echo "</td>
                    <td> <a href =\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pg_gsb_frais_supprimerfraishorsforfait", array("id" => (isset($context["idfrais"]) ? $context["idfrais"] : $this->getContext($context, "idfrais")))), "html", null, true);
            echo "\"
                            onclick=\"return confirm('Voulez-vous vraiment supprimer ce frais ?');\">Supprimer ce frais
                        </a>
                    </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </table>
        </div>
        <div class=\"col-lg-6\">
            <form  action= \"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerfraishorsforfait");
        echo "\" method =\"POST\">
                <div class=\"corpsForm\">
                    <fieldset>
                        <legend>Nouvel élément hors forfait</legend>
                        <p>
                            <label for=\"txtDateHF\">Date(jj/mm/aaaa):</label>
                            <input type=\"text\" id=\"txtDateHF\" name=\"dateFrais\" size=\"10\" maxlength=\"10\" value=\"\" >
                        </p>
                        <p>
                            <label for=\"txtLibelleHF\">Libellé</label>
                            <input type=\"text\" id=\"txtLibelleHF\" name=\"libelle\" size=\"70\" maxlength=\"256\" value=\"\" />
                        </p>
                        <p>
                            <label for=\"txtMontantHF\">Montant : </label>
                            <input type=\"text\" id=\"txtMontantHF\" name=\"montant\" size=\"10\" maxlength=\"10\" value=\"\" />
                        </p>
                    </fieldset>
                    <div class=\"piedForm\">
                        <p>
                            <input id=\"ok\" class=\"btn btn-success btn-large\" type=\"submit\" value=\"Valider\" size=\"20\" />
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
        return "PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  75 => 28,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  48 => 18,  45 => 17,  42 => 16,  39 => 15,  36 => 14,  32 => 13,  19 => 2,);
    }
}
