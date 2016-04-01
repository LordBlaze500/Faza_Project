<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_658be0fbdd59761455e74c936586696cd72eea7c7cb11b232ad14797caea7f4d extends Twig_Template
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
        $__internal_405242a402a8bba468708c999591c5ed3f2c9c1a17358c3f6981889e2ecdcf66 = $this->env->getExtension("native_profiler");
        $__internal_405242a402a8bba468708c999591c5ed3f2c9c1a17358c3f6981889e2ecdcf66->enter($__internal_405242a402a8bba468708c999591c5ed3f2c9c1a17358c3f6981889e2ecdcf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_405242a402a8bba468708c999591c5ed3f2c9c1a17358c3f6981889e2ecdcf66->leave($__internal_405242a402a8bba468708c999591c5ed3f2c9c1a17358c3f6981889e2ecdcf66_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de8b1e8b0a2dc0404d388bbd04f28be6367a6e171ba2a02c20cd0956c7178bbf = $this->env->getExtension("native_profiler");
        $__internal_de8b1e8b0a2dc0404d388bbd04f28be6367a6e171ba2a02c20cd0956c7178bbf->enter($__internal_de8b1e8b0a2dc0404d388bbd04f28be6367a6e171ba2a02c20cd0956c7178bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_de8b1e8b0a2dc0404d388bbd04f28be6367a6e171ba2a02c20cd0956c7178bbf->leave($__internal_de8b1e8b0a2dc0404d388bbd04f28be6367a6e171ba2a02c20cd0956c7178bbf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f27fd2576f6df7202a25548a5edf8e8923712bc6c7ebac6141e06b300fb69edd = $this->env->getExtension("native_profiler");
        $__internal_f27fd2576f6df7202a25548a5edf8e8923712bc6c7ebac6141e06b300fb69edd->enter($__internal_f27fd2576f6df7202a25548a5edf8e8923712bc6c7ebac6141e06b300fb69edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f27fd2576f6df7202a25548a5edf8e8923712bc6c7ebac6141e06b300fb69edd->leave($__internal_f27fd2576f6df7202a25548a5edf8e8923712bc6c7ebac6141e06b300fb69edd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f65169224ea9df42a0b98e5a3596a61438fe48b20e154224b00b83b6c1aefd4 = $this->env->getExtension("native_profiler");
        $__internal_2f65169224ea9df42a0b98e5a3596a61438fe48b20e154224b00b83b6c1aefd4->enter($__internal_2f65169224ea9df42a0b98e5a3596a61438fe48b20e154224b00b83b6c1aefd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2f65169224ea9df42a0b98e5a3596a61438fe48b20e154224b00b83b6c1aefd4->leave($__internal_2f65169224ea9df42a0b98e5a3596a61438fe48b20e154224b00b83b6c1aefd4_prof);

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
