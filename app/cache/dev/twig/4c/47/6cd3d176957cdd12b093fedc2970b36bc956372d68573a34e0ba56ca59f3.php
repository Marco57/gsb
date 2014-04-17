<?php

/* PgGsbFraisBundle:Home:pageAccueilCompta.html.twig */
class __TwigTemplate_4c476cd3d176957cdd12b093fedc2970b36bc956372d68573a34e0ba56ca59f3 extends Twig_Template
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
        echo "<b>Bienvenue sur l'accueil comptable !</b>
 ";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:pageAccueilCompta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
