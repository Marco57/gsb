<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_65e7591f7cec755aa9be2106429727ccf6ef2b23fba4dd81e0d3b4f274ae23de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PgGsbFraisBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<div id=\"contenu\">
     ";
        // line 5
        if (array_key_exists("message", $context)) {
            // line 6
            echo "        <div class = \"erreur\">
            <ul>  ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "  </ul> </div>
    ";
        }
        // line 9
        echo "        <form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
            <div class=\"row\">
                <h3 style=\"text-align: center; font-weight: bold\">Connexion</h2>
                    <div>
                        <div style=\"margin:auto; width: 300px;\">
                            <label for=\"nom\" style=\"width: 110px\">Login :</label>
                            <input id=\"login\" type=\"text\" name=\"login\"  size=\"20\" maxlength=\"45\"><br/>
                            <label for=\"mdp\" style=\"width: 110px\">Mot de passe :</label>
                            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"20\" maxlength=\"45\"><br/>
                            <div style=\"text-align: center\">
                                <input style=\"margin-left:auto\" type=\"submit\" class=\"btn-primary\" value=\"Valider\" name=\"valider\">
                                <input type=\"reset\" class=\"btn-primary\" value=\"Annuler\" name=\"annuler\">
                            </div>
                        </div>
                    </div> 
            </div> 
                <br/>
                <br/>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 7,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
