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
        $__internal_53bc6f4a5694ead2c9255abb3421cd69b20d02176a5422cb9ed3443547edd5a8 = $this->env->getExtension("native_profiler");
        $__internal_53bc6f4a5694ead2c9255abb3421cd69b20d02176a5422cb9ed3443547edd5a8->enter($__internal_53bc6f4a5694ead2c9255abb3421cd69b20d02176a5422cb9ed3443547edd5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53bc6f4a5694ead2c9255abb3421cd69b20d02176a5422cb9ed3443547edd5a8->leave($__internal_53bc6f4a5694ead2c9255abb3421cd69b20d02176a5422cb9ed3443547edd5a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77b3d381f45d6751595dafa8f6d6ddc77be1f66ee760e1f6fe63906aef48e182 = $this->env->getExtension("native_profiler");
        $__internal_77b3d381f45d6751595dafa8f6d6ddc77be1f66ee760e1f6fe63906aef48e182->enter($__internal_77b3d381f45d6751595dafa8f6d6ddc77be1f66ee760e1f6fe63906aef48e182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77b3d381f45d6751595dafa8f6d6ddc77be1f66ee760e1f6fe63906aef48e182->leave($__internal_77b3d381f45d6751595dafa8f6d6ddc77be1f66ee760e1f6fe63906aef48e182_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc0333dde3bcb326861493885418377bc1807ba45fb84e04729330f1679e6f12 = $this->env->getExtension("native_profiler");
        $__internal_bc0333dde3bcb326861493885418377bc1807ba45fb84e04729330f1679e6f12->enter($__internal_bc0333dde3bcb326861493885418377bc1807ba45fb84e04729330f1679e6f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc0333dde3bcb326861493885418377bc1807ba45fb84e04729330f1679e6f12->leave($__internal_bc0333dde3bcb326861493885418377bc1807ba45fb84e04729330f1679e6f12_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_908ab9c46b3af1366818be00bfd30845fea3673a5523673ab42a1d4fa483f3d2 = $this->env->getExtension("native_profiler");
        $__internal_908ab9c46b3af1366818be00bfd30845fea3673a5523673ab42a1d4fa483f3d2->enter($__internal_908ab9c46b3af1366818be00bfd30845fea3673a5523673ab42a1d4fa483f3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_908ab9c46b3af1366818be00bfd30845fea3673a5523673ab42a1d4fa483f3d2->leave($__internal_908ab9c46b3af1366818be00bfd30845fea3673a5523673ab42a1d4fa483f3d2_prof);

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
