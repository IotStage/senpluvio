<?php

/* ::base.html.twig */
class __TwigTemplate_4de39a7eff7be00369e63a62944957f69298b7e94761a6115bf524cf98041707 extends Twig_Template
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
        $__internal_5899c8025fa1a9b9baadf65f169a08de204fa7655c3cb57eda1709de75b9fbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5899c8025fa1a9b9baadf65f169a08de204fa7655c3cb57eda1709de75b9fbda->enter($__internal_5899c8025fa1a9b9baadf65f169a08de204fa7655c3cb57eda1709de75b9fbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_5899c8025fa1a9b9baadf65f169a08de204fa7655c3cb57eda1709de75b9fbda->leave($__internal_5899c8025fa1a9b9baadf65f169a08de204fa7655c3cb57eda1709de75b9fbda_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4203540e4ea7910048979c1345d5ece097ff66cafc555458bb20984725f287d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4203540e4ea7910048979c1345d5ece097ff66cafc555458bb20984725f287d->enter($__internal_e4203540e4ea7910048979c1345d5ece097ff66cafc555458bb20984725f287d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e4203540e4ea7910048979c1345d5ece097ff66cafc555458bb20984725f287d->leave($__internal_e4203540e4ea7910048979c1345d5ece097ff66cafc555458bb20984725f287d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eee0ad66b3b7fd1ed1b8d61bcc84aa7b49c14bfbfca4934bc06f0f7659aba112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee0ad66b3b7fd1ed1b8d61bcc84aa7b49c14bfbfca4934bc06f0f7659aba112->enter($__internal_eee0ad66b3b7fd1ed1b8d61bcc84aa7b49c14bfbfca4934bc06f0f7659aba112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eee0ad66b3b7fd1ed1b8d61bcc84aa7b49c14bfbfca4934bc06f0f7659aba112->leave($__internal_eee0ad66b3b7fd1ed1b8d61bcc84aa7b49c14bfbfca4934bc06f0f7659aba112_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_31e6e4d77ff655acbbce9750e92b41cd04580595bb4490a87dfa82138d683e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e6e4d77ff655acbbce9750e92b41cd04580595bb4490a87dfa82138d683e7a->enter($__internal_31e6e4d77ff655acbbce9750e92b41cd04580595bb4490a87dfa82138d683e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31e6e4d77ff655acbbce9750e92b41cd04580595bb4490a87dfa82138d683e7a->leave($__internal_31e6e4d77ff655acbbce9750e92b41cd04580595bb4490a87dfa82138d683e7a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd91289c1d5ae1d099bfb17ffb81d7a47fe04910d7731f742c42a935688e740a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd91289c1d5ae1d099bfb17ffb81d7a47fe04910d7731f742c42a935688e740a->enter($__internal_fd91289c1d5ae1d099bfb17ffb81d7a47fe04910d7731f742c42a935688e740a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fd91289c1d5ae1d099bfb17ffb81d7a47fe04910d7731f742c42a935688e740a->leave($__internal_fd91289c1d5ae1d099bfb17ffb81d7a47fe04910d7731f742c42a935688e740a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/abdoulaye/workspace/iotStage/senpluvio/ui/web_app/app/Resources/views/base.html.twig");
    }
}
