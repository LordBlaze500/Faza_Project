<?php

/* base.html.twig */
class __TwigTemplate_ef93faf1a4653aea03e6c8b5430681ed4d755bb51deb851ff7705d13efa3e918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_015f6a1b45dd9ea589c36ec21b305b0f19431c281b5ac59df1ca1cc8dc99d148 = $this->env->getExtension("native_profiler");
        $__internal_015f6a1b45dd9ea589c36ec21b305b0f19431c281b5ac59df1ca1cc8dc99d148->enter($__internal_015f6a1b45dd9ea589c36ec21b305b0f19431c281b5ac59df1ca1cc8dc99d148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_015f6a1b45dd9ea589c36ec21b305b0f19431c281b5ac59df1ca1cc8dc99d148->leave($__internal_015f6a1b45dd9ea589c36ec21b305b0f19431c281b5ac59df1ca1cc8dc99d148_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8666335e4abbb013d9886da68b309689d57e3d9db2cb4359e7b9ca6ec1e27ee9 = $this->env->getExtension("native_profiler");
        $__internal_8666335e4abbb013d9886da68b309689d57e3d9db2cb4359e7b9ca6ec1e27ee9->enter($__internal_8666335e4abbb013d9886da68b309689d57e3d9db2cb4359e7b9ca6ec1e27ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8666335e4abbb013d9886da68b309689d57e3d9db2cb4359e7b9ca6ec1e27ee9->leave($__internal_8666335e4abbb013d9886da68b309689d57e3d9db2cb4359e7b9ca6ec1e27ee9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f036f1e77b95358cea36c6f0a2e1dc5ebae3a26fdc7d2196f8b10ebde5cefc3 = $this->env->getExtension("native_profiler");
        $__internal_1f036f1e77b95358cea36c6f0a2e1dc5ebae3a26fdc7d2196f8b10ebde5cefc3->enter($__internal_1f036f1e77b95358cea36c6f0a2e1dc5ebae3a26fdc7d2196f8b10ebde5cefc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1f036f1e77b95358cea36c6f0a2e1dc5ebae3a26fdc7d2196f8b10ebde5cefc3->leave($__internal_1f036f1e77b95358cea36c6f0a2e1dc5ebae3a26fdc7d2196f8b10ebde5cefc3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_31002aa800f6c3943fe1519fc1b2383ac02583331d0b80b4e56c7bf9224b1f4c = $this->env->getExtension("native_profiler");
        $__internal_31002aa800f6c3943fe1519fc1b2383ac02583331d0b80b4e56c7bf9224b1f4c->enter($__internal_31002aa800f6c3943fe1519fc1b2383ac02583331d0b80b4e56c7bf9224b1f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31002aa800f6c3943fe1519fc1b2383ac02583331d0b80b4e56c7bf9224b1f4c->leave($__internal_31002aa800f6c3943fe1519fc1b2383ac02583331d0b80b4e56c7bf9224b1f4c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30883d39bbcb528630c729cece157a9518ba37c462e221ae98e15596dece1378 = $this->env->getExtension("native_profiler");
        $__internal_30883d39bbcb528630c729cece157a9518ba37c462e221ae98e15596dece1378->enter($__internal_30883d39bbcb528630c729cece157a9518ba37c462e221ae98e15596dece1378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_30883d39bbcb528630c729cece157a9518ba37c462e221ae98e15596dece1378->leave($__internal_30883d39bbcb528630c729cece157a9518ba37c462e221ae98e15596dece1378_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
