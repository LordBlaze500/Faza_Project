<?php

/* base.html.twig */
class __TwigTemplate_8c2d0d6cf6f5d3f45ed927a467fba9657d341c7903dccb461aed39d121255ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23347e23906210c42bdb69d2c96c02c0ada9e92068455e23adccff493c7eea28 = $this->env->getExtension("native_profiler");
        $__internal_23347e23906210c42bdb69d2c96c02c0ada9e92068455e23adccff493c7eea28->enter($__internal_23347e23906210c42bdb69d2c96c02c0ada9e92068455e23adccff493c7eea28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>Faza Project</title>
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
        echo "    <br><footer></footer>
    </body>
</html>
";
        
        $__internal_23347e23906210c42bdb69d2c96c02c0ada9e92068455e23adccff493c7eea28->leave($__internal_23347e23906210c42bdb69d2c96c02c0ada9e92068455e23adccff493c7eea28_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f819c70c8c5e600862b38683551c5dbdffda1a7dca496863c999f40008cee1f = $this->env->getExtension("native_profiler");
        $__internal_3f819c70c8c5e600862b38683551c5dbdffda1a7dca496863c999f40008cee1f->enter($__internal_3f819c70c8c5e600862b38683551c5dbdffda1a7dca496863c999f40008cee1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3f819c70c8c5e600862b38683551c5dbdffda1a7dca496863c999f40008cee1f->leave($__internal_3f819c70c8c5e600862b38683551c5dbdffda1a7dca496863c999f40008cee1f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_72c39a4233ff9b767204c279be604249567d676e1cb322b7c9bd4fcf6042a8e0 = $this->env->getExtension("native_profiler");
        $__internal_72c39a4233ff9b767204c279be604249567d676e1cb322b7c9bd4fcf6042a8e0->enter($__internal_72c39a4233ff9b767204c279be604249567d676e1cb322b7c9bd4fcf6042a8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_72c39a4233ff9b767204c279be604249567d676e1cb322b7c9bd4fcf6042a8e0->leave($__internal_72c39a4233ff9b767204c279be604249567d676e1cb322b7c9bd4fcf6042a8e0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_287241669081c989300fddebeca3d00dbf889e8730fe1a986fa8f26705c84cae = $this->env->getExtension("native_profiler");
        $__internal_287241669081c989300fddebeca3d00dbf889e8730fe1a986fa8f26705c84cae->enter($__internal_287241669081c989300fddebeca3d00dbf889e8730fe1a986fa8f26705c84cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_287241669081c989300fddebeca3d00dbf889e8730fe1a986fa8f26705c84cae->leave($__internal_287241669081c989300fddebeca3d00dbf889e8730fe1a986fa8f26705c84cae_prof);

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
        return array (  78 => 11,  67 => 10,  56 => 6,  46 => 12,  43 => 11,  41 => 10,  34 => 7,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pl">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Faza Project</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     <br><footer></footer>*/
/*     </body>*/
/* </html>*/
/* */
