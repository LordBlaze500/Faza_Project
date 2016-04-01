<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2068fb38244e2e1cee4e7bd95c21ad0086b0a4faf6a7012868d7d74a7408f2fa extends Twig_Template
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
        $__internal_5cb20ca5a294422a16a2c0e15189e72dd2543c2d0324a4ea35aabffdb58ac98e = $this->env->getExtension("native_profiler");
        $__internal_5cb20ca5a294422a16a2c0e15189e72dd2543c2d0324a4ea35aabffdb58ac98e->enter($__internal_5cb20ca5a294422a16a2c0e15189e72dd2543c2d0324a4ea35aabffdb58ac98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb20ca5a294422a16a2c0e15189e72dd2543c2d0324a4ea35aabffdb58ac98e->leave($__internal_5cb20ca5a294422a16a2c0e15189e72dd2543c2d0324a4ea35aabffdb58ac98e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_644af598d69d5521f9e4cc10bbae8bee6aa73d0a96b77d8e99fae6147c6f254c = $this->env->getExtension("native_profiler");
        $__internal_644af598d69d5521f9e4cc10bbae8bee6aa73d0a96b77d8e99fae6147c6f254c->enter($__internal_644af598d69d5521f9e4cc10bbae8bee6aa73d0a96b77d8e99fae6147c6f254c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_644af598d69d5521f9e4cc10bbae8bee6aa73d0a96b77d8e99fae6147c6f254c->leave($__internal_644af598d69d5521f9e4cc10bbae8bee6aa73d0a96b77d8e99fae6147c6f254c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16da78930b552f257aa58af3141f0863eb04a042a838fbc69211807b1452e3f3 = $this->env->getExtension("native_profiler");
        $__internal_16da78930b552f257aa58af3141f0863eb04a042a838fbc69211807b1452e3f3->enter($__internal_16da78930b552f257aa58af3141f0863eb04a042a838fbc69211807b1452e3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_16da78930b552f257aa58af3141f0863eb04a042a838fbc69211807b1452e3f3->leave($__internal_16da78930b552f257aa58af3141f0863eb04a042a838fbc69211807b1452e3f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1612ac4e504dd75f8ea89a207eeb6684bc352473de4240f21b692576da7de5d = $this->env->getExtension("native_profiler");
        $__internal_d1612ac4e504dd75f8ea89a207eeb6684bc352473de4240f21b692576da7de5d->enter($__internal_d1612ac4e504dd75f8ea89a207eeb6684bc352473de4240f21b692576da7de5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1612ac4e504dd75f8ea89a207eeb6684bc352473de4240f21b692576da7de5d->leave($__internal_d1612ac4e504dd75f8ea89a207eeb6684bc352473de4240f21b692576da7de5d_prof);

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
