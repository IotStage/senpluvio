<?php

/* base.html.twig */
class __TwigTemplate_d51a0b0b6a9836eb5b1bc9bf02cbba51fd10cd51ab41803ba991396cb8b0ffd7 extends Twig_Template
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
        $__internal_e8831856c2ca389a04c25159e73952cd39c39c8e9777464448964a77931d3c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8831856c2ca389a04c25159e73952cd39c39c8e9777464448964a77931d3c6f->enter($__internal_e8831856c2ca389a04c25159e73952cd39c39c8e9777464448964a77931d3c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"keywords\" content=\"température, pluie, pluviometre, sénégal, innondation, web, iot, cloud, arduino, raspberry pie\" />

        <meta name=\"author\" value=\"abdoulaye KAMA\">
        <meta name=\"publisher\" content=\"Abdoulaye KAMA\">
        <meta name=\"reply-to\" content=\"abdoulayekama@gmail.com\">
        <meta name=\"category\" content=\"internet\">
        <meta name=\"robots\" content=\"index, follow\">
        <meta name=\"distribution\" content=\"global\">
        <meta name=\"Description\" content=\"SenPluvio\">
        <meta name=\"copyright\" content=\"ESP\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no\">

        <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_e8831856c2ca389a04c25159e73952cd39c39c8e9777464448964a77931d3c6f->leave($__internal_e8831856c2ca389a04c25159e73952cd39c39c8e9777464448964a77931d3c6f_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_c456d67befec5516e0237a80c07bcd2403c52a4c2d255ef66b86dc047f1fefd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c456d67befec5516e0237a80c07bcd2403c52a4c2d255ef66b86dc047f1fefd3->enter($__internal_c456d67befec5516e0237a80c07bcd2403c52a4c2d255ef66b86dc047f1fefd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SenPluvio";
        
        $__internal_c456d67befec5516e0237a80c07bcd2403c52a4c2d255ef66b86dc047f1fefd3->leave($__internal_c456d67befec5516e0237a80c07bcd2403c52a4c2d255ef66b86dc047f1fefd3_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_291c70e788280302d61700a60788d8d53fed15577714503efdade51fa57efee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291c70e788280302d61700a60788d8d53fed15577714503efdade51fa57efee3->enter($__internal_291c70e788280302d61700a60788d8d53fed15577714503efdade51fa57efee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_291c70e788280302d61700a60788d8d53fed15577714503efdade51fa57efee3->leave($__internal_291c70e788280302d61700a60788d8d53fed15577714503efdade51fa57efee3_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_e241751a5138d6f6150835b35f46cd2f5b4cc958bf1231dfa77ff5ad0c4987b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e241751a5138d6f6150835b35f46cd2f5b4cc958bf1231dfa77ff5ad0c4987b6->enter($__internal_e241751a5138d6f6150835b35f46cd2f5b4cc958bf1231dfa77ff5ad0c4987b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e241751a5138d6f6150835b35f46cd2f5b4cc958bf1231dfa77ff5ad0c4987b6->leave($__internal_e241751a5138d6f6150835b35f46cd2f5b4cc958bf1231dfa77ff5ad0c4987b6_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82ee5e17e8e7be4ae601bff6d40c48e8096961724c9608d8e2c45d4163e0bd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ee5e17e8e7be4ae601bff6d40c48e8096961724c9608d8e2c45d4163e0bd3c->enter($__internal_82ee5e17e8e7be4ae601bff6d40c48e8096961724c9608d8e2c45d4163e0bd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82ee5e17e8e7be4ae601bff6d40c48e8096961724c9608d8e2c45d4163e0bd3c->leave($__internal_82ee5e17e8e7be4ae601bff6d40c48e8096961724c9608d8e2c45d4163e0bd3c_prof);

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
        return array (  106 => 24,  95 => 23,  84 => 19,  72 => 18,  63 => 25,  60 => 24,  58 => 23,  51 => 20,  49 => 19,  45 => 18,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"keywords\" content=\"température, pluie, pluviometre, sénégal, innondation, web, iot, cloud, arduino, raspberry pie\" />

        <meta name=\"author\" value=\"abdoulaye KAMA\">
        <meta name=\"publisher\" content=\"Abdoulaye KAMA\">
        <meta name=\"reply-to\" content=\"abdoulayekama@gmail.com\">
        <meta name=\"category\" content=\"internet\">
        <meta name=\"robots\" content=\"index, follow\">
        <meta name=\"distribution\" content=\"global\">
        <meta name=\"Description\" content=\"SenPluvio\">
        <meta name=\"copyright\" content=\"ESP\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no\">

        <title>{% block title %}SenPluvio{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/app/Resources/views/base.html.twig");
    }
}
