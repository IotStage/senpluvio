<?php

/* base.html.twig */
class __TwigTemplate_5fc950495e7b74b5306f4e1e572c7c91280764c9fb754121c2a38fbf9d74f57e extends Twig_Template
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
        $__internal_34ea9a9ccac9f3f1bb953453d209210ce992b60c30bd65afe69d7816ff6ea5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ea9a9ccac9f3f1bb953453d209210ce992b60c30bd65afe69d7816ff6ea5a5->enter($__internal_34ea9a9ccac9f3f1bb953453d209210ce992b60c30bd65afe69d7816ff6ea5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_34ea9a9ccac9f3f1bb953453d209210ce992b60c30bd65afe69d7816ff6ea5a5->leave($__internal_34ea9a9ccac9f3f1bb953453d209210ce992b60c30bd65afe69d7816ff6ea5a5_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_e309d6b90a49c5ff22277cba8ddef0e000bbbd0ca3da475b9d097b99f7ab92c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e309d6b90a49c5ff22277cba8ddef0e000bbbd0ca3da475b9d097b99f7ab92c7->enter($__internal_e309d6b90a49c5ff22277cba8ddef0e000bbbd0ca3da475b9d097b99f7ab92c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SenPluvio";
        
        $__internal_e309d6b90a49c5ff22277cba8ddef0e000bbbd0ca3da475b9d097b99f7ab92c7->leave($__internal_e309d6b90a49c5ff22277cba8ddef0e000bbbd0ca3da475b9d097b99f7ab92c7_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cc15d2a6984ede067418806c3bd1bd472d246901b79f4559539dc36bc647e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc15d2a6984ede067418806c3bd1bd472d246901b79f4559539dc36bc647e66->enter($__internal_1cc15d2a6984ede067418806c3bd1bd472d246901b79f4559539dc36bc647e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1cc15d2a6984ede067418806c3bd1bd472d246901b79f4559539dc36bc647e66->leave($__internal_1cc15d2a6984ede067418806c3bd1bd472d246901b79f4559539dc36bc647e66_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab48166bdc97cdb07e339b04db34b2f9e7cb7ec395a8670192ede24d45c05e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab48166bdc97cdb07e339b04db34b2f9e7cb7ec395a8670192ede24d45c05e1d->enter($__internal_ab48166bdc97cdb07e339b04db34b2f9e7cb7ec395a8670192ede24d45c05e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab48166bdc97cdb07e339b04db34b2f9e7cb7ec395a8670192ede24d45c05e1d->leave($__internal_ab48166bdc97cdb07e339b04db34b2f9e7cb7ec395a8670192ede24d45c05e1d_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fcd0b1d775a5cf52dccff68c835d9ed7d3482d39e2216cfa1afc9414bfb29be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcd0b1d775a5cf52dccff68c835d9ed7d3482d39e2216cfa1afc9414bfb29be->enter($__internal_3fcd0b1d775a5cf52dccff68c835d9ed7d3482d39e2216cfa1afc9414bfb29be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3fcd0b1d775a5cf52dccff68c835d9ed7d3482d39e2216cfa1afc9414bfb29be->leave($__internal_3fcd0b1d775a5cf52dccff68c835d9ed7d3482d39e2216cfa1afc9414bfb29be_prof);

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
