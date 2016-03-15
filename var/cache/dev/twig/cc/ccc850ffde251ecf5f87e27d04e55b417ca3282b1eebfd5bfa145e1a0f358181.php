<?php

/* SiteBundle:User:register.html.twig */
class __TwigTemplate_9e1e3db96fb4473fdc4d14fc3c5774de1742983c9282a06f9088cf4791bc99b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SiteBundle:User:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b01e729eb86f5153c792d41328b4934b4b4aef70e1b6fa965d9c9c7f9354cf4 = $this->env->getExtension("native_profiler");
        $__internal_9b01e729eb86f5153c792d41328b4934b4b4aef70e1b6fa965d9c9c7f9354cf4->enter($__internal_9b01e729eb86f5153c792d41328b4934b4b4aef70e1b6fa965d9c9c7f9354cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:User:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b01e729eb86f5153c792d41328b4934b4b4aef70e1b6fa965d9c9c7f9354cf4->leave($__internal_9b01e729eb86f5153c792d41328b4934b4b4aef70e1b6fa965d9c9c7f9354cf4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4084115eec759eeb34e08f18394ea7ec2d881cab99dba4cdadcf35d2e27ad0d0 = $this->env->getExtension("native_profiler");
        $__internal_4084115eec759eeb34e08f18394ea7ec2d881cab99dba4cdadcf35d2e27ad0d0->enter($__internal_4084115eec759eeb34e08f18394ea7ec2d881cab99dba4cdadcf35d2e27ad0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"left-header\" >Rejestracja</h2>
    <div class=\"col-md-5 col-xs-12\">
        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("site_user_register");
        echo "\" method=\"post\" >
            ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "left-form")));
        echo "
        </form>
    </div>
";
        
        $__internal_4084115eec759eeb34e08f18394ea7ec2d881cab99dba4cdadcf35d2e27ad0d0->leave($__internal_4084115eec759eeb34e08f18394ea7ec2d881cab99dba4cdadcf35d2e27ad0d0_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% block body %}*/
/*     <h2 class="left-header" >Rejestracja</h2>*/
/*     <div class="col-md-5 col-xs-12">*/
/*         <form action="{{ path("site_user_register") }}" method="post" >*/
/*             {{ form(form,  {'attr': {'class': 'left-form'}}) }}*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
