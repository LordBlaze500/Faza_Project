<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1df3936b92124ad7da0145769ca613c3a289b403529c43d773c3df55e3b66382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccd94e61c23a34aaa94fffb4bac48692727f8d1713e761abb8e4bb9e333c2bd3 = $this->env->getExtension("native_profiler");
        $__internal_ccd94e61c23a34aaa94fffb4bac48692727f8d1713e761abb8e4bb9e333c2bd3->enter($__internal_ccd94e61c23a34aaa94fffb4bac48692727f8d1713e761abb8e4bb9e333c2bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd94e61c23a34aaa94fffb4bac48692727f8d1713e761abb8e4bb9e333c2bd3->leave($__internal_ccd94e61c23a34aaa94fffb4bac48692727f8d1713e761abb8e4bb9e333c2bd3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c91b8049d4b7fcdbe7cf56a03a15d695551267eb7c8fdc3cd2e605ad97908718 = $this->env->getExtension("native_profiler");
        $__internal_c91b8049d4b7fcdbe7cf56a03a15d695551267eb7c8fdc3cd2e605ad97908718->enter($__internal_c91b8049d4b7fcdbe7cf56a03a15d695551267eb7c8fdc3cd2e605ad97908718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c91b8049d4b7fcdbe7cf56a03a15d695551267eb7c8fdc3cd2e605ad97908718->leave($__internal_c91b8049d4b7fcdbe7cf56a03a15d695551267eb7c8fdc3cd2e605ad97908718_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6fcc19f02ca2a7e9e53115565593611b617912899afd3ccebfd6f4677dec4c4 = $this->env->getExtension("native_profiler");
        $__internal_e6fcc19f02ca2a7e9e53115565593611b617912899afd3ccebfd6f4677dec4c4->enter($__internal_e6fcc19f02ca2a7e9e53115565593611b617912899afd3ccebfd6f4677dec4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e6fcc19f02ca2a7e9e53115565593611b617912899afd3ccebfd6f4677dec4c4->leave($__internal_e6fcc19f02ca2a7e9e53115565593611b617912899afd3ccebfd6f4677dec4c4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e61c3482725cdf0f8d991b8d94d9f9d24235ec4a1e5166d799ce9bac9f86a44c = $this->env->getExtension("native_profiler");
        $__internal_e61c3482725cdf0f8d991b8d94d9f9d24235ec4a1e5166d799ce9bac9f86a44c->enter($__internal_e61c3482725cdf0f8d991b8d94d9f9d24235ec4a1e5166d799ce9bac9f86a44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e61c3482725cdf0f8d991b8d94d9f9d24235ec4a1e5166d799ce9bac9f86a44c->leave($__internal_e61c3482725cdf0f8d991b8d94d9f9d24235ec4a1e5166d799ce9bac9f86a44c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
