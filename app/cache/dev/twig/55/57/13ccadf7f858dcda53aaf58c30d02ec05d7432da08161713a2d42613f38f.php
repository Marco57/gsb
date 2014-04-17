<?php

/* PgGsbFraisBundle:Home:menu.html.twig */
class __TwigTemplate_555713ccadf7f858dcda53aaf58c30d02ec05d7432da08161713a2d42613f38f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PgGsbFraisBundle::accueil.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-lg-8\">
            <nav class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Acceuil</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
                            </li>

                            <li>
                                <a href= \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
                            </li >

                            <li>
                                <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerfraishorsforfait");
        echo "\" title= \"Valider les frais \">Valider les frais</a>
                            </li>       
                        </ul>
                    </div>
            </nav>
        </div>
        <div class=\"col-lg-2\">
            <nav class=\"navbar navbar-default\" role=\"deconnexion\">
                <div class=\"container-fluid\">

        ";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 33
            echo "                    Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nom"), "method"), "html", null, true);
            echo " <br />
        ";
        }
        // line 35
        echo "                    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
                </div>
            </nav>
        </div>
    </div>
 ";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  73 => 33,  71 => 32,  58 => 22,  44 => 14,  31 => 3,  28 => 2,  51 => 18,  48 => 7,  43 => 9,  41 => 7,  37 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
