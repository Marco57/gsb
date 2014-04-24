<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_4452788b1772daebceaad6d939c4e4529a82d8d8c19c21a9d6df25d2c6ad8f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PgGsbFraisBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'section' => array($this, 'block_section'),
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
        echo "<nav>
    <div class=\"row\">
        <div class=\"col-lg-10\">
            <nav class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_home");
        echo "\">Acceuil</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
                            </li>

                            <li>
                                <a href= \"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
                            </li>    
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class=\"col-lg-2\">
            <nav class=\"navbar navbar-default\" role=\"deconnexion\">
                <div class=\"container-fluid\">

        ";
        // line 30
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 31
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "role"), "method", true, true)) {
                // line 32
                echo "                    <p style=\"padding-top:8px\"> Bonjour ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nom"), "method"), "html", null, true);
                echo ",
                        vous êtes connecté en tant que  ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "role"), "method"), "html", null, true);
                echo " !<p>
                     ";
            }
            // line 35
            echo "        ";
        }
        // line 36
        echo "                        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
                </div>
            </nav>
        </div>
    </div>
</nav> 
<section>   
    ";
        // line 43
        $this->displayBlock('section', $context, $blocks);
        // line 45
        echo "    </section>
";
    }

    // line 43
    public function block_section($context, array $blocks = array())
    {
        // line 44
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  106 => 43,  101 => 45,  99 => 43,  88 => 36,  85 => 35,  80 => 33,  75 => 32,  72 => 31,  70 => 30,  56 => 19,  49 => 15,  40 => 9,  32 => 3,  29 => 2,);
    }
}
