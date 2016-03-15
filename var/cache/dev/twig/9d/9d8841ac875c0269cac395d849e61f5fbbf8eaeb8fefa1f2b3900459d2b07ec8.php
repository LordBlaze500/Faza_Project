<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5812aac13c08a9ba92002f234183264c5e4e7cce11027b64e94b1cea82e2b53d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8df2bb3918a3efb236c3cdd38dd667f5d2743948eb6f9255243dc028fb1cdb7c = $this->env->getExtension("native_profiler");
        $__internal_8df2bb3918a3efb236c3cdd38dd667f5d2743948eb6f9255243dc028fb1cdb7c->enter($__internal_8df2bb3918a3efb236c3cdd38dd667f5d2743948eb6f9255243dc028fb1cdb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8df2bb3918a3efb236c3cdd38dd667f5d2743948eb6f9255243dc028fb1cdb7c->leave($__internal_8df2bb3918a3efb236c3cdd38dd667f5d2743948eb6f9255243dc028fb1cdb7c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_efa76dfb352fb86a77f850432c592d897e4f390516613cf19c2891c9190cb64d = $this->env->getExtension("native_profiler");
        $__internal_efa76dfb352fb86a77f850432c592d897e4f390516613cf19c2891c9190cb64d->enter($__internal_efa76dfb352fb86a77f850432c592d897e4f390516613cf19c2891c9190cb64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_efa76dfb352fb86a77f850432c592d897e4f390516613cf19c2891c9190cb64d->leave($__internal_efa76dfb352fb86a77f850432c592d897e4f390516613cf19c2891c9190cb64d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1597b08d1aa1eb7aaabbdece43d870403301074d9f0ebcc7dcba84948d973c81 = $this->env->getExtension("native_profiler");
        $__internal_1597b08d1aa1eb7aaabbdece43d870403301074d9f0ebcc7dcba84948d973c81->enter($__internal_1597b08d1aa1eb7aaabbdece43d870403301074d9f0ebcc7dcba84948d973c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1597b08d1aa1eb7aaabbdece43d870403301074d9f0ebcc7dcba84948d973c81->leave($__internal_1597b08d1aa1eb7aaabbdece43d870403301074d9f0ebcc7dcba84948d973c81_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77c427dc40a4814e3ffaa0caa163f63edd6493c78958b1a435115fe1a864f348 = $this->env->getExtension("native_profiler");
        $__internal_77c427dc40a4814e3ffaa0caa163f63edd6493c78958b1a435115fe1a864f348->enter($__internal_77c427dc40a4814e3ffaa0caa163f63edd6493c78958b1a435115fe1a864f348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_77c427dc40a4814e3ffaa0caa163f63edd6493c78958b1a435115fe1a864f348->leave($__internal_77c427dc40a4814e3ffaa0caa163f63edd6493c78958b1a435115fe1a864f348_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
